<?php 

    //$nombre=5;
    //$nombre= 'pedro perez';

    //echo($nombre);

    $producto1='carne';
    $producto2='arroz';
    $producto3='manzana';
    $producto4='huevos';
    $producto5='leche';
    $producto6='cafe';
    $producto7='chocolate';
    $producto8='papa';
    $producto9='quesito';
    $producto10='frijoles';

    $precio1='22000';
    $precio2='5000';
    $precio3='6000';
    $precio4='1500';
    $precio5='11000';
    $precio6='7500';
    $precio7='7500';
    $precio8='5000';
    $precio9='8000';
    $precio10='7000';

    $total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;
  //  $total=500;
  //  $total=1000000;
    //$producto8='bananos';
    switch($producto3)
    {
        case 'manzana':
            echo('tienes descuentos del 10%');
        break;

        case 'bananos':
            echo('tienes un descuento del 5%');
        break;

        default :
            echo('no hay descuento');
        break;
    }

   /* if($total<=80000)
    {
        echo('Muchas gracias por su compra');
    }
    else
    {
        echo('mijo tiene que ir por mas palta');
    }
    */
    //echo('El total es: '.$total);

?>