<?php require("view_begin.php"); ?>

    <!-- case du titre -->
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><img class="logoAcc img-fluid" src="Content/image/logo.png" alt="Logo Ludema"></h1>
          <p class="lead text-muted">LUDEMA est une Société par Actions Simplifiées employés dont la présidente est Céline De Prins et le Directeur Général Mathieu VERGNAULT.
            Le siège social est situé aux 49 rues de Paris, 95310 Saint Ouen l’Aumône.</p>
          <p>
            <a href="?controller=listeTest&action=choixTest" class="btn btn-primary my-2">Nouveau Test</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Content/image/onelegbalance.jpeg" alt="One-leg balance">
                <div class="card-body">
                  <p class="card-text">One-leg balance</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="?controller=listeTest&action=choixtest&categorie=One-leg+balance"><button type="button" class="btn btn-sm btn-outline-secondary"> Faire Ce test</button> </a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Content/image/testdemarche.jpeg" alt="Test de marche">
                <div class="card-body">
                  <p class="card-text">Test de marche</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="?controller=listeTest&action=choixtest&categorie=Test+de+marche+de+6+minutes"><button type="button" class="btn btn-sm btn-outline-secondary"> Faire Ce test</button> </a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                    <small class="text-muted">6 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Content/image/handgrip.jpeg" alt="Handgrip">
                <div class="card-body">
                  <p class="card-text">Hand-grip</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="?controller=listeTest&action=choixtest&categorie=Hand-Grip"><button type="button" class="btn btn-sm btn-outline-secondary"> Faire Ce test</button> </a>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>



    </main>
<?php require("view_end.php"); ?>
