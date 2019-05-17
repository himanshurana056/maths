<?php

  class Number  
  {
    public function sum($first_number, $second_number){

        $sum = $first_number + $second_number;
        echo ($sum);
    }
    public function sub($first_number,$second_number){
       
        $sub = $first_number -  $second_number;
        print ($sub);
    }
    public function mul($first_number,$second_number){
        
        $mul = $first_number *  $second_number;
        print ($mul);
    }
  
    public function div($first_number,$second_number){
        
      $div = $first_number / $second_number;
      print ($div);
  }
  
  
 }

