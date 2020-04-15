<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Corona Virus</title>
    <link rel="shortcut icon" href="image/logoc.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <body bgcolor="#f3a683">
</head>
<body>
        <table align="center">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne" align="center">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Data Diri
                        </button>
                    </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body" align="center">
                        
                        Nama : <?php echo $_SESSION['nama'];?>
                        <br>
                        Usia : <?php echo $_SESSION['usia'];?> 
                        <br>
                    </div>
                    </div>
                </div>
                <div class="card" align="center">
                    <div class="card-header" id="headingTwo" align="center">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Hasil Test
                        </button>
                    </h2>
                    </div>
                    <div class="card-body">
                        <?php echo "Resiko anda untuk tertular penyakit COVID 19 adalah ".@$_SESSION['deskripsi']; ?>
                        <br>
                        <?php echo "Jumlah jawaban Ya ".@$_SESSION['hasil']; ?>
                    </div>
                </div>
            </div>
    </table>
    <br>
    <center>
        <a href="pertama.php" class="btn btn-danger">Isi Ulang Test</a>
        </center>
</body>
</html>