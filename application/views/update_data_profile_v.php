<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>FORM UPDATE DATA </H1>
    <form action="<?= base_url('favorit/action_update_data') ?>" method="post">
    <table>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td>
                <input type="hidden" name="id" value="<?= $favorit ['id'] ?>">
                <input type="text" name="nama_depan" class="from-control" value="<?= $favorit['nama_depan'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang" class="from-control" value="<?= $favorit['nama_belakang'] ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir" class="from-control" value="<?= $favorit['tempat_lahir'] ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tanggal_lahir" class="from-control" value="<?= $favorit['tanggal_lahir'] ?>">  </td>
        
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" class="from-control" value="<?= $favorit['alamat'] ?>"></td>
        </tr>
        <tr>
            <td>Jenjang Pendidikan</td>
            <td>:</td>
            <td>
                <select name="jenjang_pendidikan" id=""class="from-control">
                    <option value="SMK">SMK sederajat</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">simpan</button>
                <a href="" class="btn-warning">kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>