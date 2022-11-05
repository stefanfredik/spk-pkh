<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="text-center">
        <a href="/" class="brand-link">
            <!-- <div class="brand-image  img-circle elevation-3">
                <i class="bi bi-person-circle"></i>
            </div> -->

            <!-- <img
            src="dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          /> -->
            <span class="brand-text font-weight-light display-6">SPKH PKH</span>
        </a>
    </div>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <!-- <i class="bi bi-person-circle"></i> -->
                <!-- <img
                src="dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              /> -->
            </div>

            <div class="info">
                <a href="#" class="d-block"><?= session()->get("namaUser") ?? "User"; ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/penduduk" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Data Penduduk
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Data Kriteria
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/kriteria" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kriteria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/subkriteria" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Kriteria</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="/tablemoora" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Table MOORA
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/keputusan" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Keputusan PKH
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/laporan" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>