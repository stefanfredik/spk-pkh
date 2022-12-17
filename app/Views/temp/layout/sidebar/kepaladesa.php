<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="/dashboard" class="nav-link <?= url_is('/dashboard') ? 'active' : '' ?>">
            <i class="bi bi-house-door"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/laporan/peserta" class="nav-link <?= url_is('/laporan/peserta') ? 'active' : '' ?>">
            <i class="bi bi-people-fill nav-icon"></i>
            <p>
                Data Laporan Peserta
            </p>
        </a>
    </li>


    <li class="nav-item">
        <a href="/laporan/penduduk" class="nav-link  <?= url_is('/laporan/penduduk') ? 'active' : '' ?>">
            <i class="bi bi-people-fill nav-icon"></i>
            <p>
                Data Laporan Penduduk
            </p>
        </a>
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