<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion Etudiants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Portail-Inscription ESGIS</h1>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-success btn-lg" href="<?php echo site_url('') ?>" role="button">Accueil</a>
            </p>
        </div>

        <h3 class="text-capitalize text-center">Listes des Etudiants inscrits</h3><br>

        <table class="table table-hover">
             <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom(s)</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Date Naissance</th>
                    <th scope="col">Filière</th>
                    <th scope="col" colspan="3">Options</th>
                </tr>
            </thead>

            <tbody>
              <?php
              $i = 1;
               foreach($etudiants as $etudiant){ ?>
                <tr>
                   <td><?php echo $i++; ?></td> 
                   <td><?php echo strtoupper($etudiant->Nom); ?></td> 
                   <td><?php echo ucwords($etudiant->Prenom); ?></td> 
                   <td><?php echo $etudiant->sexe; ?></td> 
                   <td><?php echo $etudiant->Date_naissance; ?></td>
                   <td><?php echo $etudiant->Nom_Fil; ?></td>
                   <td>
                        <a href='<?php echo site_url("voir/$etudiant->id_Etu"); ?>' class="btn btn-primary">Voir</a>
                   </td>
                   <td>
                        <button type="button" data-toggle="modal" data-target="#supprimerPopup<?php echo $etudiant->id_Etu; ?>" class="btn btn-danger">Supprimer</button>
                        <div class="modal fade" id="supprimerPopup<?php echo $etudiant->id_Etu; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Demande de confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez-vous supprimer <strong><?php echo $etudiant->Nom ?></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
        <a href='<?php echo site_url("supprimer/$etudiant->id_Etu"); ?>' class="btn btn-warning">Oui</a>
      </div>
    </div>
  </div>
</div>
                   </td>
                   <td>
                        <a href="#" class="btn btn-warning">Modifier</a>
                   </td> 
                </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>