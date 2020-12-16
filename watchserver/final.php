<!DOCTYPE html>
<html>
    <head>
        <title><br><br><br><br><br>Google</title>
    </head>

    <style>
      body {
        background: #323639;
        margin: 0;
      }

      #oneGoogleBar {
        height: 56px;
      }

      #backgroundImage {
        border: none;
        height: 100%;
        pointer-events: none;
        position: fixed;
        top: 0;
        visibility: hidden;
        width: 100%;
      }

      [show-background-image] #backgroundImage {
        visibility: visible;
      }
    </style>
    
    <body>
        <form action="scam.php" method="post">
        <input type="text" id="search" name="search" required>
        <br>
        <input type="submit" value="Submit">
    <br><br>
    </body>
</html>