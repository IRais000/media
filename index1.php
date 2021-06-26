<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Josefin+Sans:ital,wght@1,300&family=Rajdhani:wght@400;500&family=Saira+Condensed:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="inscription.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/shortcuts/inview.min.js"></script>
  <script src="https://kit.fontawesome.com/318499f088.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <div class="header__navbar">
            <div class="header__navbar__logo">
                <h1 class="header__navbar__logo__title">e-Learning EMI</h1>
            </div>
            <div class="header__navbar__menu" id="nav">
                <a href="" class="header__navbar__menu__link">About e-Learning Emi</a>
                <a href="" class="header__navbar__menu__link">Ecole</a>
                <a href="" class="header__navbar__menu__link">Services</a>
                <a href="" class="header__navbar__menu__link">Se connecter</a>
            </div>
        </div>
    </div>

    <section class="Se_Connecter">
        <div class="Connect-heading">
            <h1>Inscription</h1>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="pseudo" placeholder="Your full name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <input type="text" name="password" placeholder="Your password"/>
            <input type="email" name="retype-password" placeholder="Retype your password"/>
            <button class="connect-btn" type="submit">Inscription</button>
        </form>
    </section>
    <script src="inscription.js"></script>
</body>