<html>
<head>
	<title>Markering</title>
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
		        "text" => "Pengertian Press Briefing / Jumpa Pers dan Hal-hal yang perlu diperhatikan",
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
				
				<h4><ins>RELATED POSTS</ins></h4><br>
				<div class="minibox">
					<div class="box1">
						<a href="#"><img src="image/hacking.jpg" /></a>
					</div>
					<div class="box1">
						<a class="text" href="#"><p>Digital / Marketing</p></a>
						<a style="font-size: 25px;" class="text" href="#">Apa itu Growth Hacking? Pengertian serta Penjelasannya</a>
						<p>Apa itu Growth Hacking? Growth Hacking merupakan tehnik digital marketing …</p>
						<input style="width: 27%;" class="buttuon-submit" type="submit" value="READ MORE">
					</div>
					<div class="clearfix"></div>
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