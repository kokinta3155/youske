<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php
class Food {
  private $name;
  private $price;
  public function __construct(string $name, int $price) {
    $this->name = $name;
    $this->price =$price;
}   
    
    public function show_price() {
    $price = '250';
    echo $price.'<br>';
    }
}
    $food = new food('potato', 250);
    print_r($food);
    echo '<br>';
  
class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height ,int $weight) {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }     

    public function show_height() {
    $height = '60';
    echo $height.'<br>';
    
    }

}

$animal= new animal('dog', 60, 5000);
print_r($animal);
echo  '<br>';

$food->show_price();
$animal->show_height();
?>

     </p>
 </body>
 
 </html>