<!DOCTYPE html>
<html>
<head>
    <script src="midscript.js"></script>
</head>
<body>

    <form onsubmit="return return_name();">
    
    <?php echo="<br>Name:<br>" ?>
    <input type="text" id="name" name="name">

    <?php echo="Please select the product" ?>
    <br>
    <input type="radio" id="apple" name="food" value="1">
    <label for="apple">apple</label><br>
    <input type="radio" id="steak" name="food" value="2">
    <label for="steak">steak</label><br>
    <input type="radio" id="cookies" name="food" value="3">
    <label for="cookies">cookies</label><br>
    <br>
    <input type="submit">
    </form>

</body>
</html>