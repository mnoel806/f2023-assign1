<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$symbols = array("ABDE", "APPL", "ATVI", "AMZN", "ADSK", "FB", "GOOGL","MSFT");
$names = ["Adobe Systems Inc." , "Apple Inc.", "Activistion Blizzard", 
"Amazon.com Inc.", "Autodesk Inc.", "Facebook Inc", 
"Alphabet Inc.", "Microsoft Corperation"];
$prices = [240.36, 218.32, 2321.23, 231.20, 122.09, 123.21, 543.66, 2123.05];
?>
    
<div class="grid-container">
<?
function outputStocks($symbols, $names, $prices) {
     for($i=0; $i < count($symbols); $i++) {
        echo "<div class='box'>";
        echo "<h2>$symbols[$i]</h2>";
        echo "<h3>$names[$i]</h3>";
        echo "<p>$prices[$i]</p>";
        echo "</div>";
     }   
    }
?>    

<div class="grid-container">
    <?php outputStocks($symbols, $names, $prices); ?>
</div>

</div>

<h1>Portfolio Overview</h1>
<div class="data">
    <?php 
        foreach($stocks as $s) {
            echo "$s . '<br'>";
        }
    ?>
    
</div>

<h1>Portfolio Overview2</h1>
<div class="data">
    <?php 
        sort($stocks);
        foreach($stocks as $s) {
            echo "$s . '<br'>";
        }
    ?>
    
</div>

<?php
class Stock {
    public $symbol;
    public $name;
    public $percent;
    public $value;

    function __construct($s, $n, $p, $v) {
        $this->symbol = $s;
        $this->name = $n;
        $this->percent = $p;
        $this->value = $v;    
    }
}

$foo = new Stock("AMZN", "Amazon.com Inc.", 25, 2313.22);

?>

<div class="data">
    <?php 
        echo "<h2>$foo->symbol</h2>";
        echo "<h3>$foo->name</h3>";
        echo "<p>$foo-percent% at $" . $foo->value . "</p>";
    ?>
</div>
<?php
function displayPostStatus() {
    if(isset($_POST['something']) && $_POST['something']!="") {
        echo "Your content was: " . $_POST["something"];
    }
    else {
        echo "No Post Detected";
    }
}



?>
<div id="messages">
    <?php displayPostStatus(); ?>
</div>


</body>
</html>