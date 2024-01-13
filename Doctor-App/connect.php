
<?php
// Assuming you have already established a connection to your MySQL database

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $date = $_POST['date'];

    // Perform any necessary validation or sanitization of the input data

    // Insert the appointment details into the database
    $connection = mysqli_connect('localhost', 'root', '', 'docapp');
    $query = 'INSERT INTO `appointmentss`(`name`, `email`, `phone_number`, `date`) VALUES ("'.$name.'", "'.$email.'", "'.$email.'", "'.$date.'")';

    $result = mysqli_query($connection, $query);
    // echo
    if($result){ 
        // Appointment successfully made
        echo '<script>alert("Appointment made successfully!")</script>';
    } else {
        // Error occurred while making the appointment
        echo "Error: " . mysqli_error($connection);
    }
}
?>