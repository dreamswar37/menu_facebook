<!DOCTYPE html>
<html>
<head>
	<title>Coding Rakitan</title>
	<link rel="stylesheet" type="text/css" href="asset/css/css.css">
	<script type="text/javascript" src="asset/js/jq.js"></script>
	<script type="text/javascript" src="asset/js/js.js"></script>
</head>
<body>
<div class="menu_atas">
	<div class="kiri">
		<div class="logo">
			<img src="asset/icon/logo.png">
		</div>
		<div class="cari">
			<div class="input">
				<input type="text" name="cari" placeholder="Cari">	
				<div class="cr">
					<img src="asset/icon/cari.png">
				</div>
			</div>			
		</div>
	</div>
	<div class="kanan">
		<div class="menu">
			<div class="m">				
				<div class="ic_prof">
					
				</div>
				<div class="nama">
					<a href="#">Coding</a>	
				</div>				
			</div>
			<div class="mn">
				<div class="g">
					
				</div>
			</div>
			<div class="m">				
				<a href="#">Beranda</a>
			</div>
			<div class="mn">
				<div class="g">
					
				</div>
			</div>
			<div class="m">				
				<a href="#">Buat</a>
			</div>
			<div class="mn">
				<div class="g">
					
				</div>
			</div>
			<div class="m2">				
				<div class="ic">
					
				</div>
			</div>
			<div class="m2">				
				<div class="ic2">
					
				</div>
			</div>
			<div class="m2">				
				<div class="ic3">
					
				</div>
			</div>
			<div class="m2">				
				<div class="ic4">
					
				</div>
			</div>
			<div class="m2">				
				<div class="ic5" id="drop">
					
				</div>
				<div class="ii" style="display: none;">
					
				</div>
				<div class="menu_drop" style="display: none;">
					<div class="menud">
						<a>Grup</a>
					</div>
					<div class="menud">
						<a>Halaman</a>
					</div>
					<div class="menud">
						<a>Aktivitas</a>
					</div>
					<div class="menud">
						<a>Pengaturan</a>
					</div>
					<div class="menud">
						<a>Keluar</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="content">
	
</div>
<script type="text/javascript">	
	$('#drop').click(function () {
		var clas = $(this).attr('class');
		if (clas=="ic5_putih") {
			$(this).attr('class', 'ic5');
			$('.menu_drop').attr('style','display: none;');
			$('.ii').attr('style','display: none;');
		}
		if (clas=="ic5") {
			$(this).attr('class', 'ic5_putih');
			$('.menu_drop').attr('style','display: block;');
			$('.ii').attr('style','display: block;');
		}
	})
</script>
</body>
</html>