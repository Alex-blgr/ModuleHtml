<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" type="text/css" href="style.css"/>
    <title>Analyse</title>
  </head>
  
  <link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>


  <body>
    <div class="container"><!-- le container est un éléments globale qui souvent contient l'integralité du contenus -->
      <header>
        <div id="titre"> <!--Le header est un haut de page ce sont les premiers elements que l'utilisateurs voit en dehors des menus (nav) -->
          <h1 id="text" title="ceci est un titre!">Analyser !!!!</h1><!--Titre H1 (Le plus gros) -->
        </div>
          <p class="shadow">le temps d'y voir plus claire</p>
      </header>
      <section >
        <h2 class="boxed">regardons la structure</h2>
        <p>La Structure comporte plusieurs éléments html, que nous pouvons agencer comme nous le souhaitons.</p>
      </section>

      <section id="paralax">
        <h2>Et maintenant le css!</h2>
        <p>Si l'on regarde le css on découvre de nouvelle proprieté que l'on peut appliquer a nos éléments</p>
        <article>
          <img src="homer.jpeg">
          <figcaption>Ou punaise du CSS! </figcaption>
        </article>
      </section>
      <section id="You">
        <!-- ici vos éléments html -->
        <h2>Vous souhaitez rencontrer Homer ?</h2>
        <p>Pour tenter votre chance, merci de remplir le formulaire ci-dessous</p>
      
      
        <form action="resultat.php" method="post">
          <div>
              <label for="name">Nom :</label>
              <input type="text" id="name" name="user_name" maxlength="30">
          </div>
          <div>
            <label for="name">Prénom :</label>
            <input type="text" id="name" name="user_name" maxlength="30">
        </div>
          <div>
              <label for="mail">e-mail :</label>
              <input type="email" id="mail" name="user_mail" maxlength="40">
          </div>

          <div>
            <label class="perso" for="select_personnage">Choisissez votre personnage préferé :</label>

<select name="personnage" id="select_personnage">
    <option value="">--Choix personnage--</option>
    <option value="Homer">Homer</option>
    <option value="Marg">Marg</option>
    <option value="Bart">Bart</option>
    <option value="Liza">Liza</option>
    <option value="Mo">Mo</option>
</select>
          </div>
          <div>
              <label for="msg">Message :</label>
              <textarea id="msg" name="user_message"></textarea>
          </div>
          <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
      
      </form>
      </section>
    
    </div>
    


  </body>
</html>
