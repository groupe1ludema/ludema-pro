<?php require("view_begin.php");
      redirection();?>
      <div class="container-fluid  album bg-light">
        <div class="row">
          <h2 class="title col-lg-12">Mon compte</h2>
        </div>
        <div class="row col-lg-12 offset-md-3 col-md-6 ">
          <p class="col-lg-6 text-center"> Ici, vous avez accès à la création de nouveaux tests et à l'ajout et à la modification de vos pratiquants. </p>
          </div>
        </div>

  <div class="container bcg">
    <div class="row">
      <div class="col-lg-6 col-sm-6 btn-group ">
            <a href="?controller=listeTest&action=choixTest" class="btn bcg my-4"><img class="card-img-top" src="Content/image/nouveau_tests.png" alt="Nouveau test"></a></div>
      <div class="col-lg-6 col-sm-6 btn-group">
          <a href="?controller=mesClients" class="btn bcg my-4"><img class="card-img-top" src="Content/image/Mes_pratiquants.png" alt="Mes pratiquants"></a></div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-6 btn-group ">
            <a href="?controller=mesClients&action=formajouterClient" class="btn bcg my-4"><img class="card-img-top" src="Content/image/ajouter_pratiquant.png" alt="Ajouter pratiquant"></a></div>
      <div class="col-lg-6 col-sm-6 btn-group ">
          <a href="#" class="btn bcg my-4"><img class="card-img-top" src="Content/image/planning.png" alt="Consulter planning"></a></div>
    </div>
  </div>

<?php require("view_end.php"); ?>
