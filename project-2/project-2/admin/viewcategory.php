<?php
include_once 'slider.php'; 

$sql_select = "SELECT * FROM `category`";
$data = mysqli_query($con, $sql_select);
session_destroy();

?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Name</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($res = mysqli_fetch_assoc($data)) { ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                            <td><?php echo $res['name']; ?></td>
                                            <td><a href="./addcategory.php?u_id=<?php echo $res['id']; ?>">Update</a></td>
                                            <td><a href="./addcategory.php?d_id=<?php echo $res['id']; ?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>