<!-- configuration file for the site-->
<?php include "{$_SERVER['DOCUMENT_ROOT']}/shop/config/config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>



</head>
<body>
        <!-- developer contacts-->
        <div class="container col-12">

            <div class="col-12 text-right">
                <a href="tel:+254771805322" class="text-right text-danger">contact us</a>

            </div>
        </div>

        <!-- end of developer contact-->
        <!--navigation-->

        <nav class="navbar bg-light navbar-light navbar-expand-lg">
          <div class="container">
              <a href="<?php $root."index.php" ?>" class="navbar-brand" id = "logo"><img src="<?php echo $root."dev_images/logo.jpg" ?>" title="logo" width="30" height="30" class="rounded-circle"><span>cosa world</span></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse  navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active login_required"><a href="<?php echo $root."index.php"; ?>" class="nav-link">products</a></li>
                      <li class="nav-item login_required"><a href="<?php echo $root."statistics/statistics.php"; ?>" class="nav-link">statistics</a></li>
                      <li class="nav-item login_required"><a href="<?php echo $root."login/login.php"; ?>" class="nav-link">login</a></li>
                      <li class="nav-item login_required"><a href="<?php echo $root."registration/registration.php"; ?>" class="nav-link">Register</a></li>
                      <li class="nav-item login_required"><a href="<?php echo $root."admin/admin.php"; ?>" class="nav-link">Stock</a></li>
                      <li class="nav-item">
                        <span class="badge badge-secondary text-warning login_required">
                        profit ksh:
                        <span id="profit"></span>

                        </span>

                      </li>
                  </ul>
              </div>
          </div>
        </nav>

        <!-- end navigation-->





</body>
</html>
