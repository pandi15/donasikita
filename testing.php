<html>
	<head>
		<title></title>
		<script>
		function tes(){
			var isi = document.getElementById("tombol");

			if(isi.value == 'Hidup'){
				isi.value = 'mati';
			}
			else{
				isi.value = 'Hidup';
			}
		}
		</script>
	</head>
	<body>
		<input type="submit" id="tombol" name="tombol" value="Hidup" onclick="tes();">
	</body>
</html>