<?php
$servername = "localhost";
$name = "root";
$pass = "*B2C5D0135C1F720Ae1967FF8D12222CB911c8011";
$db = "users";

// Create connection
$conn = new mysqli($servername, $name, $pass, $db);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$description = $_POST['description'];
$imagepath = $_POST['imagepath'];

$targetDir = "./image/";
$fileName = time() . "--". basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

    $imageTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $imageTypes)){

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "INSERT INTO Users (firstname, lastname, email, description,imagepath  ) VALUES ('$firstname', '$lastname', '$email', '$description','$targetFilePath)')";
            if ($conn->query($sql) === TRUE) {

                echo "<br/>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            if($sql){
                echo "All has been uploaded successfully.";
            }
        }
    }
}else{
    echo 'Please select a file to upload.';

}
