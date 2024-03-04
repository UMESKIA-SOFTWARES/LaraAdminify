<!DOCTYPE html>
<html lang="en">

<head>
    <title>LARAADMINFY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="LaraAdminfy is a powerful and easy to use admin panel for Laravel. It's designed to be user-friendly and intuitive. You don't need to be a tech expert to use it." />
    <meta name="keywords"
        content="LaraAdminfy, admin panel, admin dashboard, admin template, laravel admin, laravel admin panel, laravel admin dashboard, laravel admin template, laravel admin theme, laravel admin panel template, laravel admin dashboard template, laravel admin theme, laravel admin panel theme, laravel admin dashboard theme, laravel admin panel template, laravel admin dashboard template, laravel admin theme, laravel admin panel theme, laravel admin dashboard theme, laravel admin panel template, laravel admin dashboard template, laravel admin theme, laravel admin panel theme, laravel admin dashboard theme" />
    <meta name="author" content="colorlib" />
    <link rel="icon" href="/images/laraAdminfy_logo.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/dist/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/images/laraAdminfy_logo.png" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/dist/assets/icon/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/pages/prism/prism.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/dist/assets/css/pages.css">
    <link rel="stylesheet" href="/dist/custom/main.css">
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-container navbar-wrapper">
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="col-sm-12">
                                                @if (session('error'))
                                                    <div class="alert alert-danger">
                                                        {{ session('error') }}
                                                    </div>
                                                @endif
                                                @if (session('success'))
                                                    <div class="alert alert-success">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
