<?php
	
	class ViewPage {

		function afficherPage($page){
			?>

			<h1><?echo $page[0]['vchTitrePage']?></h1>

			<div class="ContenuPage">
				<?echo $page[0]['vchContenuPage']?>
			</div>

			<?php
		}

		function afficherListePages($pages){
			?>

			<ul>
				<?  

					foreach ($pages as $key => $page) {
						?>

							<li><a href="index.php?idPage=<?echo $page['idPage']?>"><?echo $page['vchTitrePage']?></a></li>

						<?
					}

				?>
			</ul>

			<?php
		}

	}
	
?>