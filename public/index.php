<?php

require "../vendor/autoload.php";

//$destinations = array('Marrakech' => "/assets/images/marrakech.jpg", 'Malaga' => "/assets/images/malaga.jpg", 'Agadir' => "/assets/images/agadir.jpg", 'SFL' => "/assets/images/sfl.jpg", 'Tanger' => "/assets/images/tanger.jpg");


/*'destinations'=> array(
    array('city' => 'Marrakech', 'photo' => "/assets/images/marrakech.jpg"),
    array('city' => 'Malaga', 'photo' => "/assets/images/malaga.jpg"),
    array('city' => 'Agadir', 'photo' => "/assets/images/agadir.HEIC"),
    array('city' => 'SFL', 'photo' => "/assets/images/sfl.jpg"),
    array('city' => 'Tanger', 'photo' => "/assets/images/tanger.jpg")
);*/

$loader = new Twig\Loader\FilesystemLoader(__DIR__. '/../src/View');

$twig = new Twig\Environment($loader);

echo $twig->render('index.html.twig', array (
    'destinations'=> array(
        array('city' => 'Marrakech', 'photo' => "/assets/images/marrakech.jpg"),
        array('city' => 'Malaga', 'photo' => "/assets/images/malaga.jpg"),
        array('city' => 'Agadir', 'photo' => "/assets/images/agadir.jpg"),
        array('city' => 'SFL', 'photo' => "/assets/images/sfl.jpg"),
        array('city' => 'Tanger', 'photo' => "/assets/images/tanger.jpg")
    )
));


