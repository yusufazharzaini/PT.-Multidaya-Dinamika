 <!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>        
<div class="container">
<h1 class="text-center"> Soal No.2</h1>
<hr>
	<div class="row">
		<div class="col-md-6">
		<h2>Input</h2>
		<hr>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
				<div class="form-group">
					<label for="exampleInputPassword1" >Input Bilangan</label>
					<input class="form-control form-control" type="text" name="bil" placeholder="Masukan Angka">
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
				$tampil = "";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$bil = $_POST["bil"];
						
						if ($bil % 2 == 0){ //Kondisi
							echo "<b>$bil</b> Merupakan Bilangan Genap"; //Kondisi true
					}else {
							echo "<b>$bil</b> Merupakan Bilangan Ganjil"; //Kondisi false
					}
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
