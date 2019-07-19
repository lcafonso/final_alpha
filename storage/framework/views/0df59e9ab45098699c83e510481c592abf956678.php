<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Repositorio de fotografias">
<meta name="author" content="Luis CM Afonso">

<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php echo e(config('app.name', 'DigitalLANDSCAPE')); ?></title>

<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="<?php echo e(asset('vendor/fontawesome-free/css/all.css')); ?>" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo e(asset('css/simple-sidebar.css')); ?>" rel="stylesheet">


<style>
    body {

    }
    .bg-grey {
        background: #292929;
    }
    .logo-footer {
        margin-bottom: 40px;
        width: 210px;
    }
    footer {
        color: grey;
    }
    footer p, a {
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
    }
    footer h6 {
        font-family: 'Playfair Display', serif;
        margin-bottom: 40px;
        position: relative;
    }
    footer h6:after {
        position: absolute;
        content: "";
        background: grey;
        width: 12%;
        height: 1px;
        left: 0;
        bottom: -20px;
    }
    .btn-footer {
        color: grey;

        text-decoration: none;
        border: 1px solid;
        border-radius: 43px;
        font-size: 13px;
        padding: 7px 30px;
        line-height: 47px;
    }
    .btn-footer:hover {

        text-decoration: none;

    }
    .form-footer input[type="text"] {
        border: none;
        border-radius: 16px 0 0 16px;
        outline: none;
        padding-left: 10px;

    }
    ::placeholder {
        font-size: 10px;
        padding-left: 10px;
        font-style: italic;
    }
    .form-footer input[type="button"] {
        border: none;
        background:#232323;
        margin-left: -5px;
        color: #fff;
        outline: none;
        border-radius: 0 16px 16px 0;
        padding: 2px 12px;
    }
    .social .fa {
        color: grey;
        font-size: 22px;
        padding: 10px 15px;
        background: #3c3c3c;
    }
    footer ul li {
        list-style: none;
        display: block;
    }
    footer ul  {
        padding-left: 0;
    }
    footer ul  li a{
        text-decoration: none;
        color: grey;
        text-decoration:none;
    }
    a:hover {
        text-decoration: none;
        color: #f5f5f5 !important;

    }
    .logo-part {
        border-right: 1px solid grey;
        height: 100%;
    }

    .global-page-header {
        position: relative;
        color: #fff;
    }

    .global-page-header h2 {
        font-size: 42px;
        font-weight: bold;
        color: #fff;
        text-transform: uppercase;
    }

    .global-page-header .breadcrumb {
        background: none;
        font-size: 16px;
        padding: 8px  0;
        text-align: center;
    }

    .global-page-header .breadcrumb .active, .global-page-header .breadcrumb li a {
        color: #fff;
    }

    .global-page-header .block {
        position: relative;
        z-index: 99;
        text-align: center;
    }

    /* CSS used here will be applied after bootstrap.css */
    .menu-ico-collapse {
        margin-left: 4px;
    }

    .list-group-submenu .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }

    .list-group-submenu .list-group-item:last-child {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

</style><?php /**PATH D:\laragon\www\final_alpha\resources\views/admin/partials/head.blade.php ENDPATH**/ ?>