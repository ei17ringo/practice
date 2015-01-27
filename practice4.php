<?php
    // $a, $bとして引数を受け取り、それを足し算する関数を定義して下さい
    function add($a = 1, $b = 1) {
        return $a + $b;
    }
    // 上記定義した関数を利用し、任意の足し算を行い、結果を$resultという変数に格納して下さい
	// 格納するデータの中身を適切に表現する変数名を付けること！
    //$result = add(3, 5);
    $result = add();
    
    var_dump($result);
?>