<!DOCTYPE html>
<html lang = en>
    <head>
        <meta charset="UTF-8">
        <title>Birthday</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>

    <h1>PLATET Thibaut</h1>
    <h3>Date : 19/04/2024 à 21h</h3>
    <h3>Thème : "Tapis rouge"</h3>   
    <button onclick="displayExplanations()">En savoir plus</button>
    <p id="paragraphe">Il s'agit d'une fête en mon honneur, je remercie d'avance la commune de Chambord qui nous a gentillement cédé ce bien"</p>

    <div onclick="displayExplanations()">
    <script> 
        function displayExplanations()
        {
          
            document.getElementById("paragraphe").style.display = 'block';
        } 
    </script>
    </div>
    
    <h3>Mystère... Cliquez sur le lien !</h3>
    <h3>Voici le lien de la salle !</h3>

    <a href="https://www.chambord.org/fr">Lien</a>

    <form action="register.php" method="post">
        <label>Nom</label>
        <input name="nom" id="nom" type="text" />
     
        <label>Nombre</label>
        <input name="nombre" id="nombre" type="number" /></p>
     
        <button id= "bouttonmystere" type="submit">Valider</button>
     </form>

     <h2>Total Guests: <?php include 'count_guests.php';?></h2>
    
</body>
</html>