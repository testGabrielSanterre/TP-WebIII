<?php
	
	class ViewStyle {

		function afficherStyle($style){
			?>

			<h1><?echo $style[0]['vchNomStyle']?></h1>

			<h2>
				<?echo $style[0]['enumCollection']?>
			</h2>

			<?php
		}

		function afficherListeStyles($styles){
			?>

			<ul>
				<?  

					foreach ($styles as $key => $style) {
						?>

							<li><a href="index.php?idStyle=<?echo $style['idStyle']?>"><?echo $style['vchNomStyle']?></a></li>

						<?
					}

				?>
			</ul>
			<?php
		}

	}
	
?>