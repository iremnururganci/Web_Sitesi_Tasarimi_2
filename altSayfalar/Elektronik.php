<html>
<head>
<meta charset="utf-8">
<style>
	.kenarlik{border:1px solid #dfdfdf}
	.font{font-size:14px;font-weight:bold;}
	.beyazYazi{color:white;}
	body a{text-decoration:none;color:#0f0f0f; !important}
</style>
<script src="js/popper.min.js" ></script> 
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<?php
	function veriTabaninaBaglan($veriTabani){
		$db=new mysqli("localhost","root","",$veriTabani);
	 	$db->set_charset("utf8");
	 	return $db;
	}

	function tekliIcerik($anaBolumIndex){
		$db=veriTabaninaBaglan("odevv");
		$sorgu="select icerik,linkId from icerik where anaBolumIndex=$anaBolumIndex";
	 	$sonuc=$db->query($sorgu);
	 	$kayit=$sonuc->fetch_assoc();
	 	return $kayit["icerik"];
	}

	function cokluIcerik($anaBolumIndex){
		$db=veriTabaninaBaglan("odevv");
		$sorgu="select icerik,linkId from icerik where anaBolumIndex=$anaBolumIndex";
	 	$sonuc=$db->query($sorgu);
	 	return $sonuc;
	}

	function linkSorgula($linkId){
		$db=veriTabaninaBaglan("odevv");
		$sorgu="SELECT linkler.sayfa from linkler where linkler.linkId=$linkId";
	 	$sonuc=$db->query($sorgu);
	 	$kayit=$sonuc->fetch_assoc();
	 	return $kayit["sayfa"];
	}
?>
</head>
<body class="bg-light">
	 <div class="container mt-3">
	 	<div class="row">
	 		<div class="col-12 kenarlik">
	 			<div class="row align-items-end">
	 				<div class="col-2 p-2">
	 					<?php
	 						$anaBolumIndex=1;
	 					?>
	 					<img src="<?php echo tekliIcerik($anaBolumIndex)?>" class="img-fluid" />
	 				</div>
	 				<div class="col-auto p-2">
	 					<?php
	 						$anaBolumIndex=2;
	 					?>
	 					<h5 class="m-0 d-none d-lg-block"><?php echo tekliIcerik($anaBolumIndex)?></h5>
	 					<h6 class="m-0 d-block d-lg-none"><?php echo tekliIcerik($anaBolumIndex)?></h6>
	 				</div>
	 				<div class="col-12 col-lg p-2">
	 					<div class="row justify-content-lg-end py-2 py-lg-0">
	 						<?php 
	 						$anaBolumIndex=3;
	 						$sonuc=cokluIcerik($anaBolumIndex);
	 						$ks=$sonuc->num_rows;
	 						for($i=0;$i<$ks;$i++){
	 							$kayit=$sonuc->fetch_assoc();
	 							$icerik=$kayit["icerik"];
								//echo "<div class='col-auto'><a href='#'>$icerik</a></div>";
								echo '<div class="col-auto"><a href="#">'.$icerik.'</a></div>';
	 						}
	 						?>
	 						

	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 	<div class="row mt-2">
	 		<div class="col-12 p-3 bg-secondary text-white rounded">
	 			<div class="row align-items-center">
	 				<?php
	 						$anaBolumIndex=4;
	 				?>
	 				<div class="col">
	 					<h5><?php echo tekliIcerik($anaBolumIndex)?></h5>
	 				</div>
	 				<?php
	 						$anaBolumIndex=5;
	 						$sonuc=cokluIcerik($anaBolumIndex);
	 						$kayit=$sonuc->fetch_assoc();
	 						$icerik=$kayit["icerik"];
	 						$linkId=$kayit["linkId"];
	 						if ($linkId!=0){
	 							$link=linkSorgula($linkId);
	 						}else{
	 							$link="#";
	 						}
	 				?>
	 				<div class="col text-end">
	 					<h6> <a href="<?php echo $link?>" class="text-white"><?php echo $icerik?> </a></h6>
	 				</div>
	 			</div>

	 		</div>
	 	</div>
	 	<div class="row my-3 bg-white kenarlik p-3 rounded">
	 		<div class="col-12 ">
	 			<div class="row">
	 				<?php
	 				$tekrarSayisi=4;
	 				$anaBolumIndex=6;
	 				$sonuc=cokluIcerik($anaBolumIndex);
	 				for($i=0;$i<$tekrarSayisi;$i++){
		 				echo '<div class="col">';
		 					echo '<div class="card text-center h-100">';
		 					  $kayit=$sonuc->fetch_assoc();
							  $icerik=$kayit["icerik"];
							  echo '<div class="card-header bg-secondary text-white">';
							   echo $icerik;
							  echo '</div>';
							  echo '<div class="card-body p-0">';
							    $kayit=$sonuc->fetch_assoc();
							    $icerik=$kayit["icerik"];
							    echo '<h6 class="card-title py-2">';
							    	echo $icerik;
							    echo '</h6>';
							    $kayit=$sonuc->fetch_assoc();
							    $icerik=$kayit["icerik"];
							    echo '<img src="'.$icerik.'" class="img-fluid" />';
							    $kayit=$sonuc->fetch_assoc();
							    $icerik=$kayit["icerik"];
							    echo '<p class="pt-1 px-2">'.$icerik.'</p>';
							  echo '</div>';
							  echo '<div class="card-footer text-warning bg-light">';
							    $kayit=$sonuc->fetch_assoc();
							    $icerik=$kayit["icerik"];
							  	echo '<h5 class="text-muted"><del>'.$icerik.'</del></h5>';
							  	$kayit=$sonuc->fetch_assoc();
							    $icerik=$kayit["icerik"];
							  	echo '<h4>'.$icerik.'</h4>';

							  	$kayit=$sonuc->fetch_assoc();
	 							$icerik=$kayit["icerik"];
	 							$linkId=$kayit["linkId"];
		 						if ($linkId!=0){
		 							$link=linkSorgula($linkId);
		 						}else{
		 							$link="#";
		 						}
							    echo '<a href="'.$link.'" class="btn btn-danger">'.$icerik.'</a>';
							  echo '</div>';
							echo '</div>';
		 				echo '</div>';
		 			}
	 				?>
	 			</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>
