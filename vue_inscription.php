<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulter Etudiant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">GEtudiant!</h1>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-success btn-lg" href="<?php echo site_url('gestion') ?>" role="button">Listes Des Etuidants</a>
            </p>
        </div>
        <div>
          <h3>Etuidant : <strong><em><?php echo $etudiant[0]->Nom; ?></em></strong></h3>
          <p>
            <strong>Nom : </strong> <em><?php echo strtoupper($etudiant[0]->Nom); ?></em>
          </p>
          <p>
            <strong>Prénom : </strong> <em><?php echo ucwords($etudiant[0]->Prenom); ?></em>
          </p>
          <p>
            <strong>Sexe : </strong> <em><?php echo $etudiant[0]->sexe; ?></em>
          </p>
          <p>
            <strong>Date de Naissance : </strong> <em><?php echo $etudiant[0]->Date_naissance; ?></em>
          </p>
          <p>
            <strong>Pays : </strong> <em><?php ucwords($etudiant[0]->pays); ?></em>
          </p>
          <p>
            <strong>Email : </strong> <em><?php echo $etudiant[0]->e_mail; ?></em>
          </p>
          <p>
            <strong>Filière : </strong> <em><?php echo $etudiant[0]->Nom_Fil; ?></em>
          </p>
          <p>
            <strong>Date Inscription : </strong> <em><?php echo $etudiant[0]->date_inscription; ?></em>
          </p>
        </div>

    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>