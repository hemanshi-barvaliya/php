<?php
ob_start();

include('slidebar.php');


if(isset($_GET['u_id'])) 
{
    $id = $_GET['u_id'];
    $query = "SELECT * FROM `post` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}


if (isset($_POST['submit']))
 {
    $title =  $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

  
    if ($image == '')
     {
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

    if (isset($_GET['u_id']))
     {
        
        $id = $_GET['u_id'];

        $sql = "UPDATE `post` SET `title`='$title', `description`='$description', `image`='$image' WHERE `id`='$id'";
    }
     else 
     {
       
        $sql = "INSERT INTO `post` (`title`, `description`, `image`) VALUES 
                ('$title', '$description', '$image')";
    }

        mysqli_query($con, $sql);
        header("Location: viewpost.php");
       
}


if(isset($_GET['d_id'])) 
{
    $id = $_GET['d_id'];
    $query = "SELECT * FROM `post` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    unlink("image/" . $row['image']);

    
    $del_sql = "DELETE FROM `post` WHERE `id` = '$id'";
        mysqli_query($con, $del_sql);
        header('Location: viewpost.php');
}


?>

<!-- HTML Form for Creating/Editing Post -->
<main class="app-main">
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
                        <div class="card-header"><div class="card-title">Quick Example</div></div>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" name="title" class="form-control" id="title" value="<?php echo @$row['title']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <input type="text" name="description" class="form-control" id="description" value="<?php echo @$row['description']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image:</label>
                                    <input type="file" name="image" class="form-control" id="image" />
                                    <?php
                                    if (isset($row['image']) && $row['image'] != '') {
                                        echo "<img src='image/{$row['image']}' width='100' alt='Current Image' />";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>