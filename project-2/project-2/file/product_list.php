<?php
include_once 'header.php'; 

if (!isset($_SESSION['user_id'])) {
    echo "Please login first.";
    exit;
}

if (isset($_GET['product_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['product_id'];

  
    $check_sql = "SELECT * FROM wishlist WHERE user_id = '$user_id' AND product_id = '$product_id'";
    $check_result = mysqli_query($con, $check_sql);

    if (mysqli_num_rows($check_result) == 0) {
        $insert_sql = "INSERT INTO wishlist (user_id, product_id) VALUES ('$user_id', '$product_id')";
        mysqli_query($con, $insert_sql);
    }

    header("Location: wishlist.php");
    exit;
}


if (isset($_GET['p_id'])) {
    $user_id = $_SESSION['user_id'];
    $product_id = $_GET['p_id'];

  
    $check = mysqli_query($con, "SELECT * FROM cart WHERE user_id='$user_id' AND product_id='$product_id'");
    if (mysqli_num_rows($check) == 0) {
        mysqli_query($con, "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')");
    }

    header("Location: addtocart.php");
    exit;
}



$category_query = "SELECT * FROM category";
$category_result = mysqli_query($con, $category_query);


if (isset($_GET['cat_id'])) 
{
    $cat_id = $_GET['cat_id'];
    $cat_query = "SELECT product.*, category.name AS c_name FROM product 
                  INNER JOIN category ON product.category = category.id 
                  WHERE product.category = $cat_id";
    $cat_sel = mysqli_query($con, $cat_query);
}
 else
  {
    $cat_query = "SELECT product.*, category.name AS c_name FROM product 
                  INNER JOIN category ON product.category = category.id";
    $cat_sel = mysqli_query($con, $cat_query);
}
?>

<div class="page-wrapper">
    <div class="page-content">
        <!-- Start breadcrumb -->
        <section class="py-3 border-bottom d-none d-md-flex">
            <div class="container">
                <div class="page-breadcrumb d-flex align-items-center">
                    <h3 class="breadcrumb-title pe-3">PRODUCT LIST</h3>
                    <div class="ms-auto">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="index.php"><i class="bx bx-home-alt"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="product_list.php">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-3">
                        <div class="filter-sidebar d-none d-xl-flex">
                            <div class="card rounded-0 w-100">
                                <div class="card-body">
                                    <div class="product-categories">
                                        <h6 class="text-uppercase mb-3">Categories</h6>
                                        <ul class="list-unstyled mb-0 categories-list">
                                            <li><a href="product_list.php">All Product</a></li>
                                            <?php while ($cat_data = mysqli_fetch_assoc($category_result)) {
                                                $cat_count_query = "SELECT * FROM product WHERE category = ".$cat_data['id'];
                                                $cat_count_result = mysqli_query($con, $cat_count_query);
                                                $count = mysqli_num_rows($cat_count_result); ?>
                                                <li><a href="product_list.php?cat_id=<?php echo $cat_data['id']; ?>"><?php echo $cat_data['name']; ?> <span class="float-end badge rounded-pill bg-light"><?php echo $count; ?></span></a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="product-wrapper">
                            <div class="product-grid">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3">
                                    <?php while ($data = mysqli_fetch_assoc($cat_sel)) { ?>
                                        <div class="col">
                                            <div class="card rounded-0 product-card">
                                                <div class="card-header bg-transparent border-bottom-0">
                                                    <div class="d-flex align-items-center justify-content-end gap-3">
                                                        <a href="javascript:;">
                                                            <div class="product-compare"><span><i class="bx bx-git-compare"></i> Compare</span></div>
                                                        </a>

                                                        <a href="javascript:;" class="btn btn-link btn-ecomm add-to-wishlist" data-product-id="<?php echo $data['id']; ?>">
                                                            <i class="bx bx-heart"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <img style="height: 260px; 
                                                    width: 260px; 
                                                    display: block;
                                                    margin-left: auto;
                                                    margin-right: auto;
                                                    " src="../admin/image/<?php echo $data['image']; ?>" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <div class="product-info">
                                                        <a href="javascript:;">
                                                            <p class="product-category font-13 mb-1"><?php echo $data['c_name']; ?></p>
                                                        </a>
                                                        <a href="javascript:;">
                                                            <h6 class="product-name mb-2"><?php echo $data['name']; ?></h6>
                                                        </a>
                                                        <div class="d-flex align-items-center">
                                                            <div class="mb-1 product-price">
                                                                <span class="me-1 text-decoration-line-through">$<?php echo $data['basic']; ?></span>
                                                                <span class="text-white fs-5">$<?php echo $data['discount']; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-action mt-2">
                                                            <div class="d-grid gap-2">
                                                                <a href="product_list.php?p_id=<?php echo $data['id']; ?>" class="btn btn-link btn-ecomm">
                                                                    <i class="bx bxs-cart-add"></i> Add to Cart
                                                                </a>
                                                                <a href="product-details.php?product_id=<?php echo $data['id']; ?>" class="btn btn-link btn-ecomm">
                                                                <i class="bx bx-zoom-in"></i> Quick View
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include_once 'footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        
        $('.add-to-wishlist').click(function(e) {
            e.preventDefault();

            var icon = $(this).find('i'); // Get the heart icon
            var productId = $(this).data('product-id');

            icon.toggleClass('text-danger');
            $.ajax({
                url: 'product_list.php',
                method: 'GET',
                data: {
                    product_id: productId
                },

            });
        });
    });
</script>

