<!DOCTYPE html>


<html lang="fr">


<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initiale-scale=1, shrink-to-fit=no">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <!-- <link rel="stylesheet" media="screen and (max-width: 575px)" href="mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 576px)" href="tablette.css">
    <link rel="styleshhet" media="screen and (min-width: 992px)" href="desktop.css"> 
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="assets/css/style.css"> -->


    <title>Jarditou</title>



</head>


<body>


    <div class='container-fluid'>

        <div class='row'>

            <div class="col-9"><img src="src/image/logo/jarditou_logo.jpg" class="img-fluid" alt="logo"></div>
            <div class='col-3'><h1>Tout le jardin</h1></div>

        </div>

        <div class='row'>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <div class="container-fluid">

                <a class="navbar-brand" href="/index.html">Jarditou.com</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="/index.html">Acceuil</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="/tableau.html">Tableau</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link active" aria-current="page" href="/contact.html">Contact</a>

                        </ul>

                        </li>

                    </ul>

                    <form class="d-flex" role="search">

                        <input class="form-control me-2" type="search" placeholder="Votre promotion" aria-label="Search">

                        <button class="btn btn-outline-success" type="submit">Rechercher</button>

                    </form>

                </div>

                </div>

            </nav>

        </div>

        <div class="container-fluid">

            <div class='col-12'>
                <img src="src/image/logo/promotion.jpg" class="img-fluid w-100" alt="promotion">
            </div>

        </div>

        <form action="monscript.php" method="post" id="formulaire_contact">

            <p>* Ces zones sont obligatoires</p>

            <h2>Vos coordonnées</h2>

            <fieldset>
                <br>
    
                <label for="nom">Votre nom* : </label><input type="text" name="nom" id="nom" required>
                <span id="missNom"></span>
                <br>
                <br>
                <label for="nom">Votre prénom* : </label><input type="text" name="prenom" id="prenom" required>
                <span id="missPrenom"></span>
                <br>
                <br>
                <label for="nom" required>Sexe* : </label><input type="radio" name="Sexe" value="Féminin"> Féminin
                                                <input type="radio" name="Sexe" Value="Masculin"> Masculin
                                                <br>
                                                <br>
                <label for="nom">Date de naissance* : </label><input type="date" name="ddn" id="date" required>
                <br>
                <br>
                <label for="nom">Code postal* : </label><input type="text" name="chiffre" id="CP" required>
                <span id="missCP"></span>
                <br>
                <br>
                <label for="nom">Adresse : </label><input type="text" name="adresse" id="adresse" required>
                <span id="missAdresse"></span>
                <br>
                <br>
                <label for="nom">Ville : </label><input type="text" name="ville" id="ville" required>
                <span id="missVille"></span>
                <br>
                <br>
                <label for="nom">Email* : </label><input type="text" name="email" placeholder="dave.loper@afpa.fr" id="email" required>
                <span id="missEmail"></span>
                <br>
                <br>
            
            
            </fieldset>
    
    
            <fieldset>
                
                
                <h2>Votre demande</h2>
                
                <label for="sujet">Sujet* : </label>
                <span id="missSujet"></span>
                <select id="sujet" required>
                    <option value="" selected>Veuillez selectionner un sujet</option>
                    <option value="Mes commandes">Mes commandes</option>
                    <option value="Question sur un produit">Question sur un produit</option>
                    <option value="Réclamation">Réclamation</option>
                    <option value="Autres">Autres</option>
                </select>
                <br>
                <br>
                
                <label for="nom">Votre question* : </label>
                
                <textarea id="Question1" name="Question1" Rows="2" cols="30" required></textarea><br>
            <br>
            <br>
            
            </fieldset>
    
    
            <input type="checkbox" name="text" value="text" required>*J'accepte le traitement informatique de ce formulaire
            <br>
            <br>
            <button type="submit" class="btn btn-dark" id="Bouton_envoi">Envoyer</button>
            <button type="reset" class="btn btn-dark">Annuler</button>
            <br>
            <br>
        
        </form>

    <div class='row'>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Mentions légales</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Horaire</a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Plan du site</a>

                    </li>

                </ul>

            </div>

            </div>

            </nav>

    </div>

</div>

<footer>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/assets/js/contact.js"></script>


</body>


</html>