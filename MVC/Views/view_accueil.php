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
                <img class="card-img-top" src="Content/image/rameur.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Le Test du rameur: il consiste à effectuer 20 répétitions en moins de 30 secondes.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Faire Ce test</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                    <small class="text-muted">30 sec</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Content/image/squat.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Le Test du Squat: il s'agit de réaliser 50 squats en moins de 1 minute.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Faire Ce test</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                    <small class="text-muted">1 min</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="Content/image/v%C3%A9lo.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Le Test du vélo: ce test consiste à pédaler pensant 30 minutes.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Faire Ce test</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Description</button>
                    </div>
                    <small class="text-muted">30 mins</small>
                  </div>
                </div>
              </div>
            </div>



    </main>
<?php require("view_end.php"); ?>
