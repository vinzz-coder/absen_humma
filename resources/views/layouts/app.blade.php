<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Absen App</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark"
         style="width: 250px; height:100vh; position:fixed;">

        <a href="/dashboard" class="text-white text-decoration-none mb-3">
            <span class="fs-4 fw-bold">ABSEN KELAS</span>
        </a>

        <hr>

        <ul class="nav nav-pills flex-column mb-auto">

            <li class="nav-item">
                <a href="/dashboard"
                   class="nav-link text-white {{ request()->is('dashboard') ? 'active bg-primary' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <li>
                <a href="/absensi"
                   class="nav-link text-white {{ request()->is('absensi') ? 'active bg-primary' : '' }}">
                    <i class="bi bi-clipboard-check me-2"></i> Data Absen
                </a>
            </li>

            <li>
                <a href="/siswa"
                   class="nav-link text-white {{ request()->is('siswa') ? 'active bg-primary' : '' }}">
                    <i class="bi bi-people me-2"></i> Data Siswa
                </a>
            </li>

            <li>
                <a href="/kelas"
                   class="nav-link text-white {{ request()->is('kelas') ? 'active bg-primary' : '' }}">
                    <i class="bi bi-building me-2"></i> Data Kelas
                </a>
            </li>

        </ul>

        <hr>


    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1" style="margin-left:250px; padding:20px;">
        @yield('content')
    </div>

</div>

</body>
</html>
