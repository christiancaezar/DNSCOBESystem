<?php

require("../database.php");

$sql = "SELECT * FROM instructors";
$result = $conn->query($sql);


if(isset($_POST['addbtn'])) {
    $name = $_POST["name"];
    $program = $_POST["program"];

    $sql = "INSERT INTO `instructors`(`instructor_name`, `instructor_program`) VALUES ('".$name."','".$program."')";

    $conn->query($sql);

    echo '<script>
            Swal.fire({
                title: "Successfully Added!",
                icon: "success",
                confirmButtonText: "Ok",
            }).then((result) => {
                window.location.href = "instructor.php";
            });
          </script>';
}

if (isset($_POST['deletebtn'])) {
    $id = $_POST["instructor_id"];
    
    $sql = "DELETE FROM `instructors` WHERE instructor_id = ".$id;

    $conn->query($sql);

    echo '<script>
            Swal.fire({
                title: "Successfully Deleted!",
                icon: "success",
                confirmButtonText: "Ok",
            }).then((result) => {
                window.location.href = "instructor.php";
            });
          </script>';
}
