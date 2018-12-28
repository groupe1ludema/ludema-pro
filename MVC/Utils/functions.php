<?php

/**
* Fonction échappant les caractères html dans $message
* @param  string $message chaîne à échapper
* @return string          chaîne échappée
*/
function e($message){
return htmlspecialchars($message, ENT_QUOTES);
}

function generer_arbre_testchoisis($tab){?>
<div class="panel panel-primary btnselect">
	<div class="panel-heading">
			<p class="panel-title"> Tests sélectionnés : </p>
	</div>
	<div class="list-group">
			<ul class="list-group">
				<?php foreach ($tab as $val) :?>
						 <li  class="list-group-item"> <center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
									<img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10/></a> </center>
						</li>
				<?php endforeach ?>
			</ul>
				<center>	<a class="btn btn-primary" href="?controller=appliquerTest&action=afficherTest">Valider</a> </center>
	</div>
</div>

</main>
<script src="Content/js/bootstrap.bundle.min.js"></script>
<?php $_SESSION['listTestSelectionnes']=$tab;?>
<?php
}
?>
