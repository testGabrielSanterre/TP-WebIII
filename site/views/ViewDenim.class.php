<?php
	
	class ViewDenim {

		function afficherDenim($denim, $style){
			?>
			<fieldset>
				<h1><?echo $denim[0]['vchNomDenim']?></h1>

				<p>
					Photo : <?echo $denim[0]['vchUrlMedia']?> <br>
					Style : <?echo $style[0]['vchNomStyle']?> <br>
					Categorie : <?echo $style[0]['enumCollection']?> <br>
				</p>
			</fieldset>

			<?php
		}

		function afficherListeDenims($denims){
			?>

			<ul>
				<?  

					foreach ($denims as $key => $denim) {
						?>

							<li><a href="index.php?idDenim=<?echo $denim['idDenim']?>"><?echo $denim['vchNomDenim']?></a> Image : <?echo $denim['vchUrlMedia']?></li>

						<?
					}

				?>
			</ul>
			<?php
		}

	}
	
?>