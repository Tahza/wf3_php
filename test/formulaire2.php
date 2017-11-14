<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'insertion d'un pokemon</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body>
  <?php
    require_once('../function.php');
    // Liste des erreurs fonctionnelles (base de données, technique)
    $errors = [];
    // Liste des erreurs liées aux formulaires (mauvaises données, ...)
    $form_errors = [];
    // Configuration de la base de données à placer dans un fichier différent pour la production
    define('HOST', 'localhost'); // Domaine ou IP du serveur ou est située la base de données
    define('USER', 'root'); // Nom d'utilisateur autorisé à se connecter à la base
    define('PASS', ''); // Mot de passe de connexion à la base
    define('DB', 'pokemon'); // Base de données sur laquelle on va faire les requêtes
    $db_options = array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,// On affiche des warnings pour les erreurs, à commenter en prod (valeur par défaut PDO::ERRMODE_SILENT)
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC   // Mode ASSOC par défaut pour les fetch
    );
    // Connexion à la base de donnée
    $dsn = 'mysql:host=' . HOST . ';dbname=' . DB;
    try {
      $db = new PDO($dsn, USER, PASS, $db_options);
    } catch (PDOException $e) {
      $errors[] = "Erreur de connexion : " . $e->getMessage();
    }
    if (isset($db)) {
    $query= $db->prepare('SELECT * FROM pokemon WHERE pokemon.id= :id');
        $id=$_GET['id'];
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch();
    }
    
  ?>

  <div class="text-center">
    <img id="logo" src="../img/pokemon.png" alt="" style="width: 30%;">
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm-4 d-none d-sm-block">
        <img id="pokeballl" class="img-fluid mx-auto" src="../img/pokeball.png" alt="" />
      </div> <!-- Col -->
      <div class="col-xs-12 col-sm-8">
        <form method="post" id="insertPokemon">
          <input type="hidden" name="insertPokemon" value="1"/>
          <div class="form-control">
            <div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="numero_pokemon">Numéro</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['numero_pokemon']) ? 'is-invalid' : '' ?>" id="numero_pokemon" name="numero_pokemon" value="<?php echo isset($result['numero']) ? $result['numero'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="nom_pokemon">Nom</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['nom_pokemon']) ? 'is-invalid' : '' ?>" id="nom_pokemon" name="nom_pokemon" value="<?php echo isset($result['nom']) ? $result['nom'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="experience_pokemon">Expérience</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['experience_pokemon']) ? 'is-invalid' : '' ?>" id="experience_pokemon" name="experience_pokemon" value="<?php echo($result['experience']) ? $result['experience'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="vie_pokemon">Vie</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['vie_pokemon']) ? 'is-invalid' : '' ?>" id="vie_pokemon" name="vie_pokemon" value="<?php echo isset($result['vie']) ? $result['vie'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="defense_pokemon">Défense</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['defense_pokemon']) ? 'is-invalid' : '' ?>" id="defense_pokemon" name="defense_pokemon" value="<?php echo isset($result['defense']) ? $result['defense'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="attaque_pokemon">Attaque</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control <?php echo isset($form_errors['attaque_pokemon']) ? 'is-invalid' : '' ?>" id="attaque_pokemon" name="attaque_pokemon" value="<?php echo isset($result['attaque']) ? $result['attaque'] : '' ?>">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="pokedex_pokemon">Propriétaire</label>
                <div class="col-sm-10">
                <input type="text" class="form-control <?php echo isset($form_errors['pokedex_pokemon']) ? 'is-invalid' : '' ?>" id="pokedex_pokemon" name="pokedex_pokemon" value="<?php echo isset($result['id_pokedex']) ? $result['id_pokedex'] : '' ?>">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div><!-- Col -->
    </div> <!-- Row -->
  </div> <!-- Container -->

  <form method="post" id="deletePokemon">
    <input type="hidden" name="deletePokemon" value="1"/>
    <input type="hidden" id="id_delete" name="id_delete" value=""/>
  </form>

  <script src="../js/function.js"></script>
</body>

</html>