<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<script src ="script.js"></script>

<form action="send.php" method="post" enctype="multipart/form-data">

        <h1>SING UP FORM</h1>

                    <label>First Name</label>
                    <input type="text" name="firstname" required>
                    <label>Last Name</label>
                    <input type="text" name ="lastname" required>
                    <label>Email</label>
                    <input type="email" name="email" required>
                    <label >Select image:</label>
                    <input type="file" name="file" required>
                    <label>Description</label>
                    <textarea name ="description" required></textarea>

                <input type="submit" name="submit" value="Submit" class="sub">

</form>

</body>
</html>