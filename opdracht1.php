<?php
    $som=0;

for ($i = 0; $i< 1000;$i++)
{
    if ($i%3==0 || $i%5==0)
    {
        echo "deelbaar door 3 en/of 5: ";
        $som = $som + $i;
    }
    echo $i . "<br />";
}
echo "de som is: ".$som;
?>