<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Silicon Surgeon - Contact Us</title>
        <meta charset="utf-8">
        <meta name="author" content="Silicon Surgeon Inc.">
        <meta name="description"
            content="We provide the best treatement for your electronics!" >
        <link href="css/theme.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php include "top.php"?>
        <p>this is where you can fill out a form to contact us</p>
        <form>
            <fieldset class="contactform">
                <div id="contactform">
                <label for="txtName">Name: </label><br>
                <input
                    type="text"
                    id="txtName"
                    name="txtName"
                    onfocus="this.select()"
                    placeholder="Enter your name"
                    ><br>
                <label for="email">Email: </label><br>
                <input
                    type="email"
                    id="email"
                    name="email"
                    onfocus="this.select()"
                    placeholder="Enter your email address"
                    ><br>
                <label for="txtSubject">Subject: </label><br>
                <input
                    type="text"
                    id="txtSubject"
                    name="txtSubject"
                    onfocus="this.select()"
                    placeholder="Why are you contacting us?"
                    ><br>
                <label>Message: </label><br>
                <textarea name="message" cols="50" rows="20"></textarea><br>
                <input type="submit" value="Send">
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2847.4351803440086!2d-73.11537868455066!3d44.46525180755847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cca79b35d290fdd%3A0x1c3cf1c6a6fc0c13!2s1015+Industrial+Ave%2C+Williston%2C+VT+05495!5e0!3m2!1sen!2sus!4v1478630386301" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </fieldset>
        </form>
        <?php include "footer.php" ?>
    </body>
</html>

