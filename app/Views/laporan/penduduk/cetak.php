<?= $this->extend("/temp/cetak/index"); ?>

<?= $this->section('table'); ?>
<table width="100%" colspacing="0">
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
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        // dd($dataPeserta);
        foreach ($dataPenduduk as $dt) : ?>
            <tr>
                <td style="text-align: center;"><?= $no++; ?></td>
                <td><?= $dt['nik']; ?></td>
                <td><?= $dt['nama_lengkap']; ?></td>
                <td style="text-align: center;"><?= $dt['jenis_kelamin'] == 'Perempuan' ? 'P' : 'L'; ?></td>
                <td><?= $dt['tanggal_lahir']; ?></td>
                <td><?= $dt['tempat_lahir']; ?></td>
                <td><?= $dt['alamat']; ?></td>
                <td><?= $dt['rt']; ?></td>
                <td><?= $dt['rw']; ?></td>
                <td><?= $dt['desa']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection(); ?>