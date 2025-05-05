<?php
include_once 'slider.php';

$query = "SELECT * FROM `blog`";
$result = mysqli_query($con, $query);

?>

<main class="app-main">
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
                <div class="col-md-12">
                    <!--begin::Table-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Project Data</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><img src="image/<?php echo $row['image']; ?>" width="100" alt="Image"></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['description']; ?></td>

                                            <td><a href="./addblog.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                                            <td><a href="./addblog.php?d_id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Table-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
