<?php 

require_once "vendor/autoload.php";

// App class location
use Syeda\Classproject\App;

// Create app from App class
$app = new App();
$site_name = $app -> site_name;

// Create data variables
$page_title = "Class Project Home Page";
$greeting = "Welcome to my Website!";
// Loading the twig template

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig  = new \Twig\Environment($loader);
$template = $twig -> load('page.twig');

// Render the output

//Add variables here
echo $template -> render( [
    'title' => $page_title, 
    'greeting' => $greeting,
    'website_name' => $site_name
]); 







// --------- Week 1 -------------
//include "header.php";
// echo "<h1 style='color:purple; font-family: Inter, sans-serif'>Hello World</h1>";
// include "footer.php";
?>