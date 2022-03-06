<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // echo "Hello World";
    // $fruits = ["oran", "ban", "app"];
    // print_r($fruits) ;
    // echo '<pre>';
    // var_dump($fruits);
    // echo '</pre>';
    // $fruits[1]='man';
    //----------------- echo $fruits;
    // echo '<pre>';
    // var_dump($fruits);
    // echo '</pre>';
    // isset($fruits[3]);
    // $fruits[]='lichi';
    // echo '<pre>';
    // var_dump($fruits);
    // echo '</pre>';
    // echo count($fruits).'<br>';
    // array_push($fruits, 'foo');
    // echo count($fruits);
    // array_pop($fruits);
    // echo count($fruits);
    // array_unshift($fruits,'ppp');
    // echo '<pre>';
    // var_dump($fruits);
    // echo '</pre>';
    // echo array_shift($fruits);
    // $str = "ban,man,app";
    // var_dump(explode(",", $str));
    //  var_dump(implode("&", $fruits));
    //  var_dump(in_array("ban", $fruits));
    //  var_dump(array_search("ban", $fruits));
    //  var_dump(array_search("man", $fruits));
    // $veg = ["tom","pota"];
    // var_dump(array_merge($fruits,$veg));
    // var_dump([...$fruits, ...$veg]);
    // sort($veg);
    // var_dump($veg);

    // $per = [
    //     'name' => 'moon',
    //     'age' => '25',
    //     'location' => 'uttara'
    // ];
    // var_dump($per);
    // print_r($per);
    // $per['add'] = 'no';
    // var_dump($per['name']);
    // var_dump($per['add']);
    // print_r($per);

    // if(!isset($per['code']))
    // {
    //     $per['code'] = '1530';
    // }
    // print_r($per);
    // var_dump(array_keys($per));
    // var_dump(array_values($per));
    // ksort($per);
    // print_r($per);
    // asort($per);
    // print_r($per);
    //   $age = 0;
    //   if($age === 20) echo "1";
    // if($age > 20) echo "1";
    // else echo "2";
    // echo $age < 22 ? 'yung' : 'old';
    // $age = $age ?: 18;
    // var_dump($age);

    // $user = "moon";
    // switch($user){
    //     case 'moon':
    //         echo 'moon';
    //         break;
    //     case 'rat':
    //         echo 'rat';
    //         break;
    //     default:
    //         echo 'invalid';
    // }

    // $fruits = ["oran", "ban", "app"];
    // foreach($fruits as $fruit){
    //     echo $fruit." ";
    // }
    // foreach($fruits as $i=> $fruit){
    //     echo $i.' '.$fruit.'<br>';
    // }


    // $per = [
    //     'name' => 'moon',
    //     'age' => '25',
    //     'location' => 'uttara'
    // ];
    // foreach($per as $key => $value){
    //     echo $key.' '.$value.'<br>';
    // }

    // function hello(){
    //     echo "hi";
    // }
    // hello();

    // function hello($name){
    //     echo "hi ".$name;
    // }
    // hello('moon');

    // function hello($name){
    //     return "hi ".$name;
    // }
    // echo hello('moon');
    // function sum($a, $b){
    //     return $a+$b;
    // }
    // echo sum(5,6);

    // function sum(...$nums){
    //     echo var_dump($nums);
    // }
    // echo sum(3,4,5,6);


    // function sum(...$nums){
    //     $sum=0;
    //     foreach($nums as $num)
    //     {
    //         $sum+=$num;

    //     }
    //     return $sum;

    // }
    // echo sum(3,4,5,6);
    // echo sum(1,1,1,1,1,1,1);

    // function sum(...$nums){
        
    //     return array_reduce($nums, fn($carry, $n)=>$carry+$n);

    // }
    // echo sum(3,4,5,6);
    // echo sum(1,1,1,1,1,1,1);
// ----------------------------date----------------------//
        // echo date('Y-m-d H:i:s');

// include"math.php";
// require"math.php";
// include_once"math.php";
// echo add(3,4);
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
// echo __LINE__.'<br>';
// mkdir('test');
// rename('test','test2');
// rmdir('test2');
// echo file_get_contents('lorem.txt');
// $files = scandir('../');
// echo '<pre>';
// var_dump($files);
// echo '</pre>';
// echo file_put_contents('some.txt', 'hello everyone!!!!');
// echo file_exists('samp.txt');


class person{
    public $name;
    public $surname;
    private $age;

    // public function --construct($name,$surname){

    // }
}
$p = new person();
// var_dump($p);
$p->name='moon';
$p-> $surname= 'nai';
echo '<pre>';
var_dump($p);
echo '</pre>';

?>

</h2>
</body>
</html>