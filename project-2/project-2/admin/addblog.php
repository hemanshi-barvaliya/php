<?php
ob_start();
include_once 'slider.php';


if (isset($_GET['u_id']))

 {
    $id = $_GET['u_id'];

    $query = "SELECT * FROM `blog` WHERE `id`='$id'";

    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    
 
    if ($image == '')
     {
        $image = $row['image'];

    } 

    else 
    {
     
       if(isset($_GET['u_id']))
        {
            unlink('image/' . $row['image']);
        }
        
        $path = 'image/' . $image;
        move_uploaded_file($_FILES['image']['tmp_name'], $path);
    }

    
    if (isset($_GET['u_id'])) 
    {
       
        $sql = "UPDATE `blog` SET `image`='$image', `name`='$name', `date`='$date', `title`='$title', `description`='$description' WHERE `id`='$id'";
         mysqli_query($con, $sql);
        header("Location: viewblog.php");
    

    }
     else 
     {
   
        $sql = "INSERT INTO `blog` (`image`, `name`, `date`, `title`, `description`) VALUES ('$image', '$name', '$date', '$title', '$description')";
    }
        mysqli_query($con, $sql);
        header("Location: viewblog.php");
    
}


if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
  
    $del_sql = "DELETE FROM `blog` WHERE `id` = '$id'";
    $result = mysqli_query($con, $del_sql);
    
    header('Location: viewblog.php');
}
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
                                    <div class="card-title">Blog</div>
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
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" name="date" class="form-control" id="date" value="<?php echo @$row['date']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control" id="title" value="<?php echo @$row['title']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" id="description" required><?php echo @$row['description']; ?></textarea>
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
