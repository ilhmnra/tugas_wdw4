<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konversi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body><div class="position-absolute top-50 start-50 translate-middle"><h1>
  <?php 
  if ($_GET["nilai"] >= 81 && $_GET["nilai"] <= 100)
  {echo "Nilai A";}
  elseif ($_GET["nilai"] >= 71 && $_GET["nilai"] <= 80)
  {echo "Nilai AB";}
  elseif ($_GET["nilai"] >= 66 && $_GET["nilai"] <= 70)
  {echo "Nilai B";}
  elseif ($_GET["nilai"] >= 60 && $_GET["nilai"] <= 65)
  {echo "Nilai BC";}
  elseif ($_GET["nilai"] >= 56 && $_GET["nilai"] <= 60)
  {echo "Nilai C";}
  elseif ($_GET["nilai"] >= 41 && $_GET["nilai"] <= 55)
  {echo "Nilai D";}
  elseif ($_GET["nilai"] >= 0 && $_GET["nilai"] <= 40)
  {echo "Nilai E";}
  else 
  {
    return 0;
  }
  ?>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
