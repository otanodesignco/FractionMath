<?php
$NaN = "NaN";
//checks if a number is greater than another number by a certain amount
function greaterThanBy($origNum,$testNum,$diff)
{
//define globals
    global $NaN;
    
//check if all values are a number and if not return NaN
    if(!is_numeric($origNum) && !is_numeric($testNum) && !is_numeric($diff))
    {
//not numeric return error
        return $NaN;        
    }
    else
    {
// values are numeric return boolean
        if($origNum > $testNum || $origNum == $testNum)
        {
// original number is higher then the guessed number return false
            return false;
        }
        else
        {
//perfect conditions have been met set variable with value of difference of the two numbers   
            $difference = $testNum - $origNum;  
            if($difference != $diff)
            {
//number is not equal to the estimated number            
                return false;   
            }
            else
            {
// number is equal to the estimated difference      
                return true;    
            }
        }
    }
}
// evaluates if the number is less that the other by a set amount
function lessThanBy($origNum,$testNum,$diff)
{
    global $NaN;
    if(!is_numeric($origNum) && !is_numeric($testNum) && !is_numeric($diff))
    {
        return $NaN;    
    }
    else
    {
        if($origNum < $testNum || $origNum == $testNum)
        {
            return false;
        }
        else
        {
            $difference = $origNum - $testNum;  
            if($difference != $diff)
            {   
                return false;   
            }
            else
            {
                return true;    
            }
        }
    }
}
// checks if the number is between to other numbers
function numberIsBetween($startNum,$testNum,$endNum)
{
    global $NaN;
    if(!is_numeric($startNum) && !is_numeric($testNum) && !is_numeric($endNum))
    {      
        echo $NaN;  
    }
    else
    {
        if($testNum > $endNum || $testNum < $startNum)
        {      
            return false;   
        }
        else if($testNum == $startNum || $testNum == $endNum)
        {
            return false;
            
        }
        else
        {
            if($testNum > $startNum && $testNum < $endNum)
            {            
                return true;    
            }
            else
            {
                return false;   
            }
        }
    }
}
// returns the sum of an array of numbers
function sum($nums)
{
    $numArray = func_get_args();
    if(!is_array($numArray))
    {
        return 0;   
    }
    else
    {   
        return array_sum($numArray);    
    }
}
//returns the percent of a number
function percent($num,$den, $round = "true")
{
    if(!is_numeric($num) && !is_numeric($den))
    {      
        return 0;
    }
    else
    {   
        $per = ($num / $den) * 100; 
        if($round == "true" || strtolower($round) == "true")
        {
            return round($per); 
        }
        else
        {
            return floor($per); 
        }
    }
}
// get reverse percentage gets the number that would make blank percent from another number
function percentageOf($percent,$baseNum)
{
    if(!is_numeric($percent) || !is_numeric($baseNum))
    {      
        return 0;   
    }
    else
    {
        $num = ($percent / 100) * $baseNum; 
        if($round == "true" || strtolower($round) == "true")
        {
            return round($num); 
        }
        else
        {
            return floor($num); 
        }
    }
}
function ratio($k,$d,$round = "true")
{
    if(!is_numeric($k) && !is_numeric($d))
    {
        return 0;      
    }
    else
    {
        $ratio = $k / $d;   
        if($round == "true" || strtolower($round) == "true")
        {
            return round($ratio,2); 
        }
        else
        {
            return $ratio;  
        }
    }
}
function amountLessThan($firstNum,$secNum)
{
    if(!is_numeric($firstNum) && !is_numeric($secNum))
    {      
        return 0;   
    }
    else
    {
        if($firstNum <= $secNum)
        {      
            return 0;
        }
        else
        {   
            $diff = $firstNum - $secNum;    
            return $diff;
        }
    }
}
function amountGreaterThan($firstNum,$secNum)
{
    if(!is_numeric($firstNum) && !is_numeric($secNum))
    {
        return 0;   
    }
    else
    {
        if($firstNum >= $secNum)
        {      
            return 0;
        }
        else
        {         
            $diff = $secNum - $firstNum;
            return $diff;   
        }
    }
}
function percentToDecimal($per)
{
    if(!is_numeric($per))
    {
        return 0;   
    }
    else
    {
        $dec = $per / 100;
        return $dec;
    }   
}
function mixedNumberToImproperFraction($wholeNum,$num,$den,$decimal = 0)
{
    if(is_numeric($wholeNum) && !is_numeric($num) && !is_numeric($den))
    {
        return 0;
    }
    else
    {
        $imFrac = ($wholeNum * $den) + $num;
        if($decimal == 0)
        {
            $result = "$imFrac" . "/" . "$den";
            return $result;
        }
        else
        {
            return $imFrac / $den;  
        }
    }   
}
function improperFractionToMixedNumber($num,$den)
{
    if(!is_numeric($num) && !is_numeric($den))
    {
        return 0;
    }
    else
    {
        if($num < $den)
        {
            return 0;   
        }
        else
        {
            $wholeNum = floor($num / $den);
            $dem = $wholeNum * $den;
            $newNum = $num - $dem;
            $result = "$wholeNum" . " " . "$newNum" . "/" . "$den";
            return $result; 
        }   
    }
}
function decimalToPercent($dec)
{   
    if(!is_numeric($dec))
    {
        return 0;   
    }
    else
    {
        $per = $dec * 100;
        return $per;    
    }   
}
?>