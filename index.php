<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Жестокое обращение с животными</title>
</head>
<body>
<pre>
<?php
$doubleword = array();
$doubleword_one = array();
$doubleword_two = array();
$doubleword_continents = array();
$continents = array(
    "Africa" => array("Antelope", "Giraffe", "Elephant", "Black rhinoceros"),
    "North America" => array("Red lynx", "Bison", "Mountain goat", "Raccoon striped"),
    "South America" => array("Sloth", "Armadillo", "Marikina monkey", "Alpaca"),
    "Eurasia" => array("Red deer", "Panda", "Brown bear", "Lupus"),
    "Australia" => array("kangaroo", "Platypus", "Saltwater crocodile", "Koala"),
    "Antarctica" => array("Seal", "Sea leopard", "penguin", "Snow petrel"),
);
//каждый элемент массива continents представить в виде 2-х переменных, ключ-значение
foreach ($continents as $continent_name => $animals) {
    //print_r ($animals);
    foreach ($animals as $int => $animal) {
        //echo ($animal . "<br>");
        $words = explode(" ", $animal);
        //print_r ($words);
        if (count($words) > 1) {
            //echo ($animal . "<br>");
            array_push($doubleword, $animal); //добавить в массив
            array_push($doubleword_one, $words [0]);
            array_push($doubleword_two, $words [1]);
            $doubleword_continents[$continent_name]['word1'][]=$words [0];
            $doubleword_continents[$continent_name]['word2'][]=$words [1];
        }
    }
}
shuffle($doubleword_one);
shuffle($doubleword_two);

//isset - проверяет существование переменной
for ($i = 0; isset ($doubleword_one [$i]); $i++) {
    echo($doubleword_one [$i] . " " . $doubleword_two[$i] . "<br>");
}

foreach ($doubleword_continents as $continent_name=>$a_words){
    shuffle($doubleword_continents[$continent_name]['word1']);
    shuffle($doubleword_continents[$continent_name]['word2']);
    echo '<h2>'.$continent_name.'</h2>';
    $a_out = array();
    for ($i = 0; isset ($doubleword_continents[$continent_name]['word1'][$i]); $i++) {
        $a_out [] = $doubleword_continents[$continent_name]['word1'][$i] . " " . $doubleword_continents[$continent_name]['word2'][$i] ;
    }
    echo '<p>'.implode(', ',$a_out).'</p>';

}
?>
</pre>
</body>
</html>