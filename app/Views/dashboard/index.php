<?= $this->extend('/temp/index'); ?>

<?= $this->section('content'); ?>


<div class="row mb-3 border rounded p-3 shadow">
    <div class="col-lg-2 mr-4">
        <div>
            <img class="img img-fluid" src="/assets/img/logo.png" alt="">
        </div>
    </div>

    <div class="col">
        <div class="display-6">Hallo <?= user()->nama_user; ?></div>
        <div class="display-4 text-bold">Selamat Datang. </div>
        <div class="display-6"><?= WEBNAME; ?></div>
    </div>

</div>

<div class="row">
    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Data User</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Penduduk</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>Penduduk</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Data Peserta</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>Penduduk</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Data Kriteria</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Sub Kriteria</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h3>Laporan</h3>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-4 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>