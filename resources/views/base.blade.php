<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- For Google -->
    <link rel="author" href="https://plus.google.com/+Scoopthemes">
    <link rel="publisher" href="https://plus.google.com/+Scoopthemes">

    <!-- Canonical -->
    <link rel="canonical" href="">
    <title>Data KTP Laravel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Main Styles CSS -->
    <link href="/assets/css/main.css" rel="stylesheet"> {{-- ini cara memanggil css dari folder assets -> css --}}

</head>

<body>

<div id="wrapper">
    <aside id="sideBar">
        <ul class="main-nav">
            <!-- Your Logo Or Site Name -->
            
            <li class="nav-brand">
                <a href="/">Halaman Awal</a>
            </li>
            <li>
                <a href="/home_user"><i class="fa fa-home" style="font-size:24px"></i> Status Login</a>
            </li>
            <li>
                <a href="/kontak_create"><i class="fa fa-edit" style="font-size:24px"></i> Tambah Kontak</a>
            </li>
            <li>
                <a href="/kontak"><i class="fa fa-database" style="font-size:24px"></i>  Daftar Kontak</a>
            </li>
            <li>
                <a href="/file_create"><i class="fa fa-file-photo-o" style="font-size:24px"></i> Input Foto KTP</a>
            </li>
            <li>
                <a href="/file"><i class="fa fa-cubes" style="
                font-size:24px"></i> File Input KTP</a>
            </li>
        </ul>
    </aside>

    @yield('content') {{-- Semua file konten kita akan ada di bagian ini --}}


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!-- Custom JavaScript -->
<script src="/assets/js/custom.js"></script> {{-- ini cara memanggil js dari folder assets -> js --}}
</body>

</html>