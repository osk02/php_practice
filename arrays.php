<?php

// Indexed Array
echo "<b>Indexed Array</b> <br>";
$indexedCarsArray = array("Ford Mustang", "Porsche 911", "Toyota Supra");
for ($i = 0; $i < sizeof($indexedCarsArray); $i++) {
    print("$indexedCarsArray[$i] <br>");
}

// Associative Array
// Similar to Python Dictionary -> Stores data in key-value pair format
echo "<br> <b>Associative Array</b> <br>";
$associativeCarsArray = array("brand" => "Ford", "model" => "Mustang", "year" => "1969");
foreach($associativeCarsArray as $key => $value) {
    print("$key: $value <br>");
}