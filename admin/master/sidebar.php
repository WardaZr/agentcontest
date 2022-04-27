<body>
    <header class="fixed-top d-block p-2 pt-3 bg-light shadow-sm">
        <h4>
        <button  class="btn btn-light" onclick="myFunction()" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
            <i class="fas fa-bars"></i>
        </button >
        Halaman Admin Agent Contest
        </h4>
    </header>
    <div class="wrapper">
        <nav class="min-vh-100 bg-secondary shadow collapse show" id="collapseExample" style="margin-top: 3.2rem">
            <ul class="nav nav-pills d-flex flex-column mb-auto">
                </br>
                <li class="px-4 mt-3" style="font-size: 14px; color: #C4C6FD">Menu</li>
                <li class="btn bg-secondary nav-item p-1 text-start">
                    <a class="nav-link text-light" href="/admin/index" style="border-bottom: 1px #1E2F97 dotted">
                        <i class="fas fa-home"></i>&nbsp;&nbsp;Beranda
                    </a>
                </li>
                <li class="btn bg-secondary nav-item p-1 text-start">
                    <a class="nav-link text-light" href="/admin/dashboard" style="border-bottom: 1px #1E2F97 dotted">
                        <i class="fas fa-chart-pie"></i>&nbsp;&nbsp;Dashboard
                    </a>
                </li>
                <li class="btn bg-secondary nav-item p-1 text-start">
                    <a class="nav-link text-light" href="sadmin-peserta.php" style="border-bottom: 1px #1E2F97 dotted">
                        <i class="fas fa-users"></i>&nbsp;&nbsp;Data Peserta
                    </a>
                </li>
                <li class="btn bg-secondary nav-item p-1 text-start">
                    <a class="nav-link text-light" href="sadmin-penyelenggara.php" style="border-bottom: 1px #1E2F97 dotted">
                        <i class="fas fa-user-tie"></i>&nbsp;&nbsp;Data Penyelenggara
                    </a>
                </li>
                <li class="btn bg-secondary nav-item p-1 text-start">
                    <a class="nav-link text-light" href="/login/logout" style="border-bottom: 1px #1E2F97 dotted"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Log Out</a> 
                </li>
            </ul>
        </nav>
        <section class="overflow-auto container p-4 main-content mb-4" style="margin-top: 4rem;width:100%">
