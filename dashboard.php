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

    $JML_GEN = $Lcount + $Pcount;

    //------- Data Grafik JML TARUNA BASED JURUSAN
    $JPcount=0;
    $getDataJP = $con->query("SELECT * FROM taruna WHERE ID_JURUSAN = '001'");
    while ( $fetchDataJP = $getDataJP->fetch_assoc()) {
        $JPcount = $JPcount + 1;
    }

    $JTPcount=0;
    $getDataJTP = $con->query("SELECT * FROM taruna WHERE ID_JURUSAN = '002'");
    while ( $fetchDataJTP = $getDataJTP->fetch_assoc()) {
        $JTPcount = $JTPcount + 1;
    }

    $JKPcount=0;
    $getDataJKP = $con->query("SELECT * FROM taruna WHERE ID_JURUSAN = '003'");
    while ( $fetchDataJKP = $getDataJKP->fetch_assoc()) {
        $JKPcount = $JKPcount + 1;
    }

    $JMPcount=0;
    $getDataJMP = $con->query("SELECT * FROM taruna WHERE ID_JURUSAN = '004'");
    while ( $fetchDataJMP = $getDataJMP->fetch_assoc()) {
        $JMPcount = $JMPcount + 1;
    }

    $JML_JUR = $JPcount + $JTPcount + $JKPcount + $JMPcount;

    //------- Data Grafik JML TARUNA BASED PRODI
    $PNB_ST=0;
    $getDataPNB_ST = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '1012'");
    while ( $fetchDataPNB_ST = $getDataPNB_ST->fetch_assoc()) {
        $PNB_ST = $PNB_ST + 1;
    }

    $PNB_SP=0;
    $getDataPNB_SP = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '1013'");
    while ( $fetchDataPNB_SP = $getDataPNB_SP->fetch_assoc()) {
        $PNB_SP = $PNB_SP + 1;
    }

    $TPU=0;
    $getDataTPU = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '2007'");
    while ( $fetchDataTPU = $getDataTPU->fetch_assoc()) {
        $TPU = $TPU + 1;
    }

    $TNU=0;
    $getDataTNU = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '2008'");
    while ( $fetchDataTNU = $getDataTNU->fetch_assoc()) {
        $TNU = $TNU + 1;
    }

    $TLB=0;
    $getDataTLB = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '2009'");
    while ( $fetchDataTLB = $getDataTLB->fetch_assoc()) {
        $TLB = $TLB + 1;
    }

    $TMB=0;
    $getDataTMB = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '2010'");
    while ( $fetchDataTMB = $getDataTMB->fetch_assoc()) {
        $TMB = $TMB + 1;
    }

    $TBL=0;
    $getDataTBL = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '2011'");
    while ( $fetchDataTBL = $getDataTBL->fetch_assoc()) {
        $TBL = $TBL + 1;
    }

    $KP=0;
    $getDataKP = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '3004'");
    while ( $fetchDataKP = $getDataKP->fetch_assoc()) {
        $KP = $KP + 1;
    }

    $PA=0;
    $getDataPA = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '3005'");
    while ( $fetchDataPA = $getDataPA->fetch_assoc()) {
        $PA = $PA + 1;
    }

    $PKP=0;
    $getDataPKP = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '3006'");
    while ( $fetchDataPKP = $getDataPKP->fetch_assoc()) {
        $PKP = $PKP + 1;
    }

    $PLLU=0;
    $getDataPLLU = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '3014'");
    while ( $fetchDataPLLU = $getDataPLLU->fetch_assoc()) {
        $PLLU = $PLLU + 1;
    }

    $OBU=0;
    $getDataOBU = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '4001'");
    while ( $fetchDataOBU = $getDataOBU->fetch_assoc()) {
        $OBU = $OBU + 1;
    }

    $AUN=0;
    $getDataAUN = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '4002'");
    while ( $fetchDataAUN = $getDataAUN->fetch_assoc()) {
        $AUN = $AUN + 1;
    }

    $PBU=0;
    $getDataPBU = $con->query("SELECT * FROM taruna WHERE ID_PRODI = '4003'");
    while ( $fetchDataPBU = $getDataPBU->fetch_assoc()) {
        $PBU = $PBU + 1;
    }

    $JML_PROD = $PNB_ST + $PNB_SP + $TPU + $TNU + $TLB + $TMB + $TBL + $PLLU + $KP + $PA + $PKP + $OBU + $AUN + $PBU;

    //------- Data Grafik JML TARUNA BASED NAGKATAN
    $getData = $con->query("SELECT angkatan ,COUNT( angkatan) AS h_angkatan FROM taruna GROUP BY angkatan");
    
    $JML_ANG=0;
    $getDatajml = $con->query("SELECT * FROM taruna");
    while ($fetchDatajml = $getDatajml->fetch_assoc()) {
        $JML_ANG = $JML_ANG + 1;
    }

    //------- Data Grafik JML TARUNA BASED STATUS
    $aktif=0;
    $getDataaktif = $con->query("SELECT * FROM taruna WHERE STATUS = 'Aktif'");
    while ( $fetchDataaktif = $getDataaktif->fetch_assoc()) {
        $aktif = $aktif + 1;
    }

    $alumni=0;
    $getDataalumni = $con->query("SELECT * FROM taruna WHERE STATUS = 'Alumni'");
    while ( $fetchDataalumni = $getDataalumni->fetch_assoc()) {
        $alumni = $alumni + 1;
    }

    $cuti=0;
    $getDatacuti = $con->query("SELECT * FROM taruna WHERE STATUS = 'Cuti'");
    while ( $fetchDatacuti = $getDatacuti->fetch_assoc()) {
        $cuti = $cuti + 1;
    }

    $DO=0;
    $getDataDO = $con->query("SELECT * FROM taruna WHERE STATUS = 'Drop Out'");
    while ( $fetchDataDO = $getDataDO->fetch_assoc()) {
        $DO = $DO + 1;
    }

    $JML_STATUS = $aktif + $alumni + $cuti + $DO;

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
    <script>
    window.onload = function() {
        var L = <?php echo $Lcount;?>;
        var P = <?php echo $Pcount;?>;
        var JP = <?php echo $JPcount;?>;
        var JTP = <?php echo $JTPcount;?>;
        var JKP = <?php echo $JKPcount;?>;
        var JMP = <?php echo $JMPcount;?>;
        var PNB_ST = <?php echo $PNB_ST;?>;
        var PNB_SP = <?php echo $PNB_SP;?>;
        var TPU = <?php echo $TPU;?>;
        var TNU = <?php echo $TNU;?>;
        var TLB = <?php echo $TLB;?>;
        var TMB = <?php echo $TMB;?>;
        var TBL = <?php echo $TBL;?>;
        var PLLU = <?php echo $PLLU;?>;
        var KP = <?php echo $KP;?>;
        var PA = <?php echo $PA;?>;
        var PKP = <?php echo $PKP;?>;
        var OBU = <?php echo $OBU;?>;
        var AUN = <?php echo $AUN;?>;
        var PBU = <?php echo $PBU;?>;
        var aktif = <?php echo $aktif;?>;
        var alumni = <?php echo $alumni;?>;
        var cuti = <?php echo $cuti;?>;
        var DO = <?php echo $DO;?>;

    var chartgen = new CanvasJS.Chart("graphgender", {
        animationEnabled: true,
        title: {
            text: "Jumlah Taruna Berdasarkan Gender"
        },
        data: [{
            type: "pie",
            startAngle: 45,
            yValueFormatString: "##0.\" Taruna\"",
            indexLabel: "{label} {y}",
            dataPoints: [
                {y: L, label: "Laki-laki"},
                {y: P, label: "Perempuan"},
            ]
        }]
    });

    var chartjur = new CanvasJS.Chart("graphjurusan", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Jumlah Taruna Berdasarkan Jurusan"
        },
        axisY: {
            title: "Jumlah Taruna"
        },
        data: [{        
            type: "column",
            dataPoints: [      
                { y: JP, label: "PENERBANGAN" },
                { y: JTP,  label: "TEKNIK PENERBANGAN" },
                { y: JKP,  label: "KESELAMATAN PENERBANGAN" },
                { y: JMP,  label: "MANAJEMEN PENERBANGAN" }
            ]
        }]
    });

    var chartstatus = new CanvasJS.Chart("graphstatus", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Jumlah Taruna Berdasarkan Status"
        },
        axisY: {
            title: "Jumlah Taruna"
        },
        data: [{        
            type: "column",
            dataPoints: [      
                { y: aktif, label: "AKTIF" },
                { y: alumni,  label: "ALUMNI" },
                { y: cuti,  label: "CUTI" },
                { y: DO,  label: "DROP OUT" }
            ]
        }]
    });

    var chartprodi = new CanvasJS.Chart("graphprodi", {
        animationEnabled: true,
        
        title:{
            text:"Jumlah Taruna Berdasarkan Program Studi"
        },
        axisX:{
            interval: 1
        },
        axisY2:{
            interlacedColor: "rgba(1,77,101,.2)",
            gridColor: "rgba(1,77,101,.1)",
            title: "Jumlah Taruna"
        },
        data: [{
            type: "bar",
            name: "companies",
            axisYType: "secondary",
            color: "#014D65",
            dataPoints: [
                { y: PNB_ST, label: "PNB ST" },
                { y: PNB_SP, label: "PNB SP" },
                { y: TPU, label: "TPU" },
                { y: TNU, label: "TNU" },
                { y: TLB, label: "TLB" },
                { y: TMB, label: "TMB" },
                { y: TBL, label: "TBL" },
                { y: PLLU, label: "PLLU" },
                { y: KP, label: "KP" },
                { y: PA, label: "PA" },
                { y: PKP, label: "PKP" },
                { y: OBU, label: "OBU" },
                { y: AUN, label: "AUN" },
                { y: PBU, label: "PBU" }
            ]
        }]
    });

    var chartangkatan = new CanvasJS.Chart("graphangkatan", {
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Jumlah Taruna Berdasarkan Angkatan"
        },
        axisY: {
            title: "Jumlah Taruna"
        },
        data: [{        
            type: "column",
            dataPoints: [
            <?php while ($fetchData = $getData->fetch_assoc()) {?>      
                { y: <?php echo $fetchData['h_angkatan']?>, label: <?php echo $fetchData['angkatan']?> },
            <?php } ?>
            ]
        }]
    });

    chartjur.render();
    chartprodi.render();
    chartangkatan.render();
    chartstatus.render();
    chartgen.render();

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
                            <h2>JUMLAH TARUNA BERDASARKAN JURUSAN</h2>
                        </div>
                        <div class="body">
                            <div id="graphjurusan" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="header">
                            <h5>Jumlah Total : <?php echo $JML_JUR; ?></h5> 
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                 <!-- Task Info -->
                <div class="col-xs-16 col-sm-16 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>JUMLAH TARUNA BERDASARKAN PROGRAM STUDI</h2>
                        </div>
                        <div class="body">
                            <div id="graphprodi" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="header">
                            <h5>Jumlah Total : <?php echo $JML_PROD; ?></h5> 
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                <!-- Task Info -->
                <div class="col-xs-16 col-sm-16 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>JUMLAH TARUNA BERDASARKAN ANGKATAN/TAHUN MASUK</h2>
                        </div>
                        <div class="body">
                            <div id="graphangkatan" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="header">
                            <h5>Jumlah Total : <?php echo $JML_ANG; ?></h5> 
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                <!-- Task Info -->
                <div class="col-xs-16 col-sm-16 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>JUMLAH TARUNA BERDASARKAN STATUS</h2>
                        </div>
                        <div class="body">
                            <div id="graphstatus" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="header">
                            <h5>Jumlah Total : <?php echo $JML_STATUS; ?></h5> 
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                
                <!-- Task Info -->
                <div class="col-xs-16 col-sm-16 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>JUMLAH TARUNA BERDASARKAN GENDER</h2>
                        </div>
                        <div class="body">
                           <div id="graphgender" style="height: 300px; width: 100%;"></div>
                        </div>
                        <div class="header">
                            <h5>Jumlah Total : <?php echo $JML_GEN; ?></h5> 
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