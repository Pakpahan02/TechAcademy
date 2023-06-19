<?php
$tema = "./";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>Tech Academy</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/cropped-logon512-180x180.png" />
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="dist/css/style.min.css" />
    <style>
        #example1 {
            background: url(images/hero-3-bottom-img.png);
            background-repeat: no-repeat;
            background-size: 1000px;
            background-position: center bottom;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../js/overhang/dist/overhang.min.css" />

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100">
            <div class="position-relative z-index-5">
                <div class="row">
                    <div class="col-lg-6 col-xl-8 col-xxl-8">

                        <div class="d-none d-lg-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                            <img src="images/banner6.e477ea18.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 col-xxl-4">
                        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
                            <div class="d-flex align-items-center w-100 h-100" id="example1">
                                <div class="card-body px-xxl-5">
                                    <h2 class="mb-0 fs-7 fw-bolder">Welcome to T.A</h2>
                                    <a href="../index.php" class="text-nowrap logo-img d-block  py-9 pb-5 mb-3 pb-xl-0">
                                        <img src="images/logo_white.png" width="380" alt="">
                                    </a>
                                    
                                    <form method="POST" id="frm_login" action="prosesLogin.php">

                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control border border-info" placeholder="Username" name="username" id="username" />
                                            <label><i class="ti ti-user me-2 fs-4 text-info"></i><span class="border-start border-info ps-3">Username</span></label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control border border-info" placeholder="Password" name="password" id="password" />
                                            <label><i class="ti ti-lock me-2 fs-4 text-info"></i><span class="border-start border-info ps-3">Password</span></label>
                                        </div>

                                        <button class="btn btn-primary w-100 py-8 mb-4 rounded-2" type="submit" id="btn_submit" name="login_btn">Sign In</button>
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="fs-4 mb-0 fw-medium">&copy;2023 Tech Academy</p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  Import Js Files -->
    <script src="dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>

    <script src="dist/js/custom.js"></script>

    <script src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/overhang/dist/overhang.min.js"></script>
</body>

</html>