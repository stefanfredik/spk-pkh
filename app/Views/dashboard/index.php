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
                <h5>Data User</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h5>Penduduk</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>Penduduk</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h5>Data Peserta</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>Penduduk</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h5>Data Kriteria</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h5>Sub Kriteria</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-2">
        <div class="card mb-4 shadow">
            <div class="card-header bg-primary">
                <h5>Laporan</h5>
            </div>
            <div class="card-body pb-0 d-flex justify-content-between align-items-start p-3">
                <div>
                    <div class="fs-5 fw-semibold">Jumlah</div>
                    <div>User</div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>