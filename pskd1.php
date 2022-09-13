<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        'a' => '~', 'b' => '*', 'c' => 'f', 'd' => 'w', 'e' => 'D',
        'f' => '@', 'g' => '(', 'h' => 'g', 'i' => 'R', 'j' => 's',
        'k' => '#', 'l' => ')', 'm' => 'j', 'n' => 'q', 'o' => '9' ,
        'p' => '$', 'q' => '_', 'r' => '.', 's' => 'U', 't' => '4',
        'u' => '%', 'v' => '+', 'w' => ',', 'x' => 'k', 'y' => '\\', 'z' => 'K',
        '1' => '^', '2' => '>', '3' => 'b', '4' => '4', '5' => 'V',
        '6' => '&', '7' => '<', '8' => 'c', '9' => 'z', '0' => '1',

    // $input = strtolower($input);
    );
    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang di enkripsi adalah = " , $input ;

    echo "<br><br>";
    echo "hasil enkripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>