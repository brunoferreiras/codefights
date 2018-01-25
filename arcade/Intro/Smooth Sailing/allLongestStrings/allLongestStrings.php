<?php 

function allLongestStrings($inputArray) {
    $longestNumber = 0;
    $result = [];
    foreach($inputArray as $value) {
        if(strlen($value) > $longestNumber) {
            $longestNumber = strlen($value);
        }
    }
    
    foreach($inputArray as $value) {
        if(strlen($value) == $longestNumber) {
            $result[] = $value;
        }
    }
    return $result;
}
