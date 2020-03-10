<?php
    require("fruit.php");
    require("peach.php");
    require("strawberry.php");

    class Calculation{
        public function getPrice($info){

            $fruit = $info;


            for ($i=0;$i<15;$i++){
                $prices[]=random_int($fruit->minPrice,$fruit->maxPrice);
            }
    
            echo $fruit->name."の最高値は".max($prices)."です、"."\n"; 
            echo $fruit->name."の最安値は".min($prices)."です。"."\n"; 
    
            $i = 0;
        
           foreach ($prices as $price){
        
               $i += $price;
           }
           echo "合計".$i."円です。"."\n";
    
           $ave = $i/$fruit->count;
           echo $fruit->name."の平均価格は".round($ave)."円です。"."\n";
        }
    }

?>