<!DOCTYPE html>
<html>

<?php 
$fnameerr = $lnameerr = "";

    //checking the text boxes
    if (empty($_POST["firstname"])){
        $fnameerr = "First Name is required";
    }
    else {
        $fname = test_input($_POST["firstname"]); //apply the variable to the input and then return it
    }

    if (empty($_POST["lastname"])){
        $lnameerr = "Last Name is required";
    }
    else {
        $lname = test_input($_POST["lastname"]);
    }  

    //checing the radio power
    if (empty($_POST["power"])){
        $powererr = "Field is required";
    }
    else {
        $power = test_input($_POST["power"]);
    } 

    //checing the radio type
    if (empty($_POST["type"])){
        $powererr = "Field is required";
    }
    else {
        $power = test_input($_POST["type"]);
    } 

    //checing the radio charge
    if (empty($_POST["charge"])){
        $powererr = "Field is required";
    }
    else {
        $power = test_input($_POST["charge"]);
    } 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<br></br>Welcome " . $fname . "<br/>"; 
echo "Your last name is " . $lname . "<br/>";
echo "It is good to know that you are " . $age . " years old.<br><br>";

?>

</html>