<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php $nom="Kateryna"; echo $nom; ?>!</h1>
    <h2>Exo-1</h2>
    <?php $nom="Juju"; echo $nom; ?>
    <h2>Exo-2</h2>
    <?php $name="Sasha"; $secondName="Butt"; $age=21;
    echo "Her name is $name $secondName and she is $age years old." ?>
    <h2>Exo-3</h2>
    <?php
      $km=1;
      echo $km."<br/>";
      $km=3;
      echo $km."<br/>";
      $km=125;
      echo $km."<br/>";
    ?>
    <h2>Exo-4</h2>
    <?php $someWords="Words"; $someNumbers=25; $someFN=1.23; $boo=FALSE; echo "we speak $someWords and substract $someNumbers from $someFN to see a $boo" ?>
    <h2>Exo-5</h2>
    <?php $someN=NULL; echo $someN;
            $someN=10; echo $someN; ?>
    <h2>Exo-6</h2>
    <?php $name="Fufu";
    echo "hello ". $name. " how are you?" ?>
    <h2>Exo-7</h2>
    <?php $name="Fufu"; $secondName="Tata"; $age=21;
    echo "hello ". $name. " ".$secondName.  " you are ".$age. " old." ?>
    <h2>Exo-8</h2>
    <?php $summ=3+4; $mult=5*20; $divid=45/5;
    echo $summ."<br/>". $mult."<br/>". $divid."<br/>";  ?>
    
  </body>

</html>
