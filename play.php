<!DOCTYPE html>
<html lang="FR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PLAY - Game DDE</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    img {height:200px; padding-bottom:25px;margin-left:100px;
    
    
        -webkit-animation: mover 2s infinite  alternate;
    animation: mover 2s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.monstre {  margin-left:-70px;  
    
    -webkit-animation: mover 0.4s infinite  alternate;
animation: mover 0.2s infinite  alternate;
}
@-webkit-keyframes mover {
0% { transform: translateX(0px); }
100% { transform: translateX(-200px); }

}
@keyframes mover {

0% { transform: translateX(20px); }
100% { transform: translateX(-20px); }
}

#gamecont.container.gamecont {margin-top:50px;}
.textalter{margin-top:8px;};


</style>



</head>
<body>
<div id="gamecont" class="container gamecont">
  <div class="row" style="background: #dddddd54;">
    <div class="col-sm-11">
<img src="img/hero.png"> <img class="monstre" src="img/monstre.png"> 
    </div>
    <div class="col-sm-1" style="margin-top:16px;">
    <p class="text-right"><a href="#"><button type="button" class="btn btn-primary edin">A</button></a></p>
    <p class="text-right"><a href="#"><button type="button" class="btn btn-danger edin">B</button></a></p>
    <p class="text-right"><a href="#"><button type="button" class="btn btn-success edin">C</button></a></p>
    <p class="text-right"><a href="#"><button type="button" class="btn btn-success info">D</button></a></p>

    </div>
  </div>
  <div class="row" style="background: #dddddd54;"> 
    <div class="col-sm-1" >
    <p class="text-center"><a href="#"><button type="button" class="btn btn-success edin">GO</button></a></p>
    </div>
    <div class="col-sm-11" style="height: 36px;
background: #dddddd54;">
<p class="textalter">Exemple de texte a mettre <p>
    </div>
  </div>
</div>




    
  





  <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>