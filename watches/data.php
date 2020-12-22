<!DOCTYPE html>
<html>
    <body>
        Thank you for doing the quiz! I hope you enjoyed your reading on watches.
        <?php
            //define variables
            $servername = "localhost";
            $username = "jeremy";
            $password = "Password01";
            $dbname = "results";

            $EnterFname = $_POST["firstname"];
            $EnterLname = $_POST["lastname"];
            $EnterAns1 = $_POST["power"];
            $EnterAns2 = $_POST["type"];
            $EnterAns3 = $_POST["charge"];


            //create connection to mysql
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            //insert data from form
            //$sql = "INSERT INTO dummy (FirstName, LastName) VALUES ('$EnterFname','$EnterLname')";
            $sql = "INSERT INTO answers (FirstName, LastName, Ans1, Ans2, Ans3) VALUES ('$EnterFname','$EnterLname','$EnterAns1','$EnterAns2','$EnterAns3')";
            $result = mysqli_query($conn, $sql);
            echo $result;
            
            //select data and query
            $sql = "SELECT * FROM answers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                while($row = mysqli_fetch_assoc($result)){
                    echo"<br>";
                    echo "Firstname: " . $row["FirstName"] . " Lastname: " . $row["LastName"]. " First Answer: " . $row["Ans1"]. " Second Answer: " . $row["Ans2"]." Third Answer: " . $row["Ans3"]. "<br>";
                };
            }
            else{
                echo "0 results";
            }

            mysqli_close($conn);
            //end of program
        ?>
    </body>
</html>