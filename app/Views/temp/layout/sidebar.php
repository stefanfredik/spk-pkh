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
            <?php
            if (in_groups("Admin")) {
                echo $this->include("/temp/layout/sidebar/admin");
            }

            if (in_groups("pendamping-pkh")) {
                echo $this->include("/temp/layout/sidebar/pendamping");
            }

            if (in_groups("kepala-desa")) {
                echo $this->include("/temp/layout/sidebar/kepaladesa");
            }
            ?>
        </nav>
    </div>
</aside>