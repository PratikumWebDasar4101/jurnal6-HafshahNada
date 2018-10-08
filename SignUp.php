<?php
session_start();
if(isset($_SESSION['username'])){ 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jurnal</title>
  </head>
  <body>
   <form action="upload.php" method="POST" enctype="multipart/form-data">

    <table>

      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" maxlength="35" name="nama" title="Inputan nama max 35 karakter"><br></td>
      </tr>

      <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="number" maxlength="10" name="nim" title="Inputan nim harus 10 karakter"><br></td>
      </tr>

      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td><input type="radio" name="kl"option value="d3mi4101">D3MI4101</option></td>
        <td><input type="radio" name="kl"option value="d3mi4102">D3MI4102</option></td>
        <td><input type="radio" name="kl"option value="d3mi4103">D3MI4103</option></td>
      </tr>
      
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><input type="radio" name="jk"option value="Laki-Laki">Laki-Laki</option></td>
        <td><input type="radio" name="jk"option value="Perempuan">Perempuan</option></td>
      </tr>

      <tr>

      <td>Hobi<td>
        <td>
          <input type="checkbox" name="Hobi[]" value="Menulis">Menggambar<br>
          <input type="checkbox" name="Hobi[]" value="Membaca">Membaca<br>
          <input type="checkbox" name="Hobi[]" value="Basket">Basket<br>
          <input type="checkbox" name="Hobi[]" value="Badminton">Lari<br>
          <input type="checkbox" name="Hobi[]" value="Berenang">Berenang
        </td>

      <tr>
       <td>Fakultas</td>
       <td>:</td>
       <td> <select class="" name="fk" required>
        <option value="">-- Fakultas --</option>
        <option value="FIF">FIF</option>
        <option value="FIT">FIT</option>
        <option value="FRI">FRI</option>
        <option value="FKB">FKB</option>
        <option value="FIK">FIK</option>
        <option value="FTE">FTE</option>
        <option value="FEB">FEB</option>
      </select>
      </td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td><textarea name="Alamat"></textarea><br></td>
    </tr>

    <tr>
      <td><input type="submit" name="submit" value="Login"></td>
    </tr>
    </form>
  </body>
</html>
