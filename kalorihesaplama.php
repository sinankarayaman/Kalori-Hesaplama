<!DOCTYPE html>
<html>
<head>
	<title>KALORI HESAPLAMA</title>
	<style type="text/css">
		*{
			font-family: arial;
			color: #666;
		}
	</style>
</head>
<body>

	<center>
		<h2>KALORI HESAPLAMA</h2>
		<form method="post">

			Cinsiyeti Seçin:<br />
			<select name="cinsiyet" style="padding: 5px; width: 265px; border-radius: 3px; border: 1px solid #ddd;"><br />
				<option value="Male">Erkek</option>
				<option value="Female">Kadin</option>
			</select><br /><br />

			<input name="Yas" type="text" placeholder="Yaşınızı Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
			<input name="Kilo" type="text" placeholder="Kilonuzu Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
			<input name="Boy" type="text" placeholder="Boyunuzu Girin" style="padding: 5px; width: 250px; border-radius: 3px; border: 1px solid #ddd;" /><br /><br />
			<input type="Submit" value="HESAPLA" style="padding: 10px 5px; width: 265px; border-radius: 3px; border: 1px dashed #ddd; background-color: white;" />


			<?php

				if(isset($_POST['Yas']) && isset($_POST['Kilo']) && isset($_POST['Boy'])){


					$Yas=$_POST['Yas'];
					$Kilo=$_POST['Kilo'];
					$Boy = $_POST['Boy'];
					$cinsiyet=$_POST['cinsiyet'];

					switch ($cinsiyet){

						case 'Female':
							$cinsiyet= 655 + (9.6 * $Kilo ) + (1.8 * $Boy) - (4.7 * $Yas);
							echo "<p>Tahmini günlük metabolizma hızınız $cinsiyet </p>";
							echo "<p>This means that you need rouhgly $cinsiyet calories a day to maintain your current Kilo.</p>";
							break;

						case 'Male':
							$cinsiyet=66 + (13.7 *$Kilo) + (5 * $Boy) - (6.8 * $Yas);
							echo "<p>Tahmini günlük metabolizma hızınız : $cinsiyet </p>";
							echo "<p>Bu şu anki kilonuzu korumak için günde kabaca $cinsiyet kaloriye ihtiyacınız olduğu anlamına gelir.</p>";
							break;


					}


				}
			?>

		</form>

	</center>

</body>
</html>
