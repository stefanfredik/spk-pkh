<?= $this->extend('/temp/index'); ?>

<?= $this->section("content"); ?>
<div class="row">
    <div class="col">
        <a href="/laporan/peserta/cetak" class="btn btn-primary my-2"><i class="bi bi-printer-fill mx-2"></i> Cetak laporan</a>
        <div class="card border border-secondary">
            <div class="card-header">
                <h3><?= $title; ?></h3>
            </div>
            <div id="data" class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableBlt" width="100%" colspacing="0">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">Tanggal Lahir</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">RW</th>
                                <th class="text-center">Desa</th>
                                <th class="text-center">Periode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            // dd($dataPeserta);
                            foreach ($dataPeserta as $dt) : ?>
                                <tr>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td><?= $dt['nik']; ?></td>
                                    <td><?= $dt['nama_lengkap']; ?></td>
                                    <td><?= $dt['jenis_kelamin'] ?></td>
                                    <td><?= $dt['tanggal_lahir']; ?></td>
                                    <td><?= $dt['tempat_lahir']; ?></td>
                                    <td><?= $dt['alamat']; ?></td>
                                    <td><?= $dt['rt']; ?></td>
                                    <td><?= $dt['rw']; ?></td>
                                    <td><?= $dt['desa']; ?></td>
                                    <td>1</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="modalArea">
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    const config = {
        columnDefs: [{
            width: 20,
            targets: 0
        }],
        language: {
            paginate: {
                first: "Awal",
                last: "Akhir",
                next: ' <i class="bi bi-arrow-right-circle"></i>',
                previous: '<i class="bi bi-arrow-left-circle"></i>'
            },
            zeroRecords: "Belum ada data.",
            search: "Cari:",
            lengthMenu: "Tampil _MENU_ kolom",
            info: "Kolom _START_ sampai _END_ dari _TOTAL_ kolom"
        }
    };

    $('#tablePenduduk').DataTable(config)
    $('#tableBlt').DataTable(config)


    function cetakLaporanBlt() {
        alert("blt");
    }
</script>
<?= $this->endSection(); ?>