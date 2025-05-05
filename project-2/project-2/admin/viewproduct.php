<?php
include_once 'slider.php';

$query = "SELECT * FROM `product`";
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
                                        <th>image</th>
                                        <th>category</th>
                                        <th>Product Name</th>
                                        <th>Basic price</th>
                                        <th>Discounted price</th>
                                        <th>Update</th>
                                        <th>delete</th>
                                      </tr>
                                </thead>
                                <tbody>
                                     <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                          <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><img src="image/<?php echo $row['image']; ?>" width="100"></td>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['basic']; ?></td>
                                            <td><?php echo $row['discount']; ?></td>

                                            <td><a href="./addproduct.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                                            <td><a href="./addproduct.php?d_id=<?php echo $row['id']; ?>">Delete</a></td>
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

