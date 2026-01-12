<?php
= "Poumba c'est mon cochon et mon animal que je préfère.";

function leetspeak($str)
{
  $i=0;

    while (isset ($str[$i]))
{
      
    if ($str[$i] == 'A' OR $str[$i] == 'a') 
    {
       $str[$i] = 4;
    }
   
    elseif ($str[$i] == 'B' OR $str[$i] == 'b') 
    {
        $str[$i] = 8;
    }
    elseif ($str[$i] == 'E' OR $str[$i] == 'e') 
    {
         $str[$i] = 3;
    }
    elseif ($str[$i] == 'G' OR $str[$i] == 'g') 
    {
        $str[$i] = 6;
    }
    elseif ($str[$i] == 'L' OR $str[$i] == 'l') 
    {
        $str[$i] = 1;
    }
    elseif ($str[$i] == 'S' OR $str[$i] == 's') 
    {
         $str[$i] = 5;
    }
    elseif ($str[$i] == 'T' OR $str[$i] == 't') 
    {
         $str[$i] = 7;
    }
    
    $i++;
}
  return  $str;  

}

echo leetspeak($str);
  

?>