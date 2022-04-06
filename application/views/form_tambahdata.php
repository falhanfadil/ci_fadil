<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM TAMBAH DATA</h1>
        <form action="<?= base_url('favorit/save')?>" method="POST">
            <label>Nama lengkap</label>
            <input type="text" name="namaa">
            <br></br>
   
    
            <label>Alamat</label>
            <input type="text" name="alamatt">
            <br></br>
    
    
            <label>No_hp</label>
            <input type="text" name="no_hp">
            <br></br>
   
   
            <label>Email</label>
            <input type="email" name="emaill">
            <br></br>
    
    
            <label>Sekolah</label>
            <input type="text" name="sekolahh">
            <br></br>
            <button name="simpan">simpan</button>

    </form>
</body>
</html>