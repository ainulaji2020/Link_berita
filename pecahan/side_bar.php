<div class="countainer-right">
	<input class="input-right" type="" name="submit" value="Search...."><input style="width: 40%; height: 37px;" class="buttuon-submit" type="submit" value="SEARCH">
	
	<h4><ins>PUBLIKASI MEDIA ONLINE</ins></h4>
	<div class="box-side-right">
		<a href="#"><img src="image/our-clients.jpg" /></a>
	</div>
	<h4><ins>POPULAR ARTICLES</ins></h4>
	<div class="wrap-box1">
		<?php  
			foreach ($arr as $key => $value) {
		?>
			<!-- <div class="box">
				<a href="#"><img style="width: 100%;" src="asset/image/<?php echo $value["image"]; ?>" /></a>
				<a href="#"><?php echo $value["text"]; ?> </a><br/>
				<a href="#"><?php echo $value["tanggal"]; ?></a>
			</div> -->
		<?php  

			}
		?>
	</div>
	<div class="vidio-link">
		<h4><ins>PUBLIKASI MEDIA ONLINE</ins></h4>
		<video controls>
			<source src="asset/vidio/vidio-dunia.mp4" type="video/mp4">
		</video>
	</div>

	<h4><ins>PUBLIKASI MEDIA ONLINE</ins></h4>
	<div class="box-side-right">
		<a href="#"><img src="image/perempuan.jpg" /></a>
	</div>

</div>