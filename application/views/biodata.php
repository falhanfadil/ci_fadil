<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>SELAMAT DATANG</h1></center>
    <a href="<?= base_url('favorit/tambahan_data')?>">input data</a>

    <table border="1" width="50%" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nm ?></td>
       </tr>
       <tr>
           <td>Alamat</td>
           <td>:</td>
           <td><?= $alt ?></td>
       </tr>
       <tr>
           <td>No_hp</td>
           <td>:</td>
           <td><?= $nh ?></td>
       </tr>
       <tr>
           <td>Email</td>
           <td>:</td>
           <td><?= $em ?></td>
       </tr>
       <tr>
           <td>Sekolah</td>
           <td>:</td>
           <td><?= $skl ?></td>
       </tr>
       <button name="input"></button>
</table>
</body>
</html>