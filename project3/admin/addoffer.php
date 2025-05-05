<?php
ob_start();

include('slidebar.php');

if(isset($_GET['u_id'])) 
{
    $id = $_GET['u_id'];

    $query = "SELECT * FROM `offer` WHERE `id`='$id'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) 
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];

    if (isset($_GET['u_id'])) 
    {
        $id = $_GET['u_id'];
        $sql = "UPDATE `offer` SET `title`='$title', `description`='$description', `icon`='$icon' WHERE `id`='$id'";
    } 
    else 
    {
        $sql = "INSERT INTO `offer` (`title`, `description`, `image`) VALUES ('$title', '$description', '$image')";
    }

    mysqli_query($con, $sql);
    header("Location: viewoffer.php");
    session_destroy();
}


if(isset($_GET['d_id'])) 
{
    $id = $_GET['d_id'];
    $del_sql = "DELETE FROM `offer` WHERE `id` = '$id'";
    mysqli_query($con, $del_sql);
    header('location:viewoffer.php');
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<main class="app-main">
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">General Form</h3></div>
            </div>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-primary card-outline mb-4">
                        <div class="card-header"><div class="card-title">Quick Example</div></div>
                        <form method="POST">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" name="title" class="form-control" value="<?php echo @$row['title']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description:</label>
                                    <input type="text" name="description" class="form-control" value="<?php echo @$row['description']; ?>" required />
                                </div>
                                <div class="mb-3">
                                    <label for="icon" class="form-label">Icon (FontAwesome class):</label>
                                    <input type="text" name="icon" class="form-control" value="<?php echo @$row['icon']; ?>" required />
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" name="submit" class="btn btn-primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Scripts -->
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
</body>
</html>
