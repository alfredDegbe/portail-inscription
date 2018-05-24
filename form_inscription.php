<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Portail-Inscription ESGIS</h1>
            <p class="lead">Brève description de l'application Web Portail-Inscription</p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-success btn-lg" href="<?php echo site_url('gestion') ?>" role="button">Gestion</a>
            </p>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-12 col-md-6 offset-md-2">
                <div style="margin-bottom:10px;">
                    <div id="resultat">
                        <div class="alert alert-dismissible fade show" role="alert" id="alertDiv">
                          <p id="resultatText"></p>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    </div>
                    <span class="h2">Formulaire d'Inscription</span><br>
                    <small class="text-info"><i>Veuillez remplir avec soin. Les champs avec <span class="text-danger">*</span>
                    sont obligatoires.</i></small>
                </div>
                <form method="POST" id="form_inscription">
                    <div class="form-group">
                        <label for="nomInput">Nom : <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nom" id="nomInput" aria-describedby="nomHelp" placeholder="Entrer Nom..." required="required">
                        <small id="nomHelp" class="form-text text-muted">Important</small>
                    </div>
                    <div class="form-group">
                        <label for="prenomInput">Prénom (s) :</label>
                        <input type="text" class="form-control" name="prenom" id="prenomInput" placeholder="Entrer Prénom (s)...">
                    </div>
                    <div class="form-group">
                        <label for="dateNaissInput">Date de Naissance : <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="dateNaiss" id="dateNaissInput" aria-describedby="dateNaissHelp" required="required" placeholder="Entrer Date de Naissance...">
                    </div>
                    <div class="form-group">
                        <label for="">Sexe : <span class="text-danger">*</span></label>
                        <!-- <div class="form-check"> -->
                        <div>
                            <input type="radio" name="sexe" id="sexeRadios1" value="F" checked> Femme 
                            <input type="radio" name="sexe" id="sexeRadios2" value="M"> Homme
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paysSelect">Pays : <span class="text-danger">*</span></label>
                        <select class="form-control" required="required" name="pays" id="paysSelect">
                            <option>Veuillez choisir votre pays...</option>
                            <option value="Togo" selected="selected">Togo </option>
                            <option value="Afghanistan">Afghanistan </option>
                            <option value="Afrique_Centrale">Afrique_Centrale </option>
                            <option value="Afrique_du_sud">Afrique_du_Sud </option>
                            <option value="Albanie">Albanie </option>
                            <option value="Algerie">Algerie </option>
                            <option value="Allemagne">Allemagne </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="filiereSelect">Filière : <span class="text-danger">*</span></label>
                        <select class="form-control" required="required" name="idFil" id="filiereSelect">
                            <option>Veuillez choisir votre filière...</option>
                            <?php foreach($filieres as $filiere) { ?>
                            <option value="<?php echo $filiere->id_Fil; ?>"><?php echo $filiere->Nom_Fil; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="emailInput">Adresse Email : <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="Entrer Email...">
                    </div>

                    <div style="margin:20px;">
                        <span class="text-muted">*Veuillez vérifier les informations entrées avant de valider</span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Valider" class="btn btn-primary">&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Annuler" class="btn btn-default">
                    </div>
                </form>
            </div>
            <div class="d-sm-none d-md-block col-md-4">
                <img src="<?php echo base_url('assets/images/jeune_etudiante.jpg'); ?>" width="400" alt="image etudiante.jpg">
            </div>
        </div>
    </div> 
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript">
        $("#resultat").hide();
        $(document).ready(function(){
            $("input").attr({
                autocomplete:'off'
            });
            $("#form_inscription").submit(function(e){
                e.preventDefault();
                var donnees = $(this).serialize();
                $.post(
                    '<?php echo site_url("form_valid"); ?>',
                    donnees,
                    function (data) {
                        if(data=="Succes"){
                            $("#alertDiv").addClass('alert-success');
                            $("#resultatText").html("L'inscription a été effectué avec succès!");
                            $("#resultat").show();
                            $("#form_inscription")[0].reset();
                        }else{
                            $("#alertDiv").addClass('alert-danger');
                            $("#resultatText").html(data);
                            $("#resultat").show();
                        }
                    },
                    'text'
                    );
            });
        });
    </script>
</body>
</html>