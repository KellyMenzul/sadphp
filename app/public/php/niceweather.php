<?php

//

//Super global list
// $_SERVER
// $_REQUEST
// $_GET
// $_POST

//Use super global variable to test for HTTP method
//GET or POST

// $_GET

//Determine the http method used by the client 
// $httpMethod =  = $_SERVER[?];

$httpMethod = $_SERVER['REQUEST_METHOD'];
if ($httpMethod == 'POST') {
    
    //else if Methos is post
    //retrun the specified message
    //echo
    echo "this is the POST method"
;
} else  if (httpMethodd == 'GET') 
    //if it is GET method
    //use a suitable one to get the 
    //parameters from the quest string

    //foreach()
    /*also test if the parameter exists
    //$returnMessage is an associative array that holdes the information
    $returnMessage["condition"] = //
    $returnMessage["temperature"] = //
    $returnMessage["location"] = //
    */
    
    if (isset($_GET"""]))
    {
        echo "hi";
    };

};
    
    // if(isset($_GET['users'])){
    //     if($_GET['users'] == 'all'){
    //       echo "SHOW YOU THE USERS!";
    //     }
    //   }else {
    //     echo "invalid request";
    //   }
  

   // foreach()

    //test for temperature and weather condition
    //and create the response JSON object
    //if  else  



// '{"message":"implemet the functions as instructed"}'

// }

//After determining the HTTP method, 


//Comment out this line when submit your assignment


// '{"message":"implemet the functions as instructed"}'

?>