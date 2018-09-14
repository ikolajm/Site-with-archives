<!DOCTYPE html>
<html>
  <head>
  <meta lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0" />

  <!--GOOGLE FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat" rel="stylesheet">

  <!--FONTAWESOME-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
  integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!--BOOTSTRAP CSS-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <!--MY CSS-->
  <link rel="stylesheet" href="css/styles.css" type="text/css">

  <!--Tab Icon-->
  <link rel="icon" href="img/small logo.png">

  <!--Page Title-->
  <title><?php echo $pageTitle; ?></title>

  </head>

  <body>
    <main>

      <header>

        <div class="container hc-container">

          <!--Hamburger Menu-->
          <div class="menu2x" onclick="menu2xslideout()">
            <div class="bar1 1slide"></div>
            <div class="bar2 2slide"></div>
            <div class="bar3 3slide"></div>
          </div>

          <nav>

            <div class="nav-header">

              <div class="small-logo-contain">
                <a href="index.php"><img src="img/small logo.png" /></a>
              </div>

              <div class="x-container" onclick="menu2hidden()">
                <div class="x1"></div>
                <div class="x2"></div>
              </div>

            </div>

            <!--Navigation links - add "on" to those whos section is active-->
            <a href="index.php" class="home
            <?php if ($section == "home") {echo "on";} ?>
            ">Home</a>

            <a href="categories.php" class="categories
            <?php if ($section == "categories") {echo "on";} ?>
            ">Categories</a>

            <a href="archives.php" class="archive
            <?php if ($section == "archives") {echo "on";} ?>
            ">Archive</a>

            <a href="about.php" class="about
            <?php if ($section == "about") {echo "on";} ?>
            ">About</a>

          </nav>

          <div class="logo-container">
            <a href="index.php"><img src="img/logo.png" alt="fake website logo" /></a>
          </div>

        </div>

      </header>
