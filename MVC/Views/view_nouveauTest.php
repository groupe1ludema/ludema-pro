<<<<<<< HEAD

<?php require("view_begin.php"); ?>
<main>

<div class="container">
	<div class="row justify-content-center arbreETtestselection">
				<div class="col-lg-5">

					<ul class="accordion-menu">
					 	<?php foreach ($listeCategory as $category): ?>
				  	<li>
				    	<div class="dropdownlink"><?= e($category) ?></div>
				    	<ul class="submenuItems">
				      	<?php foreach ($listeTest as $test): ?>
				        	<?php if($test['Categorie']==e($category)): ?>
				        		<li><a href="?controller=listeTest&action=choixtest&categorie=<?= e(urlencode($test['Nom']))?>"><?= e($test['Nom']) ?> </a></li>
				        	<?php endif ?>
				      	<?php endforeach ?>
				    	</ul>
				  	</li>
				 	 	<?php endforeach ?>
					</ul>

				</div>

				<div class="card bg-light mb-3">
  				<div class="card-header">Test sélectionnés :</div>
					<div class="card-body">


								<?php foreach ($tab as $val) :?>
										 <p> <center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
													<img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a> </center>
										</p>
								<?php endforeach ?>

								<center>	<a class="btn btn-primary" href="?controller=appliquerTest&action=afficherTest">Valider</a> </center>
					</div>

				</div>
				<?php $_SESSION['listTestSelectionnes']=$tab;?>

		</div>
	</div>

	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src="Content/js/menuderoulant.js"></script>

		<?php  require("view_end.php"); ?>
=======

<?php require("view_begin.php"); ?>
<main>

<div class="container">
	<div class="row justify-content-center arbreETtestselection">
				<div class="col-lg-5">

					<ul class="accordion-menu">
					 	<?php foreach ($listeCategory as $category): ?>
				  	<li>
				    	<div class="dropdownlink"><?= e($category) ?></div>
				    	<ul class="submenuItems">
				      	<?php foreach ($listeTest as $test): ?>
				        	<?php if($test['Categorie']==e($category)): ?>
				        		<li><a href="?controller=listeTest&action=choixtest&categorie=<?= e(urlencode($test['Nom']))?>"><?= e($test['Nom']) ?> </a></li>
				        	<?php endif ?>
				      	<?php endforeach ?>
				    	</ul>
				  	</li>
				 	 	<?php endforeach ?>
					</ul>

				</div>

				<div class="card bg-light mb-3">
  				<div class="card-header">Test sélectionnés :</div>
					<div class="card-body">


								<?php foreach ($tab as $val) :?>
										 <p> <center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
													<img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10 /></a> </center>
										</p>
								<?php endforeach ?>

								<center>	<a class="btn btn-primary" href="?controller=appliquerTest&action=afficherTest">Valider</a> </center>
					</div>

				</div>
				<?php $_SESSION['listTestSelectionnes']=$tab;?>

		</div>
	</div>

	<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src="Content/js/menuderoulant.js"></script>
	
		<?php  require("view_end.php"); ?>
>>>>>>> 8e2f2073a3f88f01738e37e1a56f031106ad1ff0
