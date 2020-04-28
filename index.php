<!DOCTYPE html>
<html>
<head>
	<title>Membuat Animasi Fade In</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
	<h1>Membuat Animasi Fade In Menggunakan jQuery</h1>

	<h1 id="klik">Pemuda itu berkata:</h1>
	<!--penjelasan h1 di atas:
	h1 di atas akan dimodifikasi menjadi objek yang bergerak di halaman web.
	-->

	<h1 id="muncul" style="display: none;">"Ada ibu-ibu anjay"</h1>
	<!--penjelasan h1 di atas:
	h1 di atas akan dimodifikasi menjadi objek yang bergerak di halaman web.
	-->

	<img id="jalan" src="https://media.giphy.com/media/l3vRiVfmQ1dO3jM8U/giphy.gif" style="position: relative;">

	<script type="text/javascript">
		$('#klik').click(function() {
			$('#muncul').fadeIn();
		});

		$('jalan').click(function () {
			$('jalan').animate({left: '500px'}, 2000);
		});
	
	</script>
	<!--penjelasan script di atas:
		digunakan untuk memoodifikasi objek (h1) yang diberi id 'klik' dan 'muncul'
		ingat, dalam pemanggilan ke script js, si id harus menggunakan #, kan dia id, kalau class kan dikasih titik, nah kalau id kan dikasih tagar, gengs yo ah-->
		<!--
		perbendaharaan:
		fadein()
		fadeout()
		fadetoggle()
		slidein()
		slideout()
		-->


</body>
</html>