<form method="post" action="">
    Enter some HTML:
    <br>
    <input type="text" name="html">
    <br>
    <input type="submit" value="Submit">
</form>
<div>
    You entered:
    <?= htmlspecialchars($_POST["html"]); ?>
</div>


<?=
    $data = "<a href=\"https://www.evil-spam.biz/html/\">Your account has been compromised! Click here to get technical support!!</a>";

echo htmlspecialchars($data);

// Prints: &lt;a href=&quot;https://www.evil-spam.biz/html/&quot;&gt;Your account has been compromised! Click here to get technical support!&lt;/a&gt;

$email = "     aisle.nevertell@yahoo.com   ";
echo trim($email); // Prints: aisle.nevertell@yahoo.com

?>