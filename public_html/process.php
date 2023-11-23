<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Contact Us</h1>

    <?php
    $name = $email = $phone = $subject = $message = $address = $city = $state = $zip = $success = "";
    $nameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = $addressErr = $cityErr = $stateErr = $zipErr = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
        } else {
            $phone = test_input($_POST["phone"]);
            if (!preg_match("/^[0-9]{10}$/", $phone)) {
                $phoneErr = "Invalid phone number format";
            }
        }

        if (empty($_POST["subject"])) {
            $subjectErr = "Subject is required";
        } else {
            $subject = test_input($_POST["subject"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["city"])) {
            $cityErr = "City is required";
        } else {
            $city = test_input($_POST["city"]);
        }

        if (empty($_POST["state"])) {
            $stateErr = "State is required";
        } else {
            $state = test_input($_POST["state"]);
        }

        if (empty($_POST["zip"])) {
            $zipErr = "Zip code is required";
        } else {
            $zip = test_input($_POST["zip"]);
            if (!preg_match("/^\d{6}(-\d{4})?$/", $zip)) {
                $zipErr = "Invalid zip code format";
            }
        }

        if (empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($subjectErr) && empty($messageErr)
            && empty($addressErr) && empty($cityErr) && empty($stateErr) && empty($zipErr)) {
            // Process the form data (e.g., send an email or save to a database)
            // In this example, we'll just display a success message
            $success = "Thank you for your message!";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>
        <br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="<?php echo $phone; ?>">
        <span class="error"><?php echo $phoneErr; ?></span>
        <br><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" value="<?php echo $subject; ?>">
        <span class="error"><?php echo $subjectErr; ?></span>
        <br><br>

        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="5"><?php echo $message; ?></textarea>
        <span class="error"><?php echo $messageErr; ?></span>
        <br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="<?php echo $address; ?>">
        <span class="error"><?php echo $addressErr; ?></span>
        <br><br>

        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="<?php echo $city; ?>">
        <span class="error"><?php echo $cityErr; ?></span>
        <br><br>

        <label for="state">State:</label>
        <input type="text" name="state" id="state" value="<?php echo $state; ?>">
        <span class="error"><?php echo $stateErr; ?></span>
        <br><br>

        <label for="zip">Zip Code:</label>
        <input type="text" name="zip" id="zip" value="<?php echo $zip; ?>">
        <span class="error"><?php echo $zipErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <p class="success"><?php echo $success; ?></p>
</body>
</html>