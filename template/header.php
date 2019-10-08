<?php 
    include '../config.php'; 
?>
<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7.1
*
-->

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:20:52 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Aplikasi Surat Desa</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
</head>

<style type="text/css">
    .list-data{
        padding-left: 20%;
        padding-right: 20%;
    }
</style>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="../assets/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                        </div>
                        <div class="logo-element">
                            M
                        </div>
                    </li>
                    <li class="active">
                        <a href="../desa"><i class="fa fa-home"></i> <span class="nav-label">Data Desa</span></a>
                    </li>
                    <li>
                        <a href="../penduduk"><i class="fa fa-book"></i> <span class="nav-label">Data Penduduk</span></a>
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Surat</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" style="height: 0px;">
                            <li><a href="../surat/surat_keterangan_belum_menikah_form.php">Surat Keterangan Belum Menikah</a></li>
                            <li><a href="../surat/keterangan_penghasilan_form.php">Surat Keterangan Penghasilan</a></li>
                        </ul>
                    </li>
                    
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            
        </div>

        </nav>
        </div>