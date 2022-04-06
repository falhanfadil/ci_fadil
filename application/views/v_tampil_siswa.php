<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align='center'>Data Siswa</h2>
    <h3 align='center'><a href="<?= base_url('siswa/tambah_siswa')?>">input data</a></h3>
    <table align='center' border='1'>
        <thead>
        <tr>
            <th>Siswa id</th>
            <th>Siswa nisn</th>
            <th>Siswa nis</th>
            <th>Siswa nama lengkap</th>
            <th>Siswa tempat lahir</th>
            <th>Siswa tanggal lahir</th>
            <th>Siswa nohp</th>
            <th>Program id</th>
            <th colspan='2'>Aksi</th>
            
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($siswa as $s) { ?>
            <tr>
                <td><?= $no?></td>
                <td><?= $s->siswa_nisn?></td>
                <td><?= $s->siswa_nis?></td>
                <td><?= $s->siswa_nama_lengkap?></td>
                <td><?= $s->siswa_tempat_lahir?></td>
                <td><?= $s->siswa_tanggal_lahir?></td>
                <td><?= $s->siswa_nohp?></td>
                <td><?= $s->program_id?></td>
                <td><a href="<?= base_url('siswa/edit_siswa')?>">Edit</a></td>
                <td><a href="<?= base_url('siswa/delete_siswa')?>">Delete</a></td>
            </tr>
            <?php $no++; }?>
        </tbody>
    </table>
</body>
</html>











