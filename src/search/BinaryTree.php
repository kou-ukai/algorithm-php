<?php

/**
 * 二分木を用いて探索するクラスです。
 */
class BinaryTree {

  /**
   * 配列aryからsearchの位置を探索します。
   */
  function search($ary, $search){
  
    $min = 0;
    $high = count($ary) - 1;

    // print("search:". $search . "\n");

    $result = $this->binarySearch($ary, $search, $high, $min);

    return $result;
  }

  function binarySearch($ary, $search, $high, $min){
    $middle = floor(($high + $min) / 2);
    $val = $ary[$middle];

    // print("high:". $high . ", min:" . $min .", middle:" . $middle . "\n");
    if($val == $search){
      return $middle;
    }

    if($val < $search){
      $min = $middle + 1;
    }else{
      $high = $middle - 1;
    }

    return $this->binarySearch($ary, $search, $high, $min);
  }

}
