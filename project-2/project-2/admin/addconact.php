<?php
ob_start();
include_once 'slider.php';


if (isset($_GET['u_id']))

 {
    $id = $_GET['u_id'];

    $query = "SELECT * FROM `contact` WHERE `id`='$id'";

    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];

    if (isset($_GET['u_id'])) 
    {
       
        $sql = "UPDATE `contact` SET 
                `name`='$name', 
                `email`='$email', 
                `contact`='$contact',   
                `message`='$message' 
                WHERE `id`='$id'";

        mysqli_query($con, $sql);
        header("Location: viewcontact.php");
    

    }
     else 
     {
   
        $sql = "INSERT INTO `contact` (`name`, `email`, `contact`, `message`) 
                            VALUES ('$name', '$email', '$contact', '$message')";
    }
        mysqli_query($con, $sql);
        header("Location: viewcontact.php");
    
}


if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
  
    $del_sql = "DELETE FROM `contact` WHERE `id` = '$id'";
    $result = mysqli_query($con, $del_sql);
    
    header('Location: viewcontact.php');
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
                                    <div class="card-title">contact</div>
                                </div>

                                <form method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="date" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" value="<?php echo @$row['email']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="contact" class="form-label">Contact</label>
                                            <input type="text" name="contact" class="form-control" id="contact" value="<?php echo @$row['contact']; ?>" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea name="message" class="form-control" id="message" required><?php echo @$row['message']; ?></textarea>
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
