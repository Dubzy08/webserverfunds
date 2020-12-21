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
            $sql = "INSERT INTO answers (FirstName, LastName, Ans1, Ans2, Ans3) VALUES ('$EnterFname','$EnterLname','$Enterans1','$Enterans2','$Enterans3')";
            
            //select data and query
            $sql = "SELECT * FROM answers";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){
                //output data of each row
                do{
                    echo "<br>Firstname: " . $row["FirstName"] . " Lastname: " . $row["LastName"]. " First Answer: " . $row["Ans1"]. " Second Answer: " . $row["Ans2"]." Third Answer: " . $row["Ans3"]. "<br>";
                }while($row = mysqli_retch_assoc($result));
            }
            else{
                echo "0 results";
            }

            mysqli_close($conn);
            //end of program
        ?>
    </body>
</html>