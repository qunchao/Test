<?php

    //循环输出1-100

    for ($i=1; $i < 100; $i++) {
        //判断是否能被3整出
        if($i%3 == 0){
            echo "triple";
        //判断是否能被5整出
        }elseif($i%5 == 0){
            echo "five";
            //判断是否能被3整出和判断是否能被5整出
        }elseif($i%3 == 0 && $i%5 == 0){
            echo "triplefiver";
            //如果都不是，输出这个数
        }else{
            echo $i;
        }

    }
