<!DOCTYPE html>
<html lang="FR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PLAY - Game DDE</title>
<link rel="stylesheet" href="css/style.css">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div id="gamecont" class="container gamecont">
  <div class="row bg1">
    <div class="col-sm-11">
<img src="img/hero.png"> <img class="monstre" src="img/monstre.png"> 
    </div>
    <form method="post" action="play.php">
    <div class="col-sm-1 margintop15">
    <p class="text-right"><a href="#"><input type="submit" name="submit" value="A"class="btn btn-primary edin"></button></a></p>
 

    </div>
  </div>
  <div class="row bg1"> 
    <div class="col-sm-1" >
    
    <p class="text-center"><a href="#"><input type="submit" name="submit" value="GO"class="btn btn-success edin"></button></a></p>
    </form>
    </div>
    <div class="col-sm-11 questions">
<p class="textalter">
<?php require_once ("questions.php") ?> 
<?php echo $displayquestions ?>
<p>
    </div>
  </div>
</div>
  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>