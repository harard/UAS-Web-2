
<html>
<head>
<title>PHP PDO CRUD - Edit Data Karyawan</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="indexkaryawan.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Edit Data Golongan</h1>
<form name="frmAdd" action="indexkaryawan.php?update=true" method="POST">
	 <?php foreach ($data as $row) {?>

  <div class="demo-form-row">
	  <label>NIK: </label><br>
	  <input type="text" name="nik" class="demo-form-field" value="<?php echo $row['nik']; ?>" readonly="readonly" />
  </div>
  <div class="demo-form-row">
	  <label>Nama Karyawan: </label><br>
	  <input type="text" name="nama_karyawan" class="demo-form-field" value="<?php echo $row['nama_karyawan']; ?>" required  />
  </div>
  <div class="demo-form-row">
    <label>Kode Jabatan: </label><br>
    <input type="text" name="kode_jabatan" class="demo-form-field" value="<?php echo $row['kode_jabatan']; ?>" required  />
  </div>
  <div class="demo-form-row">
    <label>Kode Bagian: </label><br>
    <input type="text" name="kode_bagian" class="demo-form-field" value="<?php echo $row['kode_bagian']; ?>" required  />
  </div>
  <div class="demo-form-row">
    <label>Kode Golongan: </label><br>
    <input type="text" name="kode_golongan" class="demo-form-field" value="<?php echo $row['kode_golongan']; ?>" required  />
  </div>
  <div class="demo-form-row">
    <label>Alamat Karyawan: </label><br>
    <input type="text" name="alamat_karyawan" class="demo-form-field" value="<?php echo $row['alamat_karyawan']; ?>" required  />
  </div>
  <div class="demo-form-row">
    <label>No Hp: </label><br>
    <input type="text" name="no_hp" class="demo-form-field" value="<?php echo $row['no_hp']; ?>" required  />
  </div>
    <?php } ?>
  <div class="demo-form-row">
	  <input name="submit" type="submit" value="UPDATE" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>