<?php
function printhoge()
{
    echo "hoge";
}
printhoge();

function printNum($num) 
{
    echo $num;
}
	
printNum(4);

function printKuku($num) {
    for ($i = 1; $i <= 9; $i++) {
        echo $num * $i;
	echo '<br>';
    }
}
	
printKuku(4);

function printIsEven($num) {
    if ($num % 2 === 0) {
        echo "偶数です";
    } else {
	echo "奇数です";
    }
}
	
printIsEven(3);

function printMessage($str, $count) {
    for ($i = 1; $i < $count; $i++) {
        echo $str;
        echo '<br>';
     }
}
	
printMessage("ABC", 3);

for($i =0; $i <= 3; $i++){
    echo 'Hello';
}




// function printMaxNum($num1, $num2) {
//     if ($num1 > $num2) {
//         echo $num1;
//     } elseif ($num1 < $num2) {
//         echo $num2;
//     } else {
//         echo '同じ';
//     }
// }
	
// printMaxNum(4, 5);

// function getSquared($num) {
//     return $num * $num;
// }
	
//     $result = getSquared(4);
//     echo $result;

//     function createSelfIntroductionText($name) {
//         $msg = '私の名前は' . $name . 'です';
//         return $msg;
//     }
        
//     $message = createSelfIntroductionText("NexSeed");
//     echo $message;

//     function isEvenNumber($num) {
//         if ($num % 2 == 0) {
//             return true;
//         } else {
//         return false;
//         }
//     }
        
//     $result = isEvenNumber(3);
//     var_dump($result);

//     function isSeedKun($str) {
//         if ($str == "SeedKun") {
//             return true;
//         } else {
//         return false;
//         }
//      }
        
//      $result = isSeedKun("SeedKun");
//     var_dump($result);






// クラスのオブジェクトの生成にはnewを使う
$robot = new Robot();

$robot->setName('ドラ·ザ·キッド');
$robot->setFood('ケチャップとマスタードをかけたどら焼き');
$robot->greeting();

echo '初期値の名前：' . $robot->getName() . '<br>';
echo '初期値の食べ物：' . $robot->getFood() . '<br>';

// プロパティの前にはpublicを使う
class Robot{
private $name;
private $food;
function __construct(){ 
    $this->name = 'ドラえもん';
    $this->food = 'ドラ焼き';
    }


// プロパティの値を設定するメソッド→セッター
// プロパティの値を取得するメソッド→ゲッター

public function setName($namae){
    $this->name = $namae;
}
public function getName(){
   return $this -> $namae;
}
public function setFood($tabemono){
    $this->food = $tabemono;
}
public function getFood(){
    return $this->food;
}
// メソッドの場合はfunction を使う
// thisの使用定義→疑似変数→　->　→アロー演算子、自分のクラスにアクセスするよ
private function talk(){
    echo 'こんにちわ、ボクの名前は' . $this->name . です;
}
private function eat(){
    echo '好きな食べ物は' . $this->food . です;
}
public function greeting(){
    $this->talk();
    $this->eat();
}
}

$kid = new Kid();
$kid->setName('しずか');
$kid->setSex('girl');

echo $kid->showName();

class Kid{
  private $name;
  private $sex;

  // コンストラクタ
  function __construct(){
    // 初期値の設定
    $this->name = 'Seed';
    $this->sex = 'boy';
  }

  public function getName(){
    return $this->name;
  }

  public function setName($namae){
    $this->name = $namae;
  }

  public function getSex(){
    return $this->sex;
  }

  public function setSex($seibetsu){
     $this->sex = $seibetsu;
   }

  // 性別によって名前の語尾を判定するメソッド
  public function showName(){
    if ($this->sex == 'boy') {
      return $this->name . 'くん';
    } else if($this->sex == 'girl') {
      return $this->name . 'ちゃん';
    } else {
      return $this->name .'の性別が不明です';
    }
  }
}

