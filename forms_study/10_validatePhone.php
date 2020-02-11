<?php
$contacts = ["Susan" => "5551236666", "Alex" => "7779991717", "Lily" => "8181117777"];
$message = "";
$validation_error = "* Please enter a 10-digit North American phone number.";
$name = "";
$number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number  = $_POST["number"];
    // Write your code here:

    if (strlen($number) > 30) {
        $message = $validation_error;
    } else {
        $regex = "/[^0-9]/";
        $sanitized_number = preg_replace($regex, "", $number);

        if (strlen($sanitized_number) == 10) {
            $contacts[$name] = $sanitized_number;
            $message = "Thanks ${name}, we'll be in touch.";
        } else {
            $message = $validation_error;
        }
    }
};
?>
<html>

<body>
    <h3>Contact Form:</h3>
    <form method="post" action="">
        Name:
        <br>
        <input type="text" name="name" value="<?= $name; ?>">
        <br><br>
        Phone Number:
        <br>
        <input type="text" name="number" value="<?= $number; ?>">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <div id="form-output">
        <p id="response"><?= $message ?></p>
    </div>
</body>

</html>