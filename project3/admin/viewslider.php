<?php
include('slidebar.php');

$query = "SELECT * FROM `slider`";
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
                                        <th>name</th>
                                        <th>Description</th>
                                        <th>image</th>
                                        <th>Update</th>
                                        <th>delete</th>
                                      </tr>
                                </thead>
                                <tbody>
                                     <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><img src="image/<?php echo $row['image']; ?>" width="100"></td>

                                            <td><a href="./addslider.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                                            <td><a href="./addslider.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
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

