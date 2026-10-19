<?php
// File wajib: jika tidak ditemukan, program berhenti dengan error
include 'data.php';
include 'function.php';

$jumlahSiswa = count($dataSiswa);
?>

<h1 id="data-nilai">Data Nilai Siswa</h1>
<p>Jumlah siswa: <?= $jumlahSiswa; ?></p>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Daftar Nilai</th>
        <th>Jumlah Nilai</th>
        <th>Rata-rata</th>
        <th>Status</th>
    </tr>
    <?php
    $no = 1;
    $jumlahLulus = 0;
    foreach ($dataSiswa as $siswa):
        $rata   = hitungRataRata($siswa['nilai']);
        $status = cekKelulusan($rata);

        if ($rata >= 75) {
            $jumlahLulus++;
        }
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($siswa['nama']); ?></td>
        <td><?= implode(', ', $siswa['nilai']); ?></td>
        <td><?= count($siswa['nilai']); ?></td>
        <td><?= number_format($rata, 2); ?></td>
        <td><?= $status; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<p>
    Siswa lulus: <?= $jumlahLulus; ?><br>
    Siswa tidak lulus: <?= $jumlahSiswa - $jumlahLulus; ?>
</p>