<?php
function quick_sort($arr){

    

    $length=count($arr);

    if($length<=1){

		return $arr;
	}

    $base=$arr[0];
    
    $left_arr=array();

    $right_arr=[];

    for($i=1;$i<$length;$i++){

          if($arr[$i]<$base){

              $left_arr[]=$arr[$i];
   
          }else{

          	 $right_arr[]=$arr[$i];
          }

    }

    $left_arr=quick_sort($left_arr);

    $right_arr=quick_sort($right_arr);

    $last_arr=array_merge($left_arr,array($base),$right_arr);

    return $last_arr;
}
    

$arr=array(11,34,5,7,35,87);
echo '<pre>';
var_dump(quick_sort($arr));