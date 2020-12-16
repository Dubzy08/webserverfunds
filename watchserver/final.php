<!DOCTYPE html>
<html>
    <head>
        <title>Google</title>
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
        <h1 style="font-size:300%;">Google</h1>
        <form action="scam.php" method="post">
        <input type="text" id="search" name="search" required>
        <br>
        <input type="submit" id="search" value="Search">
    <br><br>
    </body>
</html>