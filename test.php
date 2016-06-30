<?php
    function arr($n1,$n2,$rang)
    {
        for($i=$n1;$i<=$n2;$i++)
        {
                $ar[$i] = $i ;
        }
       getnumber($ar,$n1,$n2,$rang);
    }


    function getnumber($art,$nu1,$nu2,$rang)
    {
       while($i<$rang)
       {
            $result = rand($nu1,$nu2);
            if($art[$result] != null)
            {
                $str .=$art[$result].".";
                $art[$result] = null;
                $i ++;
            }
       }
            echo $str;
            return;
    }

arr($_POST["num1"],$_POST["num2"],$_POST["rang"]);
?>