<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?= $title ?>Admin</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?= site_url('assets/') ?>/admin/dist/css/app.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<style>
    .table thead th {
        text-align: left;
        vertical-align: top;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FT UDINUS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item <?= $this->uri->segment(1) == 'cpmk' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('cpmk') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>CPMK</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                CPL
            </div>

            <!-- Nav Item - Program Studi -->
            <li class="nav-item <?= $this->uri->segment(1) == 'program_studi' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('program_studi') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Program Studi</span></a>
            </li>

            <!-- Nav Item - CPL -->
            <li class="nav-item <?= $this->uri->segment(1) == 'cpl' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('cpl') ?>">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>CPL</span></a>
            </li>

            <!-- Nav Item - Performa Index -->
            <li class="nav-item <?= $this->uri->segment(1) == 'pi' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('pi') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Performa Index</span></a>
            </li>

            <!-- Nav Item - RPS -->
            <li class="nav-item <?= $this->uri->segment(1) == 'rps' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('rps') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>RPS</span></a>
            </li>

            <!-- Nav Item - MPB -->
            <li class="nav-item <?= $this->uri->segment(1) == 'mpb' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('mpb') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>MPB</span></a>
            </li>

            <!-- Nav Item - CPM -->
            <li class="nav-item <?= $this->uri->segment(1) == 'cpm' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('cpm') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>CPM</span></a>
            </li>

            <!-- Nav Item - MTK -->
            <li class="nav-item <?= $this->uri->segment(1) == 'mtk' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('mtk') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Mata Kuliah</span></a>
            </li>

            <!-- Nav Item - ST1 -->
            <li class="nav-item <?= $this->uri->segment(1) == 'st1' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('st1') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>S1 (ST1)</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Kelola Jadwal dan Mading
            </div>

            <!-- Nav Item - jadwal_rg -->
            <li class="nav-item <?= $this->uri->segment(1) == 'jadwal' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('jadwal') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Input Jadwal Ruang</span></a>
            </li>

            <!-- Nav Item - ruang -->
            <li class="nav-item <?= $this->uri->segment(1) == 'ruang' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('ruang') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Input Ruang</span></a>
            </li>

            <!-- Nav Item - mading -->
            <li class="nav-item <?= $this->uri->segment(1) == 'admin_mading' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin_mading') ?>">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Input Mading</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">