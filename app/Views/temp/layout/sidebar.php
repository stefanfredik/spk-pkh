<aside class="main-sidebar bg-primary  sidebar-light-primary elevation-4">
    <div class="text-center">
        <a href="/dashboard" class="brand-link ">
            <div class="brand-image  img-circle elevation-3">
                <img width="45px" class="img img-fluid" src="/assets/img/logo.png" alt="" srcset="">
            </div>

            <!-- <img src="/assets/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" /> -->
            <span class="brand-text font-weight-light  text-chite display-6"><?= WEBTITLE; ?></span>
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
                <a href="#" class="d-block"><?= user()->nama_user ?></a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link <?= url_is('/home') ? 'active' : '' ?>">
                        <i class="bi bi-house-door"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <hr>

                <li class="nav-item">
                    <a href="/user  " class="nav-link  <?= @($url == 'user') ? 'active' : '' ?>">
                        <i class="bi bi-people-fill nav-icon"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/penduduk" class="nav-link <?= @($url == 'penduduk') ? 'active' : '' ?>">
                        <i class="bi bi-people nav-icon"></i>
                        <p>
                            Data Penduduk
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-card-checklist nav-icon  <?= @($url == 'kriteria') ? 'active' : '' ?>"></i>
                        <p>
                            Data Kriteria
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/kriteria" class="nav-link  <?= @($url == 'kriteria') ? 'active' : '' ?>">
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
                    <a href="/peserta" class="nav-link <?= @($url == 'peserta') ? 'active' : '' ?>">
                        <i class="bi bi-people nav-icon"></i>
                        <p>
                            Data Peserta
                        </p>
                    </a>
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
                        <i class="bi bi-check-all nav-icon"></i>
                        <p>
                            Keputusan PKH
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="bi bi-card-list nav-icon  <?= @($url == 'kriteria') ? 'active' : '' ?>"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/laporan/penduduk" class="nav-link  <?= url_is('laporan/penduduk') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penduduk</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/laporan/peserta" class="nav-link  <?= url_is('laporan/peserta') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peserta</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr>
                <li class="nav-item">
                    <a href="/logout" class="nav-link">
                        <i class="bi bi-box-arrow-left nav-icon"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>