<!DOCTYPE html>
<html>
    <body>
        <?php
            //define variables
            $servername = "localhost";
            $username = "root";
            $password = "password";
            $dbname = "pistore";

            $EnterFname = $_POST["firstname"];
            $EnterLname = $_POST["lastname"];


            //create connection to mysql
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //insert data from form
            $sql = "INSERT INTO answers (FirstName,LastName) VALUES ('$EnterFname','$EnterLname')";
            
            //select data and query
            $sql = "SELECT * FROM answers";
            $results = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                //output data of each column
                while($column = mysqli_retch_assoc($result)) {
                    echo "Firstname: " . $column["FirstName"] . " Lastname: " . $column["LastName"]. "<br>";
                }
            }
            else{
                echo "0 results";
            }

            mysqli_close($conn);
            //end of program
        ?>
    </body>
</html>