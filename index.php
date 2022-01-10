<?php

$bienvenue = "Bienvenue !";
echo $bienvenue."<br>";

$array = ["Chien", "Chat", "Cheval", "Lapin"];
echo $array[1]."<br>";

for ($i = 0; $i <= 3; $i++){
    echo $array[$i]."<br>";
}
?>

<ul><?php foreach ($array as $all){echo "<li>$all</li>";} ?></ul>
