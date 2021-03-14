<?php
    $PervNumber = 1;
    $CurrNumber = 1;
    echo $CurrNumber;
    echo " ";
    WHILE ($CurrNumber < 50)
    {
        $temp = $CurrNumber;
        echo $CurrNumber;
        echo " ";
        $CurrNumber = $CurrNumber + $PervNumber;
        $PervNumber = $temp;
    }
    
    echo "/";
    $Numbers = ['1', '2', '3'];
    echo $Numbers[0];
    $Numbers[] = '4';
    echo "/";
    echo $Numbers[3];
    $Numbers[4] = '5';
    echo "/";
    echo $Numbers[4];
    $Numbers[5] = "Тут лежит текст";
    echo "/";
    echo $Numbers[5];
    $Numbers[6] = 1000;
    echo "/";
    echo $Numbers[6];
    
    echo "/";
    echo $Numbers[6];
   
    