<!DOCTYPE html>
<html>
    <head>
        <title>The World of Watches</title>
    </head>
    <body>
        <h1>The World of Watches</h1>
        <h2>Types</span> of <span style="color:gold">Watches</span></h2>
        <div>There are many types of analog watches which function totally differently. The following is a list of a few diferent types:</div>
        <ul>
            <li>Kinetic</li>
            <li>Mechanical Automatic</li>
            <li><a href="mechanical.php">Mechanical</a></li>
            <li>Quartz</li>
            <li>Solar</li>
        </ul>
            <img src="https://cdn2.jomashop.com/media/catalog/product/c/i/citizen-cto-men_s-watch-bu4020-01l.jpg" alt="Citizen solar watch" width="250" />
            <div style="font-size:200%;">
                <a href="quiz.php"><br>Test Your Knowledge</a>
            <div>
        <form method="post">
            <input type="sumbit" id="toggle" name="toggle" value="Toggle LED">
        </form>

        <?php
            function toggler() {
            //Read value of gpio.0 pin
            $output = 'gpio read 0';

//this section is for GPIO toggles an LED 
            //If pin is low
            if (($output = 'gpio read 0') == 0){
                $output = 'gpio write gpio.0 1';
                echo "<div>$output</div>";              //show output on command line level
                echo "<br>LED should toggle ON!<br>";   //show output on website
            }
            
            //If pin is high
            else if (($output = 'gpio read 0') == 1){
            $output = 'gpio write gpio.0 0';
            echo "<div>$output</div>";
            echo "<br>LED should toggle OFF!<br>";
            }
        }
        ?>
    </body>
</html>