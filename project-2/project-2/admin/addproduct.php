<?php
ob_start();
include_once 'slider.php';


if (isset($_GET['u_id'])) {
    $id = $_GET['u_id'];
    $query = "SELECT * FROM `product` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) 
{
    $category = $_POST['category'];
    $name = $_POST['name'];
    $basic = $_POST['basic'];
    $discount = $_POST['discount'];
    $image = $_FILES['image']['name'];

  if ($image == '') {
        $image = $row['image'];
    } 
    else 
    {
        if (isset($_GET['u_id'])) 
        {
           
            unlink('image/' . $row['image']);
        }

      
        $path = 'image/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }

   

    if (isset($_GET['u_id'])) {
       
       $sql = "UPDATE `product` SET `image`='$image', `category`='$category', `name`='$name', `basic`='$basic', `discount`='$discount' WHERE `id`='$id'";

    } 
    else 
    {
        $sql = "INSERT INTO `product` (`image`, `category`, `name`, `discount`, `basic`) VALUES ('$image', '$category', '$name', '$basic','$discount')";
    }


        mysqli_query($con, $sql);
        header("Location: viewproduct.php");  
        
}


if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];

    
 
    $del_sql = "DELETE FROM `product` WHERE `id` = '$id'";
    mysqli_query($con, $del_sql);

    header('location:viewproduct.php');
    
}

$cat_data = mysqli_query($con, "SELECT * FROM category");
?>

<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | General Form Elements</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" />
    <link rel="stylesheet" href="css/adminlte.css" />
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">General Form</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card card-primary card-outline mb-4">
                                <div class="card-header">
                                    <div class="card-title">Slider</div>
                                </div>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control" id="image" />
                                            <?php if (isset($row['image']) && $row['image'] != ''): ?>
                                                <img src="image/<?php echo $row['image']; ?>" alt="Current Image" width="100" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="mb-3">
                                            <label for="category">Category</label>
                                            <select name="category">
                                                <?php while ($res = mysqli_fetch_assoc($cat_data)) { ?>
                                                    <option value="<?php echo $res['id']; ?>"
                                                        <?php echo (isset($row['category']) && $row['category'] == $res['id']) ? 'selected' : ''; ?>>
                                                        <?php echo $res['name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Name</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="basic" class="form-label">Basic price</label>
                                            <input type="text" name="basic" class="form-control" id="basic" value="<?php echo @$row['basic']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="discount" class="form-label">Discounted price</label>
                                            <input type="text" name="discount" class="form-control" id="discount" value="<?php echo @$row['discount']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
