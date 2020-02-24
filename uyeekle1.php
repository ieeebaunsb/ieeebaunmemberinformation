<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
 
  <body class="bg-light">
    <div class="container">
	
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>ÜYE EKLEME SAYFASI</h2>
  </div>
  <div class="row">
    
    <div class="col-md-12 order-md-1">
      
      <form class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Ad</label>
            <input type="text" name = "ad" class="form-control"  placeholder="Mehmet İlkay" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Soyad</label>
            <input type="text" name = "soyad" class="form-control" placeholder="Memur" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
		<div class="mb-3">
          <label for="email">TC Kimlik No</label>
          <input type="text" name = "tcno"class="form-control"  placeholder="12345678901">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <div class="mb-3">
          <label for="email">E-Posta</label>
          <input type="email" name = "mail" class="form-control" id="email" placeholder="you@gmail.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
		<div class="mb-3">
          <label >Telefon</label>
          <input type="text"name = "telno" class="form-control"  placeholder="546*****44">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
		<div class="row">
        <div class="col-md-6 mb-3">
          <label for="address">Bölüm</label>
          <input type="text" name = "bolum" class="form-control"  placeholder="Bilgisayar Mühendisliği" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		 <div class="col-md-6 mb-3">
          <label for="address">Sınıf</label>
          <input type="text" name = "sinif" class="form-control"  placeholder="4" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		<div class="col-md-6 mb-3">
          <label for="address">Okul No</label>
          <input type="text" name = "okulno" class="form-control"  placeholder="2016******36" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		<div class="col-md-6 mb-3">
            <label for="country">Cinsiyet</label>
            <select class="custom-select d-block w-100"  required="">
              <option value="">ERKEK</option>
              <option >KADIN</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
		     
        <button class="btn btn-primary btn-lg btn-block" type="submit">Gönder</button>
      </form>
    <?php
        
        if(isset($_POST['gonder'])){
            $adsoyad=$_POST['ad']+$_POST['soyad'];
            $kayitno = $_POST['kayitno'];
			$kimlikno=$_POST['tcno'];
			$mail=$_POST['mail'];
			$telefon=$_POST['telno'];
			$bolum=$_POST['bolum'];
			$sinif=$_POST['sinif'];
			$okulno=$_POST['okulno'];
			$cinsiyet=$_POST['cinsiyet'];
            $sorgu ="INSERT INTO `kisisel_bilgiler` (`tc`, `okulno`, `kayitno`, `fotograf`, `adsoyad`, `bolum`, `sinif`, `telefonno`, `cinsiyet`, `mail`) VALUES ('$kimlikno', '$okulno', NULL, NULL, '$adsoyad', '$bolum', '$sinif', '$telefonno', NULL, '$mail';)";
        }
    ?>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2019 IEEE BAUN COMPUTER SOCIETY YAPIMIDIR.</p>
    
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>