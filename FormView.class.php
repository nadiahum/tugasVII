<?php 

class FormView{

	public function isiForm($tema){
		?>

<!DOCTYPE html>
<html>
<head>
<center>
<link rel="stylesheet" type="text/css" href="http://localhost/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" src="http://localhost/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="http://localhost/css/tem1.css">
	<title> </title>

<body>
	<h2>Form Peminjaman Buku di Perpustakaan Brawijaya Malang</h2>

<form action="getHasilForm" method="post" enctype="multipart/form-data">

<div class="form-group-nama" >

    <label for="exampleName" >Nama : </label>
    <input type="text" class="form-control" id="exampleName" name="namalengkap" placeholder="Nama lengkap">
  </div>


  <div class="form-group-data">
 
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukan Email">
<br>
    <label for="examplehp" >No HP : </label>
    <input type="text" class="form-control" id="exampleName" name="nohp" placeholder="+62...">
  </div>


  <div class="form-group-bio">
  <label for="examplehp" >Jenis Buku : </label>
    <input type="text" class="form-control" id="exampleName" name="jenisbuku" placeholder=" ex: politik">

  <div class="form-group-gen">
  <label for="exampleGender">Jenis Kelamin : </label><br>
  <input type="radio" name="gender" value="lakilaki"> Laki-Laki<br>
  <input type="radio" name="gender" value="perempuan"> Perempuan<br>
  </div>
  

  <div class="form-group-input">
    <label for="exampleFormControlFile1">Input : </label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filein">
  </div>

   <div class="form-check">
   <div style="padding: 15px">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree with terms and service</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  
</form>

</body>
</center>
</head>
</html>
 
<?php 
	}

	public function hasilForm($tema){
		 $pdf = $_FILES['filein']['name'];
   $tmp = $_FILES['filein']['tmp_name'];
 #  move_uploaded_file($tmp, "C:/xampp/htdocs/upload/");
   
   move_uploaded_file($tmp, $_SERVER['DOCUMENT_ROOT']."/upload/".$pdf);
  

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://localhost/css/bootstrap.min.css">
<link rel="stylesheet" type="text/javascript" src="http://localhost/js/bootstrap.min.js">
<link rel="stylesheet" type="text/css" href="http://localhost/css/tem1.css">
	<title> </title>
</head><body>
<h1>Data Peminjam Buku</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"> | No | </th>
      <th scope="col">Nama </th>
      <th scope="col">Email </th>
      <th scope="col">No HP </th>
      <th scope="col">Jenis Buku </th>
      <th scope="col">Letak </th>
      <th scope="col">Buku </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $_POST["namalengkap"]; ?></td>
      <td><?php echo $_POST["email"]; ?></td>
      <td><?php echo $_POST["nohp"]; ?></td>
      <td><?php echo $_POST["jenisbuku"]; ?></td>
      <td><?php echo $tema ?></td>
      <td><?php echo $pdf; ?></td>
      
    </tr>
    
  </tbody>
</table>

</body>
</html>

<?php
}
}