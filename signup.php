<?php 

require_once "vendor/autoload.php";

// App class location
use Syeda\Classproject\App;
use Syeda\Classproject\Account;

// Create app from App class
$app = new App();
$site_name = $app -> site_name;

// Create data variables
$page_title = "Sign Up";
// Loading the twig template

// Checking for form submmission via POST
if($_SERVER['REQUEST_METHOD'] == "POST"){
    echo "Post request received.";
    // Store email in a variable
    $email = $_POST['email'];
    // Store password in a variable
    $password = $_POST['password'];

    // Add account variable
    $account = new Account();

    // Call the create method from Account
    $account -> create($email, $password); 
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig  = new \Twig\Environment($loader);
$template = $twig -> load('signup.twig');

// Render the output

//Add variables here
echo $template -> render( [
    'title' => $page_title,
    'website_name' => $site_name
]); 
?>