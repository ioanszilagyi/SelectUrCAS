<?php

include_once("CAS.php");
phpCAS::client(CAS_VERSION_2_0,"127.0.0.1",8443,"/cas/");

// This setting (i.e. setNoCasServerValidation) is only for testing, not for production 
phpCAS::setNoCasServerValidation();

//phpCAS::setCasServerCACert("./CACert.pem");//this is relative to the cas client.php file

if (phpCAS::isAuthenticated())
    {
    echo "User:" . phpCAS::getUser();
    echo "<a href='./logout.php'>Logout</a>";
    }else{
    echo "<a href='./login.php'>Login</a>";
}
