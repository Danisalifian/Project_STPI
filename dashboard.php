<?php
	session_start();
    include 'pages/koneksi.php';

    $getDataL = $con->query("SELECT * FROM taruna WHERE j_kel = 'Laki-laki'");
    $Lcount = 0;
    while ($fetchDataL = $getDataL->fetch_assoc()) {
        $Lcount = $Lcount + 1;
    }

    $Pcount=0;
    $getDataP = $con->query("SELECT * FROM taruna WHERE j_kel = 'Perempuan'");
    while ( $fetchDataP = $getDataP->fetch_assoc()) {
        $Pcount = $Pcount + 1;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ketarunaan Sekolah Tinggi Penerbangan Indonesia</title>
    <!-- Favicon-->
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="fonts/material-fonts.css" rel="stylesheet" type="text/css">
    <link href="iconfont/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <!-- Menghitung Jumlah Taruna -->
    <script type="text/javascript">
    window.onload = function() {
        var L = <?php echo $Lcount;?>;
        var P = <?php echo $Pcount;?>;

    var options = {
        title: {
            text: "Jumlah Taruna"
        },
        data: [{
                type: "pie",
                startAngle: 45,
                showInLegend: "true",
                legendText: "{label}",
                indexLabel: "{label} ({y})",
                yValueFormatString:"#,##0.#"%"",
                dataPoints: [
                    { label: "Laki-laki", y: L},
                    { label: "Perempuan", y: P }
                ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);

    }
    </script>

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
                <a class="navbar-brand" href="dashboard.php">ADMIN | KETARUNAAN SEKOLAH TINGGI PENERBANGAN INDONESIA</a>
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
                    <li class="active">
                        <a href="dashboard.php">
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
                                <a href="pages/tambah_taruna.php">
                                    <span>Tambah Data Taruna</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/view_taruna.php">
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
                                <a href="pages/tambah_asuransi.php">
                                    <span>Tambah Data Asuransi</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/view_asuransi.php">
                                    <span>Lihat Data Asuransi</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">work</i>
                            <span>Perlengkapan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="pages/trans_perlengkapan.php">
                                    <span>Tambah Data Pengambilan Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/tambah_perlengkapan.php">
                                    <span>Tambah Data Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/view_trans_perlengkapan.php">
                                    <span>Lihat Data Pengambilan Perlengkapan</span>
                                </a>
                            </li>
                            <li>
                            <li>
                                <a href="pages/view_perlengkapan.php">
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
                                <a href="pages/tambah_prodi.php">
                                    <span>Tambah Data Program Studi</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/view_prodi.php">
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
                                <a href="pages/tambah_jurusan.php">
                                    <span>Tambah Data Jurusan</span>
                                </a>
                            </li>
                            <li>
                                <a href="pages/view_jurusan.php">
                                    <span>Lihat Data Jurusan</span>
                                </a>
                            </li>
                            <li>
                        </ul>
                    </li>
                    
					<li>
                        <a href="sign-out.php">
                            <i class="material-icons">exit_to_app</i>
                            <span>LOGOUT</span>
                        </a>
					</li>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <div class="row clearfix">
                
                <!-- Task Info -->
                <div class="col-xs-16 col-sm-16 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>JUMLAH TARUNA</h2>
                        </div>
                        <div class="body">
                            <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <!-- CANVAS JS -->
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
</body>

</html>