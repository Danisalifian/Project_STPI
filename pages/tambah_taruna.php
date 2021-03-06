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
    <link href="../fonts/material-fonts.css" rel="stylesheet" type="text/css">
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
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">account_circle</i>
                            <span>Data Taruna</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
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
                    <li>
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
                            <li>
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
                            <h2>Tambah Data Taruna</h2>                            
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="create-taruna.php">                                
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nit" maxlength="10" minlength="3" required>
                                        <label class="form-label">Nomor Induk Taruna</label>
                                    </div>
                                    <div class="help-info">Maks 10 karakter</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama" required>
                                        <label class="form-label">Nama Taruna</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tmp_lahir" required>
                                        <label class="form-label">Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tgl_lahir" required>
                                        <label class="form-label">Tanggal Lahir (yyyy-mm-dd)</label>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Agama</label>
                                        <select class="form-control show-tick" name="agama" required>
                                            <option value="null">-- Pilih Agama --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                                        </select>
                                    </div>
                                 </div>

                                <label>Jenis Kelamin</label>
                                <div class="form-group">
                                    <input type="radio" name="j_kel" id="L" class="with-gap" value="Laki-laki">
                                    <label for="L">Laki-laki</label>

                                    <input type="radio" name="j_kel" id="P" class="with-gap" value="Perempuan">
                                    <label for="P" class="m-l-20">Perempuan</label>
                                </div>
                                <label>Golongan Darah</label>
                                <div class="form-group">
                                    <input type="radio" name="gol_darah" id="A" class="with-gap" value="A">
                                    <label for="A">A</label>

                                    <input type="radio" name="gol_darah" id="AB" class="with-gap" value="AB">
                                    <label for="AB" class="m-l-20">AB</label>

                                    <input type="radio" name="gol_darah" id="B" class="with-gap" value="AB">
                                    <label for="B" class="m-l-20">B</label>

                                    <input type="radio" name="gol_darah" id="O" class="with-gap" value="O">
                                    <label for="O" class="m-l-20">O</label>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Tinggi Badan (cm)</label>
                                            <input type="text" class="form-control" placeholder="Tinggi Badan" name="tg_badan" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Berat Badan (kg)</label>
                                            <input type="text" class="form-control" placeholder="Berat Badan" name="br_badan" required/>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Kode Pos</label>
                                            <input type="text" class="form-control" placeholder="Kode Pos" name="kd_pos" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Kelurahan</label>
                                            <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Kecamatan</label>
                                            <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" required/>
                                        </div>
                                    </div>
                                </div>
                                </div>

                                <!-- Select -->
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Provinsi</label>
                                        <!-- Baca Provinsi dari data base-->                                
                                        <?php
                                            $getProvinsi = $con->query("SELECT * FROM provinsi");
                                        ?> 
                                        <select class="form-control show-tick" name="provinsi" required>
                                            <option value="null">-- Pilih Provinsi --</option>
                                            <?php while($fetchProvinsi=$getProvinsi->fetch_assoc()) {?>
                                            <option value="<?=$fetchProvinsi["ID_PROV"]?>"><?=$fetchProvinsi['NAMA_PROV'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- END Baca PRODI dari data base--> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Kota/Kabupaten</label>
                                                <input type="text" class="form-control" placeholder="Kota/Kabupaten" name="kota" required/>
                                            </div>
                                        </div>
                                    </div>                                    
                                 </div>
                                
                                 <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Jurusan</label>
                                        <!-- Baca Jurusan dari data base-->                                
                                        <?php
                                            $getJurusan = $con->query("SELECT * FROM jurusan ORDER BY NAMA_JURUSAN ASC");
                                        ?> 
                                        <select class="form-control show-tick" name="jurusan" required>
                                            <option value="null">-- Pilih Jurusan --</option>
                                            <?php while($fetchJurusan=$getJurusan->fetch_assoc()) {?>
                                            <option value="<?=$fetchJurusan["ID_JURUSAN"]?>"><?=$fetchJurusan['NAMA_JURUSAN'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- END Baca Jurusan dari data base-->
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Program Studi</label>
                                        <!-- Baca PRODI dari data base-->                                
                                        <?php
                                            $getProdi = $con->query("SELECT * FROM prodi ORDER BY NAMA_PRODI ASC");
                                        ?> 
                                        <select required class="form-control show-tick" name="prodi" required>
                                            <option value="null">-- Pilih Program Studi --</option>
                                            <?php while($fetchProdi=$getProdi->fetch_assoc()) {?>
                                            <option value="<?=$fetchProdi["ID_PRODI"]?>"><?=$fetchProdi['NAMA_PRODI'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <!-- END Baca PRODI dari data base--> 
                                    </div>                                    
                                 </div>                                
                                <!-- #END# Select -->                               

                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Kelas</label>
                                            <input type="text" class="form-control" placeholder="Kelas" name="kelas" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Angakatan/Tahun Masuk</label>
                                            <input type="text" class="form-control" placeholder="Angkatan/Tahun Masuk" name="angkatan" required/>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <label>Status Taruna</label>
                                        <select class="form-control show-tick" name="status" required>
                                            <option value="null">-- Pilih Status Taruna --</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Alumni">Alumni</option>
                                            <option value="Cuti">Cuti</option>
                                            <option value="Drop Out">Drop Out</option>
                                        </select>
                                    </div>
                                 </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_telp" >
                                        <label class="form-label">No Telepon</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_ktp" >
                                        <label class="form-label">Nomor KTP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_kk">
                                        <label class="form-label">Nomor Kartu Keluarga</label> 
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" >
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Nama Asrama</label>
                                            <input type="text" class="form-control" placeholder="Nama Asrama" name="nama_asrama" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Kamar</label>
                                            <input type="text" class="form-control" placeholder="Kamar" name="kamar" />
                                        </div>
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