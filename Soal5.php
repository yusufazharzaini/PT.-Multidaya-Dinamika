<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>        
<div class="container">
    <h1 class="text-center">Soal No.5</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h2>Input</h2>
            <hr>
                <form method="POST" action=""> 
                    <div class="form-group">
                        <label for="exampleInputPassword1">Input Tahun</label>
                        <input class="form-control form-control" type="text" name="tahun1" placeholder="Masukan Tahun">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Input Tahun</label>
                        <input class="form-control form-control" type="text" name="tahun2" placeholder="Masukan Tahun">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
        </div>
        <div class="col-md-6">
        <h2>Output</h2>
        <hr>
            <?php
            if (isset($_POST['submit'])) {
                $TAHUN = $_POST['tahun1'];
                if ($TAHUN%4==0) {
                    echo "<b>$TAHUN</b> TAHUN KABISAT <br>";
                } elseif ($TAHUN%4!=0) {
                    echo "<b>$TAHUN</br> BUKAN TAHUN KABISAT <br>";
                }
            }
            ?>
            <?php
            if (isset($_POST['submit'])) {
                $TAHUN = $_POST['tahun2'];
                if ($TAHUN%4==0) {
                    echo "<b>$TAHUN</b> TAHUN KABISAT <br>";
                } elseif ($TAHUN%4!=0) {
                    echo "<b>$TAHUN</b> BUKAN TAHUN KABISAT <br>";
                }
            }
            ?>
        </div>
    </div>
</div>
</body> 
</html> 