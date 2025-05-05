<?php include_once 'slider.php';

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $password = $_POST['password'];
 

 $query = "INSERT INTO `data1` (`name`, `number`, `email`, `password`) VALUES      ('$name', '$number', '$email', '$password')";



   mysqli_query($con, $query);
}


 ?>

    
      <main class="app-main">
        <!--begin::App Content Header-->  
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">General Form</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name</label>
                        <input type="text" 
                                name="name"
                                class="form-control" 
                                id="exampleInputPassword1" />
                      </div>
                       <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Number</label>
                        <input type="text" 
                                name="number"
                                class="form-control" 
                                id="exampleInputPassword1" />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          aria-describedby="emailHelp"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" 
                                name="password"
                                class="form-control" 
                                id="exampleInputPassword1" />
                      </div>
                    
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                <!--begin::Input Group-->
                
                <!--end::Input Group-->
                <!--begin::Horizontal Form-->
                <!--end::Horizontal Form-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <?php include_once 'footer.php' ?>