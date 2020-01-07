<!doctype html>
  <head>
    <meta charset="utf-8">

    <title>NEO Administration</title>

  

    <!-- Bootstrap core CSS -->
    <link href="assets/styles/css/bootstrap.css" rel="stylesheet" >

    <!-- Favicons 
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">-->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/styles/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
  <img class="mb-4" src="assets/img/logo.jpg" alt="" width="72" height="72">
  <?php
  
      if(!empty($_POST['mail']) && !empty($_POST['mdp'])) {
          echo 'Veuillez remplir les champs';
      }

  ?>
  <!--<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>-->
  <label for="inputEmail" class="sr-only">Adresse mail</label>
  <input type="email" id="inputEmail" class="form-control" name="mail" placeholder="Adresse mail" required autofocus>
  <label for="inputPassword" class="sr-only">Mot de passe</label>
  <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Mot de passe" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Se souvenir de moi
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
 <!--<p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>-->
</form>
</body>
</html>
