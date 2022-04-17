<?php
include 'koneksi.php';
if (isset($_POST['submit']))
{
    if($_GET['hal']=='edit')
    {
        $edit = mysqli_query($koneksi , "UPDATE alumni SET 
                                         no_ijasah= '$_POST[NO]',
                                         nama_alumni= '$_POST[NAMA]',
                                         alamat= '$_POST[ALAMAT]',
                                         tahunlulus= '$_POST[LULUS]'
                                         WHERE no_ijasah = '$_GET[id]'
                                                ");
    if($edit)//jika sukses
    {
        echo "<script>
            alert('edit data sukses');
            document.location='edit alumni.php';
            </script>";
    }
    //jika gagal
    else{
        echo "<script>
            alert('edit data gagal');
            document.location='edit alumni.php';
            </script>";
    }   
    }
}
if (isset($_GET['hal']))
{
    if($_GET['hal']=='edit')
    {
    //pengujian data yang akan diedit
    $tampil=mysqli_query($koneksi," SELECT *FROM alumni WHERE no_ijasah = '$_GET[id]'");
    $data=mysqli_fetch_array($tampil);
    if($data){
        $vNO = $data['no_ijasah'];
        $vNAMA = $data['nama_alumni'];
        $vALAMAT = $data['alamat'];
        $vLULUS = $data['tahunlulus'];
    }
    }
}
?>
<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>TK Mentari</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-light  bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="admin.php"><strong>Data Siswa</strong></a>
            <a class="navbar-brand text-white" href="admin nilai.php"><strong>Nilai Siswa</strong></a>
            <a class="navbar-brand text-white" href="admin alumni.php"><strong>Data Alumni</strong></a>
            <a class="navbar-brand text-white" href="login.php"><strong>Log Out</strong></a>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <h1 align="center">FORM ALUMNI</h1>
    <div class="container">
		<div class="card-body">
			<form method="post" action="">
            <div class="form-group mb-3">
				<label>NO IJASAH</label>
				<input type="text" name="NO" value="<?=@$vNO?>" class="form-control" placeholder="NO IJASAH" required>
			</div>
			<div class="form-group mb-3">
				<label>NAMA ALUMNI</label>
				<input type="text" name="NAMA" value="<?=@$vNAMA?>" class="form-control" placeholder="NAMA ALUMNI" required>
			</div>
			<div class="form-group mb-3">
				<label>ALAMAT</label>
				<input type="text" name="ALAMAT" value="<?=@$vALAMAT?>" class="form-control" placeholder="ALAMAT" required>
			</div>
			<div class="form-group mb-3" ></div>
                <label>TAHUN LULUS</label>
                <input type="text" name="LULUS" value="<?=@$vLULUS?>" class="form-control" placeholder="TAHUN LULUS" required>
            </div>
            <br>
			<button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>  
	</div>
        <!-- Akhir Menu -->

        <!-- Awal Footer -->
        <hr class="footer">
        <div class="container" style="background-color: gray">
            <div class="row footer-body">
                <div class="col-md-6">
                    <div class="copyright">
                        <strong>TK Mentari</strong> <i class="far fa-copyright"></i> Since 2018</p>
                    </div>
                </div>

                <div class="col-md-6 d-flex justify-content-end">
                    <div class="icon-contact">
                        <label class="font-weight-bold">Follow Us </label>
                        <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
                        <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
                        <a href="#"><img src="images/icon/twitter.png" class="" data-toggle="tooltip" title="Twitter"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Footer -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>