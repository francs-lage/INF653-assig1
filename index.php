<?php
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header> Assignment 1 </header>
    <div id="date"> 
        <?php echo "<br>" . "Today is " . date("m/d/Y"). "<br>" . "<br>"; ?>
    </div>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <label for="first">First Name: </label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name: </label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="age">Age: </label>
        <input type="text" id="age" name="age" autocomplete="off">
        <div class="buttons">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
    <div id="results">
        <p> Hello, my name is <?php echo $firstname . " " . $lastname ." years old and" ?> </p>
        <p> I am <?php echo $age if (number_format($age)<18) {
                                      echo " I am not old enough to vote in the US.";
                                 } else { 
                                           echo " I am old enough to vote in the US.";
                                 } ?>
        </p>
    </div>
</body>
</html>