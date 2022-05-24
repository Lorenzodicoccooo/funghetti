<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];

	$sql = "INSERT INTO comments3 (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style301.css">

	<title>Pineta di ostia</title>
</head>
<body>
<audio id="audio">
	 <source src="../audio/Audio_3.mp3" type="audio/mpeg">
</audio>
	<div class="wrapper">
    <a href="home.html" class="indietro">Torna indietro</a>
		<div class="audio">
    <a onclick="stopFrancesca()"><img src="../src/pontile/stop.png" width="7%"></a>
		<a onclick="playFrancesca()"><img src="../src/pontile/start.png" width="7%"></a>
		</div>
		<h1 class="titolo">Pineta di ostia</h1>
		<br>
		<center> <img id="foto" src="../photos/photo-4.png" width="75%" class="foto"> <br><br><br><br></center>
		<h3 class="descrizione">La Pineta di Castelfusano è il più grande parco esistente a Roma, e il suo nome deriva da quello di un’antica famiglia Romana "Fusius". Se si vogliono dimenticare le ansie e le trepidazioni della vita quotidiana, questo è il luogo ideale in cui recarsi. Si può camminare a lungo attraverso larghi sentieri che si snodano attraverso il fitto sottobosco spontaneo sormontato da imponenti pini marittimi, che si estendono per una lunghezza di quattro km e una larghezza di due.</h3>
		<a onclick="cambiaFoto()"><h2> Lascia un commento: </h2></a>

		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Nome:</label>
					<input type="text" name="name" id="name" placeholder="Insersci il tuo nome" required>
				</div>
				<div class="input-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" placeholder="Inserisci la tua email">
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Commento:</label>
				<textarea id="comment" name="comment" placeholder="Scrivi qui il tuo commento" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php

			$sql = "SELECT * FROM comments3";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}

			?>
		</div>
	</div>
<script>
function playFrancesca(){
	 const audio = document.querySelector("#audio");

	 audio.play();
	 audio.currentTime = 0;
}
function stopFrancesca(){
	const audio = document.querySelector("#audio");

	 audio.pause();
	 audio.currentTime = 0;
}
function cambiaFoto(){
	setTimeout(function(){
		document.getElementById("foto").src="../photos/pineta.png";
		setTimeout(function(){
			document.getElementById("foto").src="../photos/pineta.png";
			setTimeout(function(){
				document.getElementById("foto").src="../photos/pineta.png";
				setTimeout(function(){
					document.getElementById("foto").src="../photos/pineta.png";
					cambiaFoto();
				},4000);
			},4000);
		},4000);
	},4000);
}
	</script>
	<script>
	window.onload = function() {
	  cambiaFoto();
	};
	</script>
</body>
</html>
