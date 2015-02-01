<html>
    <link rel="stylesheet" href="./welcomeb.css">
    <link href="heart.ico" type="image/icon" rel="shortcut icon"/>
    <title>Thank You For Registering!</title>
    <body>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <center><h1><b>Thank you for registering with 282 Soul Train!<br/> We will find you a match as soon as we can!</b></h1>
        </center>
    </body>
    <?php
    $username = "/var/www/html/12rc51/pic";
    if (is_uploaded_file($_FILES["avatar"]["tmp_name"])) {
        mkdir("$username/".$_POST["fname"].$_POST["lname"]);
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "$username/".$_POST["fname"].$_POST["lname"]."/avatar.jpg");
    }
    ?>
    <?php
    $myfile = fopen("/var/www/html/12rc51/client.txt", "a") or die("Unable to open file!");
    $avatar = "Avatar: $username/".$_POST["fname"].$_POST["lname"]."/avatar.jpg\n";
    fwrite($myfile, $avatar);
    $name = $_POST["fname"]." ".$_POST["lname"];
    $fname = "Name: $name\n";
    fwrite($myfile, $fname);
    $location = "From: ".$_POST["city"].", ".$_POST["country"]."\n";
    fwrite($myfile, $location);
    $gender = "Gender: ".$_POST["cc"]."\n";
    fwrite($myfile, $gender);
    $age = "Age: ".(2014-$_POST["yearofbirth"])."\n";
    fwrite($myfile, $age);
    $bday = $_POST["monthofbirth"]." ".$_POST["dayofbirth"]." ".$_POST["yearofbirth"];
    $birthday = "Date of Birth: $bday\n";
    fwrite($myfile, $birthday);
    $word = "One Word that Describe Me: ".$_POST["word"]."\n";
    fwrite($myfile, $word);
    $want = "I am looking for a ".$_POST["want"]." between ages of ".$_POST["firstage"]." and ".$_POST["secondage"].".\n";
    fwrite($myfile, $want);
    $bio = "More About Me: ".$_POST["bio"]."\n";
    fwrite($myfile, $bio);
    fwrite($myfile, "\n");
    fclose($myfile);
    ?>

    <footer>
        <center>Copyright &copy 2014 <br> CISC 282 All Rights Reserved</center>
    </footer>
</html>