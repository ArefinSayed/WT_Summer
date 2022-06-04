<?php
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
      
        if(strlen(($_REQUEST["fname"])&&($_REQUEST["lname"]))>4)
        {
            echo "Your name should not less than 4 characters";
        }
        else
        {
            echo "Your name is ".$name." ".$name1;
        }
         
         
        

        if(isset($_REQUEST["designation"]))
        {
            $designation=$_REQUEST["designation"];
            echo"<br>Your designation is ".$designation;
        }
        else
        {
            echo"<br>You should select a designation.";
        }


        if(isset($_REQUEST["1stlanguage"])||($_REQUEST["2ndlanguage"])||($_REQUEST["3rdlanguage"]))
        
        {
            if(isset($_REQUEST["1stlanguage"])&&isset($_REQUEST["2ndlanguage"])&&isset($_REQUEST["3rdlanguage"]))
        {
            echo"<br>You have select all language ".$_REQUEST["1stlanguage"]." , ".$_REQUEST["2ndlanguage"]." and ".$_REQUEST["3rdlanguage"];
        }
        else if (isset($_REQUEST["1stlanguage"])&&isset($_REQUEST["2ndlanguage"]))
        {
            echo"<br>You have select both ".$_REQUEST["1stlanguage"]." and ".$_REQUEST["2ndlanguage"];
        }
        else if (isset($_REQUEST["1stlanguage"])&&isset($_REQUEST["3rdlanguage"]))
        {
            echo"<br>You have select both ".$_REQUEST["1stlanguage"]." and ".$_REQUEST["3rdlanguage"];
        }
        else if (isset($_REQUEST["2ndlanguage"])&&isset($_REQUEST["3rdlanguage"]))
        {
            echo"<br>You have select both ".$_REQUEST["2ndlanguage"]." and ".$_REQUEST["3rdlanguage"];
        }
        else if (isset($_REQUEST["1stlanguage"]))
        {
            echo"<br>You have select ".$_REQUEST["1stlanguage"];
        }
        else if (isset($_REQUEST["2ndlanguage"]))
        {
            echo"<br>You have select ".$_REQUEST["2ndlanguage"];
        }
    
        else 
        {
            echo"<br>You have select ".$_REQUEST["3rdlanguage"];
        }
        }
        else
        {
            echo "<br>Select a language.";
        }
        
    $email=$_REQUEST["email"];
    if(empty($email))
    {
        echo("<br>Please type your email.");
    }
    else
    {
        echo("<br>Your email is ".$email);
    }


    
    $password=$_REQUEST["password"];
    if(empyt($password))
    {
        echo("<br>Please enter password");
    }
    else 
    {
        echo("<br>Your password is ".is_numeric($password));
    } 
       
       
   // $password=$_REQUEST["password"];   
   // echo("<br>Your password is ".is_numeric($password));  
          
    
    
  
?>