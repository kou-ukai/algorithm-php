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
    $count = count($ary);
    $loopCount = $count-1;
    
    for($j = 0; $j < $loopCount; $j++){
      
      // 検索範囲内で最小のキーの配列が最小の値を持つと仮定する
      $min = $ary[$j];
      
      for($k = $j + 1; $k < $count; $k++){
        
        // 現在$minに入っている値と比較対象の配列とで比較対象の方が小さければ$minの値を更新する
        if($min > $ary[$k]){
          $min = $ary[$k];
        }

      }

      echo array_search($min, $ary).".".$min."-".$j.".".$ary[$j];
      print("<br>");
      
      // 検索範囲内で抽出した最小値の配列の位置を取得
      $minNo = array_search($min, array_slice($ary, $j)) + $j;
      
      // 検索した最小値が検索範囲内で最小の位置にないのであれば位置を交換する
      if($min < $ary[$j]){
        $ary[$minNo] = $ary[$j];
        $ary[$j] = $min;
      }

      print_r($ary);
      print("<br>");

    }

    
    // 以下minを使用したソート
    // for($j = 0; $j < count($ary)-1; $j++){

    //   // 最小値を検索するための検索範囲を指定する
    //   $searchRange = array_slice($ary, $j);
      
    //   // 最小値の検索
    //   $min = array_search(min($searchRange), $searchRange) + $j;
      
    //   // 検索した最小値が検索範囲内で最小の位置にないのであれば位置を交換する
    //   if($ary[$min] < $ary[$j]){
    //     $temp = $ary[$min];
    //     $ary[$min] = $ary[$j];
    //     $ary[$j] = $temp;
    //   }

    // }

    return $ary;
  }

}