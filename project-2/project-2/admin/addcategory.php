<?php
ob_start();
include_once 'slider.php'; 

if (isset($_GET['u_id'])) 
{
    $id = $_GET['u_id'];
    $query = "SELECT * FROM `category` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}



if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];

    if (isset($_GET['u_id']))
     {
        $id = $_GET['u_id'];
        $sql = "UPDATE `category` SET `name`='$name' WHERE `id`='$id'";
    } 
    else 
    {
        $sql = "INSERT INTO `category` (`name`) VALUES ('$name')";
    }

    mysqli_query($con, $sql);
    header("Location: viewcategory.php");
}



if (isset($_GET['d_id']))
 {
    $id = $_GET['d_id'];
    $del_sql = "DELETE FROM `category` WHERE `id` = '$id'";
    mysqli_query($con, $del_sql);
    header('location:viewcategory.php');
}


?>

<main class="app-main">
    <!-- App Content Header -->
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
            </div>
        </div>
    </div>


    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header"><div class="card-title">Category</div></div>
                        <!-- Form -->
                        <form method="POST">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category Name:</label>
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>