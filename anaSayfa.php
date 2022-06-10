<html>
<head>
<meta charset="utf-8">
<style>
	.kenarlik{border:1px solid #e0e0ee;}
	.gizle{display:none;}
	.fontSize18{font-size:18px;}
	.fontSize14{font-size:14px;}
	.yaziRenk{color:#847592;}
	.fontSize13{font-size:13px;}
	.koyu{font-weight: bold}
	.koseYuvarlat{border-radius: 10px}
	.kenarlikRow{border:2px solid red;}
	.kenarlikCol{border:1px solid orange;}
	.dolgu{background:#000;}
	.saydamlik{opacity:0.6;}
	.kenarlikBeyaz{border:2px inset #fff;}
	body a{text-decoration:none !important}
</style>
<script src="js/popper.min.js" ></script> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery-3.3.1.min.js" ></script> 
<script src="js/bootstrap.min.js" ></script>
<script src="js/jQueryRotate.js"></script>
<script type="text/javascript" src="js/animasyon.js"></script>
<script>
	
</script>
</head>
<body>
	<div class="container">
		<!-- UYARI -->
		<div class="row">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
  			  <img src="resimler/uyarı.png"  class="img-fluid">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
			<!-- LOGO - MENÜ -->
		<div class="row kenarlik justify-content-md-center align-items-end p-1">
					<div class="col-1">
						<img src="resimler/logomm.png" class="img-fluid">
					</div>
					<div class="col-4 koyu fontSize18">"MAVİŞ AVM"</div>	
					<div class="col-12 col-md-6 ">
						<ul class="nav justify-content-end">
							  <li class="nav-item">
							    <a class="nav-link active" href="#">Yıldız Fırsatlar</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Tüm Kampanyalar</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#">Yurt Dışı Alışveriş</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Bize Ulaşın</a>
							  </li>
							    <li class="nav-item">
							    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Sipariş Takibi</a>
							  </li>
							    <li class="nav-item">
							    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">İade Süreci</a>
							  </li>
							    <li class="nav-item">
							    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Giriş Yap</a>
							  </li>

							</ul>
					</div>
		</div>


		 <!-- CAROUSEL -->
	    <div class="row justify-content-center">
	    	<div class="col-12 p-0 bg-Secondary" style="border:2px double #e0e0ee">
	    		<div class="row justify-content-center p-3">
	    			<div class="col-11">
			    		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="resimler/banner1.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="resimler/banner2.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="resimler/banner3.png" class="d-block w-100" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="resimler/banner4.png" class="d-block w-100" alt="...">
						    </div>
						  
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>		
	    	</div>
	    </div>
	
		<!-- NAVBAR -->
		<div class="row my-1">
			<div class="col-12 p-0">
				<nav class="navbar navbar-expand-lg navbar-light bg-Primary ">
				   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link text-light koyu " href="#">ANA SAYFA</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="altSayfalar/Elektronik.html">Elektronik</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Ev,Bahçe,Ofis Yapı Market</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Moda </a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Kişisel Bakım</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Anne-Bebek</a>
				      </li>
					  <li class="nav-item">
				        <a class="nav-link text-light" href="#">Süper Market ,Evcil Hayvan </a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Spor-Outdoor</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link text-light" href="#">Kitap,Müzik,Oyuncak</a>
				      </li>
				     </ul>
				  </div>
				</nav>
			</div>	
	    </div>

	   

	   
	    <!-- İNDİRİM -->
	    <div class="row  p-1 justify-content-center">
	    	<div class="col-8 col-sm-12 p-0">
	    		<div class="card">
				  <div class="card-header  bg-primary text-white">
				    <h5>İNDİRİMLİ ÜRÜNLER</h5>
				  </div>
				  <div class="card-body">
					   <div class="row justify-content-center">
					   		<div class="col-12 d-flex flex-column flex-sm-row justify-content-between text-center ">	
							   <div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/evim.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Ev değişimi">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/evim.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Ev Değişimi
							   			</div>
							   		</div>
							   	</div>
							   	<div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/kart.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Kart">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/kart.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Kart
							   			</div>
							   		</div>
							   	</div>
							    <div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/maximum.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Notebook">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/maximum.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Maximum Fırsatları
							   			</div>
							   		</div>
							   	</div>
							   	<div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/evdekorasyonu.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Beyaz Eşya">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/evdekorasyonu.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Ev Dekorasyonu
							   			</div>
							   		</div>
							   	</div>
							   	<div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/süpermarket.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Elektrikli Ev Aletleri">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/süpermarket.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				SüperMarket
							   			</div>
							   		</div>
							   	</div>
							   	<div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/çocuk.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Kişisel Bakım">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/çocuk.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Çocuk Ürünleri
							   			</div>
							   		</div>
							   	</div>
							   	<div class="p-1">
							   		<div class="row">
							   			<div class="col-12 d-lg-none">
							   				<img src="resimler/teknolojikalet.png" class="img-fluid" data-toggle="tooltip" data-placement="top" title="Oyun Konsolları">
							   			</div>	
							   			<div class="col-12 d-none d-lg-block bilgi">
							   				<img src="resimler/teknolojikalet.png" class="img-fluid">
							   			</div>
							   			<div class="col-12 d-none d-lg-block fontSize14 Koyu">
							   				Teknolojik Aletler
							   			</div>
							   		</div>
							   	</div>

						</div>   
					</div>
				  </div>
				</div>	
	    	</div>
	    </div>

	    <!-- BİLGİLER -->
	    <div class="row my-3  p-1 ">
	    	<div class="col-12 p-0">
	    		<div class="card">
				  <div class="card-header bg-primary text-white">
				    <h5>BİLGİLER</h5>
				  </div>
				  <div class="card-body">
					  	<div class="row justify-content-center">
					  		<div class="col-12 col-md-4 text-center mt-1">
					  			<img src="resimler/bilgi1.png" class="img-fluid">
					  		</div>
					  		<div class="col-12 col-md-4 text-center mt-1">
					  			<img src="resimler/bilgi2.png" class="img-fluid">
					  		</div>
					  		<div class="col-12 col-md-4 text-center mt-1">
					  			<img src="resimler/bilgi3.png" class="img-fluid">
					  		</div>
					    </div>
				  </div>
				</div>
	    	</div>
	    </div>

	    <!-- ŞİRKET VE DİĞER BİLGİLER -->
	    <div class="row">
	    	<div class="col-12">
	    		<div class="jumbotron bg-secondary p-4">
				  	<div class="row">
				  		<div class="col-12 col-sm-6 col-lg-3 mt-3">
				  			<h5>Hızlı Bağlantılar</h5>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">İnsan Kaynakları</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Gizlilik Politikası</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Site Haritası</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Bilişim Sözlül</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Tüm Kategoriler</a>
				  			</div>
				  		</div>
				  		<div class="col-12 col-sm-6 col-lg-3 mt-3">
				  			<h5>Müşteri Hizmetleri</h5>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Üye Girişi</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Alışveriş Sepeti</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Karşılaştırma Listesi</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Kargo Takip</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Teknik Servis</a>
				  			</div>
				  			<div class="col-12 p-0">
				  				<a href="#" class="text-dark">Garanti ve İade</a>
				  			</div>
				  		</div>
				  		<div class="col-12 col-sm-6 col-lg-3 mt-3">
				  			<h5>E-Bülten Aboneliği</h5>
				  			<p class="text-justify">Kampanya ve duyurular ile ilgili
								elektronik posta almak ister misiniz?
							</p>
							<div class="row">
								<div class="col-12">
									<label>E-Mail</label>
									<input type="text" />
								</div>
								<div class="col-12">
									<button class="btn btn-primary">Kaydet</button>
								</div>
							</div>
				  		</div>
				  		<div class="col-12 col-sm-6 col-lg-3 mt-3">
				  			<h5>İletişim</h5>
				  			<div class="row">
				  				<div class="col-12">
				  					<ul class="list-unstyled">
									  <li class="media my-1">
									    <img src="resimler/konum.jpg" class="mr-3" alt="...">
									    <div class="media-body">
									      	Menekşe sokak No:9 ÇANAKKALE
									    </div>
									  </li>
									 <li class="media my-1">
									    <img src="resimler/eposta.jpg" class="mr-3" alt="...">
									    <div class="media-body">
									      	MaviŞim@gmail.com
									    </div>
									  </li>
									  <li class="media my-1">
									    <img src="resimler/tel.jpg" class="mr-3" alt="...">
									    <div class="media-body">
									      	0 312 234 60 60  
									    </div>
									  </li>
									  <li class="media my-1">
									    <img src="resimler/facebook.jpg" class="mr-3" alt="...">
									    <div class="media-body">
									      @Mavişimm
									    </div>
									  </li>								
									      	
									    </div>
									  </li>
									</ul>
				  				</div>
				  			</div>
				  		</div>
				  	</div>
				</div>
	    	</div>
	    </div>
	</div>
</body>
</html>













