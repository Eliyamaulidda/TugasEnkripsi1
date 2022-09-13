<?php
function enkripsi(){
    $input=$_POST["input"];

    $key = array(
        '~' => 'a', '*' => 'b', 'f' => 'c', 'w' => 'd', 'D' => 'e',
        '@' => 'f', '(' => 'g', 'g' => 'h', 'R' => 'i', 's' => 'j',
        '#' => 'k', ')' => 'l', 'j' => 'm', 'q' => 'n', '9' => 'o',
        '$' => 'p', '_' => 'q', '.' => 'r', 'U' => 's', '4' => 't',
        '%' => 'u', '+' => 'v', ',' => 'w', 'k' => 'x', '\\' => 'y', 'K'  =>'z',
        '^' => '1', '>' => '2', 'b' => '3', '4' => '4', 'v '=> '5',
        '&' => '6', '<' => '7', 'c' => '8', 'z' => '9', '1' => '0',

        
    // $input = strtolower($input);
    );
    $enkripsi = str_replace(array_keys($key), $key, $input);

    echo "kata yang akan di enkripsi adalah = " , $input;

    echo "<br><br>";
    echo "hasil deskripsi adalah = " , $enkripsi;

};
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
        {
            enkripsi();
        }
?>