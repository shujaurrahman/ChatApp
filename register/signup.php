<?php
    // error_reporting(E_ALL);
    // ini_set('display_errors', 1);
    session_start();
    include_once "../assets/config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            
            if (mysqli_num_rows($sql) > 0) {
                echo "$email - This email already exists!";
            } else {
                if (isset($_FILES['image'])) {
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if (in_array($img_ext, $extensions) === true) {
                        $types = ["image/jpeg", "image/jpg", "image/png"];
                        if (in_array($img_type, $types) === true) {
                            $time = time();
                            $new_img_name = $time . $img_name;
                            if (move_uploaded_file($tmp_name, "../assets/images/" . $new_img_name)) {
                                $ran_id = rand(time(), 100000000);
                                // $status = "Active now";
                                $code = rand(999999, 111111);
                                $status = "notverified";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, code, status)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}', '{$new_img_name}', {$code} ,'{$status}')");
                                if ($insert_query) {
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if (mysqli_num_rows($select_sql2) > 0) {
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];
                                        $_SESSION['email'] = $email;
                                        $subject = "Email Verification Code";
                                        $msg="Your verification code is ";                      
                                        $msgend= "If this wasn't you ignore this message.";
                                        // function for mail 
                                        require "../assets/mail.php";
                                        echo "success";
                                    } else {
                                        echo "Error: This email address does not exist!";
                                    }
                                } else {
                                    echo "Error: Something went wrong. Please try again!";
                                }
                            } 
                            else {
                                echo "Error: Failed to upload the image. Please try again!";
                            }
                        } else {
                            echo "Error: Please upload an image file - jpeg, png, jpg";
                        }
                    } else {
                        echo "Error: Please upload an image file - jpeg, png, jpg";
                    }
                } else {
                    echo "Error: Image file not found. Please upload an image.";
                }
            }
        } else {
            echo "Error: $email is not a valid email!";
        }
    } else {
        echo "Error: All input fields are required!";
    }
?>