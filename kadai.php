<?php
//引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function product($max){

    $result = 0;
    for($i = 1; $i <= $max; $i++){ 
        $result = $i*2;
    }
  return $result;
  }
  echo product(100);
?>
<?php
//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
    return $a + $b;
}
echo add($a, $b);
?>
<?php
//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$array = array(1,3,5,7,9);
$all=array_product($array);
echo $all
//問題４はわかりませんでした
//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
?>
<?php
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
echo strip_tags($text, '<p><a>');

?>
<?php
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
<?php
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
?>
<?php
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
?>
<?php
// Wednesday the 15th のように出力
echo date('l \t\h\e jS');
?>