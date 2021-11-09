<?php

global $message;

// a. Determine the HTTP method used. (5 points)
$method = $_SERVER['REQUEST_METHOD'];

// b-i. Use a suitable super global variable to find these parameters:
// <temperature>, <location>, and <condition>. (4 points)
$location = htmlentities($_GET['location']);
$temp = htmlentities($_GET['temp']);
$condition = htmlentities($_GET['condition']);

// b. If the method is GET
// iii. Add an element to the JSON object called “message”. 
// Set the value of this element following these rules: (3 points)
if ($method === 'GET') {
    // 1. If temp is < 16 and condition is raining, 
    //    set message as “<location> is really cold and wet!”
    if ((int)$temp < 16 && $condition == "raining") {
        $message = $location . " is really cold and wet!";

    // 2. If temp is < 16 and condition is sunny, set message as 
    //  “<location> is really cold but dry!”
    } else if ((int)$temp < 16 && $condition == "sunny") {
        $message = $location . " is really cold but dry!";
    }
    // 3. If temp is >=16 but <=29 and condition is raining, set message as 
    // “Too bad it’s raining in <location>!”
    else if ((int)$temp >= 16 && (int)$temp <= 29 && $condition == "raining") {
        $message = "too bad it's raining in " . $location . "!";
    }
    // 4. If temp is >= 16 and condition is sunny, set message as “What a nice day in <location>”
    else if ((int)$temp >= 16 && $condition == "sunny") {
        $message = "What a nice day in " . $location;
    }
    // 5. Otherwise set it to “Have a nice day!”
    else {
        $message = 'Have a nice day!';
    };
}
// c. For any HTTP methods other than GET, return a properly JSON formatted string with a message element: 
// “This method is not supported” (2 points)
else {
    $message = 'This method is not supported';
};

//b-ii. Assemble this information into a JSON object. (2 points)
$myObj = new stdClass();
$myObj->message = $message;
$myJSON = json_encode($myObj);
echo $myJSON;

?>