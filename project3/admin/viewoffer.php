<?php
ob_start();
include('slidebar.php');

$sql_select = "SELECT * FROM `offer`";
$data = mysqli_query($con, $sql_select);
session_destroy();

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"><h1>View Slider</h1></div>
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
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Icon</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($res = mysqli_fetch_assoc($data)) { ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                            <td><?php echo $res['title']; ?></td>
                                            <td><?php echo $res['description']; ?></td>
                                            <!-- Correctly output the FontAwesome icon -->
                                            <td><i class="fa-solid <?php echo $res['icon']; ?>"></i></td>
                                            <td><a href="./addoffer.php?u_id=<?php echo $res['id']; ?>">Update</a></td>
                                            <td><a href="./addoffer.php?d_id=<?php echo $res['id']; ?>">Delete</a></td>
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

<?php include 'footer.php'; ?>
