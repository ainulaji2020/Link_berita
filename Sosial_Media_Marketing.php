<!DOCTYPE html>
<html>
<head>
	<title>Sosial Media Marketing</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

	</style>
</head>
<body>

	<?php  

		$arr = [
	    	[
		        "image" => "mic.jpg",
		        "text" => "Tujuan dan Manfaat Konferensi Pers / Press Conference",
		        "tanggal" => "31-jul-2020"
	   		 ],
	   		 [
		        "image" => "keluarga.jpg",
		        "text" => "Pentingnya Media Relations bagi Perusahaan & Lembaga",
		        "tanggal" => "31-jul-2020"
	   		 ],
		    [
		        "image" => "kamera.jpg",
		        "text" => "Pengertian Press Briefing / Jumpa Pers dan Hal-hal yang perlu diperhatikan",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-hotman.jpg",
		        "text" => "Biografi Hotman Paris: Pengacara Paling Tersohor di Tanah Air",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-deddy-corbuzier.jpg",
		        "text" => "Biografi Deddy Corbuzier: Father of Youtube",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-tokped.jpg",
		        "text" => "Biografi William Tanuwijaya: Orang dibalik Sukesnya Tokopedia",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-ahmad-zaky.jpg",
		        "text" => "Biografi Ahmad Zaky: Founder dan Mantan CEO Bukalapak",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-younglex.jpg",
		        "text" => "Biografi Young Lex, Mulai Dari Menjual Nasi Uduk Hingga Menjadi Public Figure",
		        "tanggal" => "31-jul-2020"
	    	],
	    	[
		        "image" => "biografi-raffi-ahmad.jpg",
		        "text" => "Biografi Raffi Ahmad: Artis Terkenal Seantero Indonesia",
		        "tanggal" => "31-jul-2020"
	    	]

	    ];
    ?>

	<?php  

	include "pecahan/menu.php"

	?>

	<div class="wrap-coun">
		<div class="conten-center">
			<div class="countainer">
				
				<h4><ins>Sosial Media Marketing</ins></h4><br>
				<div class="minibox">
					<?php  
						// foreach ($arr as $key => $value) {
						for($i=0; $i< count($arr);$i++){
							if ($i<=1) {
										
					?>
								<div style="width: 100%; margin-top: 15px; margin-bottom: 15px;" class="box1">
									<a style="float: left; width: 50%; padding-right:20px; box-sizing: border-box;" href="#"><img style="width: 100%;" src="image/<?php echo $arr[$i]["image"]; ?>" /></a>
									<div style="width: 50%; float: left; line-height: 20px;">
										<a href="#"><?php echo $arr[$i]["text"]; ?> </a><br/><br/>
										<a href="#"><?php echo $arr[$i]["tanggal"]; ?></a>
									</div>	
									<input style="width: 15%; margin-top: 60px; margin-bottom: 60px;" class="buttuon-submit" type="submit" value="READ MORE">
									<div class="clearfix"></div>
								</div>
					<?php  
							}
						}
						// }
					?>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //ini konten yang di kanan // -->
			<?php  

				include"pecahan/side_bar.php"

			?>
			<div class="clearfix"></div>
		</div>

		
		<div class="clearfix"></div>
	</div>
	<?php include"pecahan/footer.php" ?>


</body>
</html>