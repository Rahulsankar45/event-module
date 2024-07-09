<html>
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #222222;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        color: aliceblue;
        background-color: #222222;
        border-color: aliceblue;
        border-radius: 20px;
        
    }
</style>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "") or die(mysql_error());

    mysqli_select_db($con, "events") or die(mysql_error());

    $sql = "INSERT INTO reg VALUES ('$_POST[Name]','$_POST[mail]','$_POST[phone]','$_POST[SRN]','$_POST[SEM]','$_POST[SEC]','$_POST[Event]');";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysql_error());
    }
    echo "<center>Registration Successful!</center>";
    mysqli_close($con)

        ?>
   

</body>

</html>