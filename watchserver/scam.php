<!DOCTYPE html>
<html>
    <body>
        <?php
        //this code is used to take down the search of the user

        //define variables
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dbname = "google";

            $Entersearch = $_POST["search"];
            $Enteripaddress = $_SERVER['REMOTE_ADDR'];

            //connect to the database
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //insert data from form
            $sql = "INSERT INTO searches (Search,IPaddress) VALUES ('$Entersearch','$Enteripaddress')";

            mysqli_close($conn);
            //end of program
        ?>
        
    </body>
</html>