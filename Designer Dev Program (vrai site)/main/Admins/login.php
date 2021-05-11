<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">

    <!--Style de Police-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body>






    <section id="title">
        <h1>Designer Dev Program <span class="point">.</span></h1>


        <nav>
            <ul>
                <li>Accueil</li>
                <li>Présentation</li>
                <li>Règles</li>
            </ul>
        </nav>
    </section>


    <?php

    if(isset($_POST['resolve2'])){
      $code = $_POST['code'];
    
      if($code2 == "DDPADMIN"){
    
        header('Location: ../nav/projet.html');
        
    }  
    
       
     }
    
    
    ?>
    
    
  <div class="div-co">


    <h1>Entrez le mot de passe pour accéder a la page administrateurs :</h1>



    <h2>Mot de passe:</h2>
    
    <form  method="POST">
    <input type="password" placeholder="Mot De Passe" name="code" pattern="[3-8]{5}" required>
    
    <button type="submit" name="resolve" >Confirmer</button>
    
    </form>
    </div>
    
    
    
    
    
    
    
    <footer>
        <h2>Designer Dev Program 2021 - &copy; Tout droits reserves</h2>

        <h3> <a href="views/index.html"> <span style="color: green;"> > </span> Accueil </a></h3>
        <h3> <a href=""> <span style="color: green;"> > </span> Présentation </a></h3>
        <h3> <a href="#"> <span style="color: green;"> > </span>  Règles </a></h3>
        <h3><a href="#"> <span style="color: green;"> > </span> Conditions d'utilisation</a></h3>
        <h3 style="position: relative; margin-left: 750px; margin-top: -76px;"><a href="https://discord.gg/cW5JQfrSkb"> <span style="color: green;"> > </span> Rejoindre</h3>
        <h3 style="position: relative; margin-left: 750px; margin-top: none;"><a href="Admins/login.html"> <span style="color: green;"> > </span> Admins</h3>


    </footer>
    
</body>
</html>



<style>


    .div-co {
        text-align: center;
        border: solid 3px gray;
        background-color: lavender;
    }


</style>