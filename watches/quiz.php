<!DOCTYPE html>
<html>

<head>
  <h2>
    Test Your knowlege
  </h2>
  <script src="javascript.js"></script>
</head>

<body>
  <div>
    Test your knowlege on watches that you have <br> just learned about with the following quiz<br><br>
  </div>

  <form action="data.php" method="post">

    <br/>
    First Name<br/>
   <input type="text" id="firstname" name="firstname" required>
    <br><br>

    Last Name <br>
    <input type="text" id="lastname" name ="lastname" required>
    <br><br>

    <div>
      Q1. What powers a mechanical watch?
    </div>
    <input type="radio" id="mainSpring" name="power" value="mainspring"></input>
    <label for="Main Spring">Main Spring</label><br>
    <input type="radio" id="hairspring" name="power" value="hairspring"></input>
    <label for="Hairspring">Hairspring</label><br>
    <input type="radio" id="crown" name="power" value="crown"></input>
    <label for="Crown">Crown</label>
    
    <div>
      <br>Q2. What type of watch stops when you do not wear it and goes back to current time when you put it back on?
    </div>

    <input type="radio" id="mechanical" name="type" value="mechanical">
    <label for="Mechanical Automatic">Mechanical Automatic</label><br>
    <input type="radio" id="solar" name="type" value="solar">
    <label for="Solar">Solar</label><br>
    <input type="radio" id="kinetic" name="type" value="kinetic">
    <label for="Kinetic">Kinetic</label>

    <div>
      <br>Q3. How much time can the mechanical watch with the longest power reserve go for before having to be rewound?
    </div>
    <input type="radio" id="50" name="charge" value="50">
    <label for="50">50 days</label><br>
    <input type="radio" id="24" name="charge" value="24">
    <label for="24">24 days</label><br>
    <input type="radio" id="16" name="charge" value="16">
    <label for="16">16 days <br><br></label>

    <input type="submit" value="Submit">
  </form>
</body>

</html>