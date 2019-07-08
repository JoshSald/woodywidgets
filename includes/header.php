<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Woody Widgets</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main-container">
      <header>
        <nav>
          <?php foreach ($navlinks as $link): ?>
            <a href="<?= $link->link_id; ?>"><?= $link->headline; ?></a>
          <?php endforeach; ?>
          <a href="contact.php">Contact</a>
          <div class="admin-box">
            <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
              <a href="admin/index.php"><?= $_SESSION['username']; ?></a>
              <a href="helpers/logout.helper.php" id="logout">Logout</a>
            <?php endif; ?>
          </div>
        </nav>
      </header>

      <main>
        <div class="grid-container">
          <div class="col-1">
            <h1 id="brand">Woody Widgets</h1>
            <img id="logo" src="img/logo.gif" alt="logo.gif" />

            <h3>Connect With Us</h3>
            <a href="http://www.twitter.com/">Twitter</a>
            <br>
            <a href="http://www.facebook.com/">Facebook</a>
          </div>

          <div class="col-r">