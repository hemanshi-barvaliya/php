<?php
include('slidebar.php');

$query = "SELECT * FROM `post`";
$result = mysqli_query($con, $query);
session_destroy();

?>

<main class="app-main">
    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-12">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header">
                            <div class="card-title">Project Data</div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cnt=1; while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $cnt++; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><img src="image/<?php echo $row['image']; ?>" width="100"></td>
                                            
                                            <td><a href="addpost.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                                            <td><a href="addpost.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
