<?= $this->extend('/temp/index'); ?>

<?= $this->section('content'); ?>


<div class="row mb-3 border rounded p-5 shadow">
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

<?php

if (in_groups("Admin")) {
    echo $this->include("/dashboard/admin");
}

if (in_groups("Pendamping PKH")) {
    echo $this->include("/dashboard/pendamping");
}

if (in_groups("Kepala Desa")) {
    echo $this->include("/dashboard/kepaladesa");
}


?>

<?= $this->endSection(); ?>


<?= $this->section("style"); ?>
<style>
    .card:hover {
        border: 1px solid gray;
        cursor: pointer;
    }
</style>
<?= $this->endSection(); ?>


<?= $this->section("script"); ?>
<script>
    const peserta = document.getElementById("peserta");
    const penduduk = document.getElementById("penduduk");
    const user = document.getElementById("user");


    peserta.addEventListener("click", () => {
        window.location.href = "/peserta";
    });

    penduduk.addEventListener("click", () => {
        window.location.href = "/penduduk";
    });

    user.addEventListener("click", () => {
        window.location.href = "/user";
    });
</script>
<?= $this->endSection(); ?>