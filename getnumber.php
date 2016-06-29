<?php 
function arr(){
    for($i=0;$i<48;$i++)
    {
            $ar[$i] = $i + 1;
    }
   getnumber($ar);
}
function getnumber($art){
   while($i<6)
   {
        $result = rand(0,48);
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
arr();
?>