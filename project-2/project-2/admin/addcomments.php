<?php
ob_start();
include_once 'slider.php';


if (isset($_GET['u_id'])) {
    $id = $_GET['u_id'];
    $query = "SELECT * FROM `product` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $b_id = $_POST['b_id'];
    $comment = $_POST['comment'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $suggetion = $_POST['suggetion'];
    


    if (isset($_GET['u_id'])) {
       
       $sql = "UPDATE `product` SET `b_id`='$b_id', `comment`='$comment', `name`='$name', `email`='$email', `suggetion`='$suggetion' WHERE `id`='$id'";

    } 
    else 
    {
        $sql = "INSERT INTO `product` (`b_id`, `comment`, `name`, `email`,`suggetion`) VALUES ('$b_id', '$comment', '$name', '$email','$suggetion')";
    }


        mysqli_query($con, $sql);
        header("Location: viewcomments.php");  
        
}


if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];

    
 
    $del_sql = "DELETE FROM `product` WHERE `id` = '$id'";
    mysqli_query($con, $del_sql);

    header('location:viewcomments.php');
    
}

$blog_data = mysqli_query($con, "SELECT * FROM `blog`");
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
                                            <label for="blog">b_id</label>
                                            <select name="blog">
                                                <?php while ($res = mysqli_fetch_assoc($blog_data)) { ?>
                                                    <option value="<?php echo $res['id']; ?>"
                                                        <?php echo (isset($row['blog']) && $row['blog'] == $res['id']) ? 'selected' : ''; ?>>
                                                        <?php echo $res['id']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                         <div class="mb-3">
                                            <label for="comment" class="form-label">comment</label>
                                            <input type="text" name="comment" class="form-control" id="comment" value="<?php echo @$row['comment']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Product Name</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">email</label>
                                            <input type="text" name="email" class="form-control" id="email" value="<?php echo @$row['email']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="discount" class="form-label">suggetion</label>
                                            <input type="text" name="suggetion" class="form-control" id="suggetion" value="<?php echo @$row['suggetion']; ?>" required />
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
