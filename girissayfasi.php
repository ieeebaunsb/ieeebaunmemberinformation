<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Giriş Sayfası</title>
  </head>
  <body>
    
		<form action="" method="POST" >
		  <div class="form-group">
			<label >Kullanıcı Adı</label>
			<input type="text" class="form-control"placeholder="Kullanıcı Adı" name="kullaniciadi">			
		  </div>
		  <div class="form-group">
			<label >Parola</label>
			<input type="password" class="form-control"  placeholder="Parola" name ="parola">
		  </div>		 
		  <button name="gonder"type="submit" class="btn btn-primary">Giriş Yap</button>
		</form>
<?php
	if (isset($_POST["gonder"]))
		{
			if($_POST["kullaniciadi"]=="ieeebaun" && $_POST["parola"]=="123")
			{					
				header("Location: üyeekle.php");
			}		
			else
			{
				$message = "Kullanıcı Adı yada Parola YANLIŞ. Lütfen Tekrar Deneyiniz...";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</html>
