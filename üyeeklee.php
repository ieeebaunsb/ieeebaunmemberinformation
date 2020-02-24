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
      
      <form action="" method="POST" class="needs-validation" novalidate="">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Ad</label>
            <input type="text" class="form-control"  name="ad" placeholder="Mehmet İlkay" >
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Soyad</label>
            <input type="text" class="form-control" name="soyad"placeholder="Memur" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
		<div class="mb-3">
          <label for="email">TC Kimlik No</label>
          <input type="text" class="form-control"  name="tc"placeholder="12345678901">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <div class="mb-3">
          <label for="email">E-Posta</label>
          <input type="email" class="form-control" name="eposta" placeholder="you@gmail.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
		<div class="mb-3">
          <label >Telefon</label>
          <input type="text" class="form-control" name="telefon" placeholder="546*****44">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
		<div class="row">
        <div class="col-md-6 mb-3">
          <label for="address">Bölüm</label>
          <input type="text" class="form-control" name="bolum" placeholder="Bilgisayar Mühendisliği" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		 <div class="col-md-6 mb-3">
          <label for="address">Sınıf</label>
          <input type="text" class="form-control" name="sinif" placeholder="4" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		<div class="col-md-6 mb-3">
          <label for="address">Okul No</label>
          <input type="text" class="form-control" name="okulno" placeholder="2016******36" >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
		<div class="col-md-6 mb-3">
            <label for="country">Cinsiyet</label>
            <select class="custom-select d-block w-100" name="cinsiyet"  required="">
              <option value="erkek">ERKEK</option>
              <option value="kadin">KADIN</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
		  
			<div class="col-md-6 mb-3">
			<h5>Komiteler</h5>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="cs">
				  <label >Computer Society(CS)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="ras">
				  <label >Robotics And Automation Society (RAS)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox" name="komiteler[]" value="pes" >
				  <label >Power And Energy(PES)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="wie">
				  <label >Women In Engineering(WIE)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox" name="komiteler[]" value="embs" >
				  <label >Engineerin in Medicine and Biology (EMBS)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox" name="komiteler[]" value="basin" >
				  <label >Basın Ve Halkla İlişkiler</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="ea">
				  <label >Educational Activities (EA)</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="egitimseminer">
				  <label >Eğitim ve Seminer Komitesi</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="kok">
				  <label >KÖK</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="sosyaletkinlik">
				  <label >Sosyal ve Kültürel Etkinlikler</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="sponsorluk">
				  <label >Sponsorluk ve Kurumsal İlişkiler</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="teknikgezi">
				  <label >Teknik Gezi</label>
				</div>
				<div class="custom-control custom-checkbox">
				  <input type="checkbox"  name="komiteler[]" value="yayintasarim" >
				  <label  >Yayın ve Tasarım</label>
				</div>
				
			</div>
		     
        <button class="btn btn-primary btn-lg btn-block" name="gonder"type="submit">Gonder</button>
      </form>    
  </div>
  
  
  <?php
		
	$sunucu_adi = "localhost";
	$kullanici_adi= "root";
	$sifre = "";
	$vt = "ieeebaun";

	$baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre, $vt);

	

	if ($baglanti->connect_error)
		die("bağlantı sağlanamadı".$baglanti->connect_error);

		
		
	if(isset($_POST["gonder"]))
	{		
		$sql = "INSERT INTO `uye_bilgiler` (`sira`, `adsoyad`, `tc`, `eposta`, `telefon`, `bolum`, `sinif`, `okulno`, `cinsiyet`) 
			VALUES (NULL, '".$_POST['ad']. " " .$_POST['soyad']."', '".$_POST['tc']."',
			'".$_POST['eposta']."', '".$_POST['telefon']."', '".$_POST['bolum']."', 
			'".$_POST['sinif']."', '".$_POST['okulno']."',
			'".$_POST['cinsiyet']."')";
	}
  
  
	$sunucu_adi = "localhost";
	$kullanici_adi= "root";
	$sifre = "";
	$vt = "ieeebaun";

	$baglanti = new mysqli($sunucu_adi, $kullanici_adi, $sifre, $vt);

	mysqli_set_charset($baglanti,"utf8");

	if ($baglanti->connect_error)
		die("bağlantı sağlanamadı".$baglanti->connect_error);
?>
  
  
  
  
  
  
  <?php
          	  
  $cs="YOK";
  $ras="YOK";
  $pes="YOK";
  $wie="YOK";
  $embs="YOK";
  $basin="YOK";
  $ea="YOK";
  $egitimseminer="YOK";
  $kok="YOK";
  $sosyaletkinlik="YOK";
  $sponsorluk="YOK";
  $teknikgezi="YOK";
  $yayintasarim="YOK";
		if (isset($_POST["gonder"]))
		{
			if(isset($_POST['komiteler']))
				{

					$dizi = $_POST['komiteler'];
					
					
					foreach($dizi as $secim) 
					{
						if($secim=="cs")
						{$cs="VAR";}
					else if($secim=="ras")
					{$ras="VAR";}
				else if($secim=="pes")
					{$pes="VAR";}
				else if($secim=="wie")
					{$wie="VAR";}
				else if($secim=="embs")
					{$embs="VAR";}
				else if($secim=="basin")
					{$basin="VAR";}
				else if($secim=="ea")
					{$ea="VAR";}
				else if($secim=="egitimseminer")
					{$egitimseminer="VAR";}
				else if($secim=="kok")
					{$kok="VAR";}
				else if($secim=="sosyaletkinlik")
					{$sosyaletkinlik="VAR";}
				else if($secim=="sponsorluk")
					{$sponsorluk="VAR";}
				else if($secim=="teknikgezi")
					{$teknikgezi="VAR";}
				else if($secim=="yayintasarim")
					{$yayintasarim="VAR";}
				
				
						
					}	
				}
			else
				{
					echo 'Komite Seçmediniz';
				}	
				 $sql2="INSERT INTO `komiteler` (`adsoyad`, `tc`, `CS`, `RAS`, `PES`, `WIE`, `EMBS`, `Basin`, `EA`, `Egitim`, `KOK`, `SosyalKultur`, `Sponsorluk`,
				 `Teknik`,`yayintasarim`,) 
				 VALUES ('".$_POST['ad']. " " .$_POST['soyad']."', '".$_POST["tc"]."',
				 '$cs', '$ras', '$pes', '$wie', '$embs', '$basin', '$ea', '$egitimseminer', 
				 '$kok', '$sosyaletkinlik', '$sponsorluk', '$teknikgezi', '$yayintasarim');";
		if($baglanti->query($sql2) == TRUE){
                
            } else {
                echo $baglanti->error;
            }
        }
		
				?>

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