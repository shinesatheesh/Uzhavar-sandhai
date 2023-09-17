<?php
session_start();

$uname = $_SESSION["uname"];
$pname = $_POST["productname"];
$pdqty = $_POST["qty"];
$pdprice = $_POST["productprice"];
$dsption = $_POST["description"];
$phone = $_POST["phonenumber"];
$date = $_POST["date"];
$district = $_POST["district"];
$location = $_POST["location"];
$timing = $_POST["timing"];

if (!empty($uname) && !empty($pname) && !empty($pdqty) && !empty($pdprice) && !empty($dsption) && !empty($phone) && !empty($district) && !empty($location) && !empty($timing)) {
    $con = mysqli_connect('localhost', 'root', 'root', 'uzhavar');
    if ($con->connect_error) {
        die("Failed to connect: " . $con->connect_error);
    } else {
        // Image upload
        if (isset($_FILES['my_image'])) {
            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];

            if ($error === 0) {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("img-", TRUE) . '.' . $img_ex_lc;
                    $img_upload_path = 'upload/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                } else {
                    echo "You can't upload files of this type";
                    die();
                }
            } else {
                echo "Unknown error occurred";
                die();
            }
        } else {
            echo "Image not uploaded";
            die();
        }
        // Product insert query
        $sql = "INSERT INTO product (productname, produtqty, productprice, phonenumber, district, description, date, uname1, img, timing, location) VALUES ('$pname', '$pdqty', '$pdprice', '$phone', '$district', '$dsption', '$date', '$uname', '$new_img_name', '$timing', '$location')";

        if (mysqli_query($con, $sql)) {
            header("Location: admin.php");
            exit();
        } else {
          // Print the specific error
          echo "Error: " . mysqli_error($con);
          die();
      }
    }
} else {
    echo "Please fill in all required fields";
    die();
}
?>
