<?php
require __DIR__.'/vendor/autoload.php';
include './packages/vegetable/src/Vegetable.php';
include './packages/spinach/src/Spinach.php';

use Monorepo\Vegetable\Vegetable;
use Monorepo\Spinach\Spinach;


$hello = '<h1>I am a monorepo app!</h1>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monorepo test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/accordion.css"
          integrity="sha256-KLbSEFogOrf7R7tw47VrLajKhDyN3zBG5dnV0Elmlx0=" crossorigin="anonymous"/>
</head>

<style>
    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: #e7e7e7;
    }
</style>

<body>
<?php echo '<h1>Hello World!</h1>'; ?>
<pre>
<?php
$veggie = new Vegetable(false, "blue");
$leafy = new Spinach();

// print out information about objects
print_r($veggie);
echo "\n\n";
print_r($leafy);
echo "\n\n";
$leafy->cook_it();
echo "After cooking: \n\n";
print_r($leafy);

// $test = "YES";

// echo $test == true ? 'Yes' : 'No';
?>
</pre>
</body>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="semantic/dist/semantic.min.js"></script>

</html>