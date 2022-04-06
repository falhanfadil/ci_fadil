<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <h2 align='center'>From Tambah Data</h2>
    <h3 align='center'><a href="<?= base_url('favorit/tambah_data')?>">input data</a></h3>

        <div class="container">
        <div class="row">
        <div class="col">
    <table class="table table-success table-hover">
        <thead>
            
        <tr>
            <th>No</th>
            <th>Nama depan</th>
            <th>Nama belakang</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Jenjang pendidikan</th>
            <th colspan='2'>Aksi</th>
            
        </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($favorit as $f) { ?>
            <tr>
                <td><?= $no?></td>
                <td><?= $f->nama_depan?></td>
                <td><?= $f->nama_belakang?></td>
                <td><?= $f->tempat_lahir?></td>
                <td><?= $f->tanggal_lahir?></td>
                <td><?= $f->jenis_kelamin?></td>
                <td><?= $f->alamat?></td>
                <td><?= $f->jenjang_pendidikan?></td>
                <td><a href="<?= base_url('Favorit/update_data/'.$f->id)?>">Edit</a></td>
                <td><a href="<?= base_url('Favorit/hapus_data/'.$f->id)?>">Delete</a></td>
            </tr>
            <?php $no++; 
        }?>
        </tbody>
    </table>
    </div>
  </div>
</div>
</body>
</html>











