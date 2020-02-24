<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>
  <form>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    
    <h2>Kayıt Ekranı</h2>
    <p class="lead"></p>
  </div>
    
  <div class="col-md-12 order-md-1">
  <form action = "" method = "POST" class="needs-validation" novalidate="">  
    
    <div class="col-md-12 order-md-1">
    <div class="mb-3">
          <label for="address2">Okul Numarası</label>
          <input type="text" class="form-control" name="okulno" id="okulno" placeholder="">
        </div>
      <div class="mb-3">
          <label for="address2">TC Kimlik numarası</label>
          <input type="text" class="form-control" name="kimlikno" id="kimlikno" placeholder="">
        </div>
      
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">İsim</label>
            <input type="text" class="form-control" id="isim" name="isim" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Soyisim</label>
            <input type="text" class="form-control" id="soyisim" name = "soyisim" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Kayıt No</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">#</span>
            </div>
            <input type="text" class="form-control" id="kayitno" name = "kayitno" placeholder="" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Mail adresi </label>
          <input type="email" class="form-control" id="email" name = "email" placeholder="">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="bolum">Bölüm</label>
          <input type="text" class="form-control" name="bolum" id="bolum" placeholder="" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Sınıf</label>
            <select class="custom-select d-block w-100" name = "sinif" id="sinif" required="">
              <option value="">Sınıf...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Cinsiyet</label>
            <select class="custom-select d-block w-100" name = "cinsiyet" id="cinsiyet" required="">
              <option value="">Cinsiyet...</option>
              <option>Erkek</option>,
              <option>Kız</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Telefon No</label>
            <input type="text" class="form-control" name ="telefonno" id="telefonno" placeholder="" required="">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
          </div>
        <button class="btn btn-lg btn-primary btn-block"  type="submit" name ="Gonder" >Sign in</button>
      </form>
      </div>
  
    <?php
    
    if(isset($_POST["gonder"]))
       { 
        $sunucu_adi = "localhost";
        $kullanici_adi = "root";
        $sifre = "";
        $veritabani_adi = "ieeebaun";
        $tc = $_POST["tc"];$okulno = $_POST["okulno"]; $kayitno = $_POST["kayitno"]; $adsoyad = $_POST["ad"] + $_POST["soyad"];$bolum = $_POST["bolum"];$sinif=$_POST["sinif"];$telefonno = $_POST["telefonno"]; $cinsiyet = $_POST["cinsiyet"]; $mail = $_POST["email"];
        $baglanti= new mysqli($sunucu_adi,$kullanici_adi,$sifre,$veritabani_adi);
        $sorgu ="INSERT INTO `kisisel_bilgiler` (`tc`, `okulno`, `kayitno`, `fotograf`, `adsoyad`, `bolum`, `sinif`, `telefonno`, `cinsiyet`, `mail`) VALUES ('$kimlikno', '$okulno', '', '', '$adsoyad', '$bolum', '$sinif', '$telefonno', '$cinsiyet', '$mail';)";
        if($baglanti->query($sql) == TRUE){
          echo "Kayıt eklendi...";
      } else {
          echo $baglanti->error;
      }
      }
       
       
       
       
    ?>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>