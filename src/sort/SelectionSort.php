<?php

/**
 * 選択ソートで配列の値を並び替えるクラスです。
 */
class SelectionSort {

  /**
   * 配列の値を小さい順に並び替えた結果を返却します。
   */
  function sort($ary){
    // TODO 選択ソートで並び替える処理を実装してください。

    // ループ用の変数を用意
    $count = count($ary)-1;
    $j = 0;
    
    // 最小値を検索するための検索範囲を指定する
    $searchRange = array_slice($ary, $j);
    
    // 最小値の検索
    $min = array_search(min($searchRange), $ary);
    echo $min;
    
    // 検索した最小値が検索範囲内で最小の位置にないのであれば位置を交換する
    if($ary[$min] != $j){
      $temp = $ary[$min];
      $ary[$min] = $ary[$j];
      $ary[$j] = $temp;
    }

    // for($j = 0; $j < $count; $j++){
    
    // }

    return $ary;
  }

}