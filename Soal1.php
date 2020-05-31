 <!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>        
<div class="container">

        <h1 class="text-center">Soal No.1</h1>
        <hr>
<div class="row">
    <div class="col-md-6">
        <h2>Input</h2>
        <hr>
            <form method="POST" action=""> 
                <div class="form-group">
                    <label for="exampleInputPassword1">Input Nilai</label>
                    <input class="form-control form-control" type="text" name="nilai" id="nilai" placeholder="Masukan Nilai">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
            <h3>Keterangan</h3>
            <hr>
            <p>
                <ul>
                    <li>Jika angka lebih besar atau sama dengan 90, maka output adalah huruf A</li>
                    <li>Jika angka di antara 80 dan 89, maka output adalah huruf B</li>
                    <li>Jika angka di antara 70 dan 79, maka output adalah huruf C</li>
                    <li>Jika angka di antara 60 dan 69, maka output adalah huruf D</li>
                    <li>Jika angka lebih kecil dari pada 59, maka output adalah huruf E</li>
                </ul>
            </p>
    </div>
    <div class="col-md-6">
    <h2>Output</h2>
        <hr>
            <?php
                $tampil = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['submit'])) {
                        $nilai = $_POST['nilai'];

                        if ($nilai > 89) {
                            $grade = "A";
                        } elseif ($nilai > 79) {
                            $grade = "B";
                        } elseif ($nilai > 69) {
                            $grade = "C";
                        } elseif ($nilai > 59) {
                            $grade = "D";
                        } else {
                            $grade = "E";
                        }
                    }
                    echo "<p>Nilai = <b>$nilai</b> </p>";                     
                    echo "<p>Grade = <b>$grade</b> </p>";
                    }
            ?>
    </div>
</div>
        
</div>
    

</body> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>

