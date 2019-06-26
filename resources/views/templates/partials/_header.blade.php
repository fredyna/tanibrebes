<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tani Brebes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tani, Brebes, Kawan Tani, Produk, Produk Unggulan, Produk Tani, Pertanian" name="keywords" />
    <meta content="Website Tani Brebes" name="description" />
    <meta name="author" content="Fredy Nur Apriyanto">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{ asset('img/logo/logo.png')}}" rel="icon" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/our-style.css') }}">
    @yield('css')
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
