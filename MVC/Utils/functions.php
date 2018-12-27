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

<span style="float:right; display: inline-block; position: relative;
top: -180px;"><div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Tests sélectionnés
  </button>
  <div class="dropdown-menu">
    <?php foreach ($tab as $val) :?>

			<center><?= $val['catgeorie'] ?><a href='?controller=listeTest&action=supprimer_test&categorie=<?= urlencode($val["catgeorie"])?>'>
			<img class='icone' src='Content/image/delete.png' alt='supprimer' height=10 width = 10/></a></center><br>
    <?php endforeach ?>
    <div class="dropdown-divider"></div>
    <center><a class="dropdown-item" href="?controller=appliquerTest&action=afficherTest">Valider</a></center>
  </div>
</div>
</span>
</main>
<script src="Content/js/bootstrap.bundle.min.js"></script>
<?php $_SESSION['listTestSelectionnes']=$tab;?>
<?php
}
?>
