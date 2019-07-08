<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Woody Widgets - ADMIN</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <div class="main-container">
      <header>
        <nav>
          <a href="index.php">Dashboard</a>
          <a href="../index.php">View Website</a>
          <div class="admin-box">
            <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
              <a href="index.php"><?= $_SESSION['username']; ?></a>
              <a href="helpers/logout.helper.php" id="logout">Logout</a>
            <?php endif; ?>
          </div>
          <!-- <input id="logout" type="submit" name="logout" value="Logout"> -->
        </nav>
      </header>

      <main>
          
