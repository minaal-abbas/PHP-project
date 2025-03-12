<?php 

require_once "vendor/autoload.php";

// App class location
use Syeda\Classproject\App;

// Create app from App class
$app = new App();
$site_name = $app -> site_name;

// Create data variables
$page_title = "Login";
// Loading the twig template

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig  = new \Twig\Environment($loader);
$template = $twig -> load('lopgin.twig');

// Render the output

//Add variables here
echo $template -> render( [
    'title' => $page_title, 
    'greeting' => $greeting,
    'website_name' => $site_name
]); 

?>