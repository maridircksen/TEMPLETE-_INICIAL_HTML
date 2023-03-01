<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
         //A       
         $x =6;
         $y = 2;
         
         echo '<div>' .($x+$y). '</div>';
         echo '<div>' .($x-$y). '</div>';
         echo '<div>' .($x*$y). '</div>';
         echo '<div>' .($x/$y). '</div>';
         
         //B
         echo '<br/>';
         $nome = 'Mariana';
         $sobrenome = 'Dircksen';
         
         echo '<div>'.$nome,' ',$sobrenome.'</div>';
         
         //C
         echo '<br/>';
         const V_PI = 3.14;
         
         $raio = 2.13;
         $a =  V_PI* ($raio*$raio);
         
         echo '<div>'.$a.'</div.';
     
        //D
         echo '<br/>';
         $carteira = 150;
         $salario = 1500;
         $salario += $carteira;
         
         echo '<div>'.$salario.'</div>';
         
        //E
         $idade = 20;
         $idade ++;
         $idade ++;
         
         echo '<div>'.$idade.'</div>';
         
         //F
         
          $p_nomes = [
              'Goku', 
              'Nami',
              'Frezza',
              'Luffy'
              ];
         
           echo '<pre>';
           var_dump($p_nomes);
          echo '</pre>';
          
          echo $p_nomes[0]; 
          
          $p_nomes[4] = 'Bills';
          
          echo '<pre>';
           var_dump($p_nomes);
          echo '</pre>';
          
          echo $p_nomes[4];
          
          
        ?>
    </body>
</html>