<?php
if(isset($_POST["btn"]))
{
    if(($_POST["num1"]&&  ($_POST["num2"]>=$_POST["num1"]) && ($_POST["rang"] < ($_POST["num2"] + $_POST["num1"]))) != 0)
    {
        require("test.php");
    }
    else
    {
       print $_POS["di"] = "欄位不正確";
    }
}

?>

<!DOCTYPE html>
<html>
  
    <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form id="form1" name="form1" method="post">
            最小值:<input type="number" name="num1" id="num1"/>
            最大值:<input type="number" name="num2" id="num2">
            取:<input type="number" name="rang" id="rang">個值<br>
            <input type="submit" name="btn" id="btn" value="確定" /><br>
            <p id="di" name="di"></p>
        </font>
    </body>
</html>