<?php
include_once 'slider.php';

$query = "SELECT * FROM `comment`";
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
                                        <th>b_id</th>
                                        <th>comment</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>suggetion</th>
                                        <th>Update</th>
                                        <th>delete</th>
                                      </tr>
                                </thead>
                                <tbody>
                                     <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['b_id']; ?></td>
                                            <td><?php echo $row['comment']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['suggetion']; ?></td>

                                            <td><a href="./addcomments.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                                            <td><a href="./addcomments.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
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

