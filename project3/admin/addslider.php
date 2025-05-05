<?php
ob_start(); // Start output buffering

include('slidebar.php');

if(isset($_GET['u_id'])) {
    $id = $_GET['u_id'];

    $query = "SELECT * FROM `slider` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $data = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

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

    if (isset($_GET['u_id'])) {
        $id = $_GET['u_id'];

        $sql = "UPDATE `slider` SET `name`='$name',`description`='$description',`image`='$image' WHERE `id`='$id'";
    } else {
        $sql = "INSERT INTO `slider` (`name`, `description`, `image`) VALUES ('$name', '$description', '$image')";
    }

    mysqli_query($con, $sql);
    header("Location: viewslider.php");
    exit; // Prevent further script execution
}

if(isset($_GET['d_id']))
{
    $id = $_GET['d_id'];

    $query = "SELECT * FROM `slider` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    unlink("image/".$row['image']);

    $del_sql = "DELETE FROM `slider` WHERE `id` = '$id'";

    mysqli_query($con, $del_sql);

    header('location:viewslider.php');
}



ob_end_flush(); // End output buffering
?>


<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
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
                <div class="col-md-6">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header"><div class="card-title">Quick Example</div></div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form method="POST" enctype="multipart/form-data">
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" name="name" class="form-control" id="name" value="<?php echo @$row['name']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <input type="text" name="description" class="form-control" id="description" value="<?php echo @$row['description']; ?>"required />
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image:</label>
                                    <input type="file" name="image" class="form-control" id="image" required />
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">

                                <input type="submit" name="submit" class="btn btn-primary" />
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->
                </div>
                <!--end::Col-->
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
<!--end::App Main-->



<!--begin::Script-->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="js/adminlte.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector('.sidebar-wrapper');
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
            OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                scrollbars: {
                    theme: 'os-theme-light',
                    autoHide: 'leave',
                    clickScroll: true,
                },
            });
        }
    });
</script>
<!--end::Script-->
</body>
</html>
