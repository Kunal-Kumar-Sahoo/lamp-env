<!DOCTYPE html>
<html>
    <head>
        <title>PHP Server-Side Scripting</title>
    </head>
    <body>
        <?php
        echo "<h1>Hello World!</h1>";

        $name = "Kunal Kumar Sahoo";
        $age = 20;

        echo "<p>My name is $name and I am $age years old.</p>";

        $isLoggedIn = true;

        if($isLoggedIn){
            echo "<p>You are logged in!</p>";
        }
        else{
            echo "<p>You are not logged in!</p>";
        }

        echo "<ul>";
        for($i=1; $i<=5; $i++){
            echo "<li>$i</li>";
        }
        echo "</ul>";
        ?>
    </body>
</html>