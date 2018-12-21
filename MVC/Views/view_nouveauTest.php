
<?php require("view_begin.php"); ?>

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
<?php // require("view_end.php"); ?>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="Content/js/menuderoulant.js"></script>

</body>
</html>
