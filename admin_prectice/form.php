<?php include_once 'silder.php';

  if(isset($_POST['submit']))
  {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $name;

    $query = "INSERT INTO `data1` 
            (`name`,`number`,`email`,`password`) VALUES
            ('$name','$number','$email','$password')";

            mysqli_query($con, $query);

  }



 ?>

      <!--end::Sidebar-->
      <!--begin::App Main-->
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
              <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="POST">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Name:</label>
                        <input type="Text" name="name" class="form-control" id="exampleInputPassword1" />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Phone No:</label>
                        <input type="text" name="number" class="form-control" id="exampleInputPassword1" />
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
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                   
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                
                
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
     
  </body>
  <!--end::Body-->
</html>
 <?php include_once 'footer.php'?>