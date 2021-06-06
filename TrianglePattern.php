<?php
for($i=5;$i>0;$i--)
{
    for($j=0;$j<5;$j++)
    {
        if($j+1<$i)
        {
            echo "&nbsp;&nbsp;";
        }else
        {
            echo "* ";
        }
    }
    echo "<br>";
}
?>