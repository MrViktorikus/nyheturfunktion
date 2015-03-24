<?php 
  
 header('Content-Type: text/html; charset=utf-8'); 
  
 /** 
  * Function getFood returns a string containing the food for the day specified- 
  * in the variables. 
  *  
  * @param type $week   
  * 0 = This week 
  * 1 = Next week 
  *  
  * @param type $day 
  * 0 = Monday 
  * 1 = Tuesday 
  * 2 = Wednesday 
  * 3 = Thursday 
  * 4 = Friday 
  *  
  * @param type $food 
  * 0 = First 
  * 1 = Second 
  * 2 = Third 
  *  
  * @return type String 
  */ 
 function getJson() { 
     if (!file_exists('cache')) { 
         mkdir('cache'); 
     } 
     $cacheFile = 'cache' . DIRECTORY_SEPARATOR . md5("Text"); 
  
     if (file_exists($cacheFile)) { 
         $fh = fopen($cacheFile, 'r'); 
         $cacheTime = trim(fgets($fh)); 
  
         if ($cacheTime > strtotime('-60 minutes')) { 
             return fread($fh, filesize($cacheFile)); 
         } 
         fclose($fh); 
         unlink($cacheFile); 
     } 
  
     $json = file_get_contents("http://meny.dinskolmat.se/berzeliusskolan/?fmt=json"); 
  
     $fh = fopen($cacheFile, 'w'); 
     fwrite($fh, time() . "\n"); 
     fwrite($fh, $json); 
     fclose($fh); 
  
     return $json; 
 } 
  
 function getFood($week, $day, $food) { 
     $data = json_decode(getJson(), true); 
  
     if (!isset($data['weeks'][$week]['days'][$day]['items'][$food])) { 
         return ""; 
     } else { 
         return $data['weeks'][$week]['days'][$day]['items'][$food]; 
     } 
 } 


