<?php
    session_start();
    include 'koneksi.php';
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ketarunaan Sekolah Tinggi Penerbangan Indonesia</title>
    <!-- Favicon-->
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="../fonts/material-fonts.css" type="text/css">
    <link href="../iconfont/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Ketikkan data yang dicari.....">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../dashboard.php">ADMIN | KETARUNAAN SEKOLAH TINGGI PENERBANGAN INDONESIA</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li>
                        <a href="../dashboard.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>                    
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_circle</i>
                            <span>Data Taruna</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tambah_taruna.php">
                                    <span>Tambah Data Taruna</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_taruna.php">
                                    <span>Lihat Data Taruna</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">attach_money</i>
                            <span>Asuransi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tambah_asuransi.php">
                                    <span>Tambah Data Asuransi</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_asuransi.php">
                                    <span>Lihat Data Asuransi</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li   class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">work</i>
                            <span>Perlengkapan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="trans_perlengkapan.php">
                                    <span>Tambah Data Pengambilan Perlengkapan</span>
                                </a>
                            </li>
                            <li   class="active">
                                <a href="tambah_perlengkapan.php">
                                    <span>Tambah Data Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_trans_perlengkapan.php">
                                    <span>Lihat Data Pengambilan Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                            <li>
                                <a href="view_perlengkapan.php">
                                    <span>Lihat Data Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">domain</i>
                            <span>Program Studi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tambah_prodi.php">
                                    <span>Tambah Data Program Studi</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_prodi.php">
                                    <span>Lihat Data Program Studi</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">school</i>
                            <span>Jurusan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="tambah_jurusan.php">
                                    <span>Tambah Data Jurusan</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_jurusan.php">
                                    <span>Lihat Data Jurusan</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="../sign-out.php">
                            <i class="material-icons">exit_to_app</i>
                            <span>LOGOUT</span>
                        </a>
                    </li>
            </div>
            <!-- #Menu -->
            
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Tambah Data Perlengkapan</h2>                            
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="create-perlengkapan.php">                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="id_paket" maxlength="10" minlength="3" required>
                                        <label class="form-label">ID Paket Perlengkapan</label>
                                    </div>
                                    <div class="help-info">Maks 10 karakter</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="detail" required>
                                        <label class="form-label">Detail Perlengkapan</label>
                                    </div>
                                </div>                                                                                                          
                                <button class="btn btn-primary waves-effect" type="submit" name="simpan">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
            <!-- Advanced Validation -->
            
            <!-- #END# Advanced Validation -->
            <!-- Validation Stats -->
            
            <!-- #END# Validation Stats -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/forms/form-validation.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>