<?php


/**
 * Fonction échappant les caractères html dans $message
 * @param  string $message chaîne à échapper
 * @return string          chaîne échappée
 */
function e($message){
	return htmlspecialchars($message, ENT_QUOTES);
}

function generer_arbre_testchoisis($tab = []){?>
	<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tests sélectionnés
  </button>
  <div class="dropdown-menu">
    <?php foreach ($tab as $val) :?>
			<a class="dropdown-item" href="#"><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
			<img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10/></a>
    <?php endforeach ?>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Validé</a>
  </div>
</div>
<script src="Content/js/bootstrap.bundle.min.js"></script>

<?php
}
?>
