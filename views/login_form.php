<!DOCTYPE html>
<html>
  <head>
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="public/css/style_animals.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  <body>
    <h1>Bienvenue à la Clinique Vétérinaire SPA</h1>
    <h1>Connexion</h1>
    <?php
      if ($loginFailed) {
        echo "<p>Oups! Le nom d'utilisateur ou le mot de passe que vous avez entré est invalide.</p>";
      }
    ?>
    <form method="POST" action="?action=login">
      <p>
        <label for="username_input">Nom d'utilisateur:</label>
        <input type="text" name="username" id="username_input" required />
      </p>
      <p>
        <label for="username_input">Mot de passe:</label>
        <input type="password" name="password" id="password_input" required />
      </p>
      <p>
        <input classe='button1' type="submit" value="Valider" />
      </p>
         <a href="?action=register" class="button1">S'inscrire <i class='fas fa-user-alt'></i> </a>
      </p>  
    </form>
  </body>
</html>

