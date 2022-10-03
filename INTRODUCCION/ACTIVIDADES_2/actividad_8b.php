<?php

$unix=1663365600;


function secondsToTime($inputSeconds)
{   $secondsInAMinute = 60;
    $secondsInAnHour = 60 * $secondsInAMinute;
    $secondsInADay = 24 * $secondsInAnHour;
    $secondsInAYear = 365 * $secondsInADay;

    //extract years
    $years = floor($inputSeconds / $secondsInAYear);
    $remaining = $inputSeconds % $secondsInAYear;

    // extract days 
    $days = floor($remaining / $secondsInADay);
    $remaining2 = $remaining % $secondsInADay;

    // extract hours
    $hours = floor ($remaining2 / $secondsInAnHour);
    $remaining3 = $remaining2 % $secondsInAnHour;
    
    // extract minutes 
    
    $minutes = floor($remaining3 / $secondsInAMinute);
    $seconds = $remaining3 % $secondsInAMinute;
    
    //  return the final array 

   $final = array(

   'y' => (int) $years,
   'd' => (int) $days, 
   'h' => (int) $hours, 
   'm' => (int) $minutes, 
   's' => (int) $seconds,

);

   return $final;
  
}



