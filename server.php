<?php

    session_start();

    $_SESSION['connected'] = false;

    // Initialise variables
    $username = "";
    $email = "";
    $errors = array();

    // Connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'agrear');

    // Register User
    if (isset($_POST['reg_user'])){
        // Receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

        // Form validation: Ensure that form is correctly filled.
        // by dding (array_push()) coresponding error unto $errors array.
        if (empty($username)){
            array_push($errors, "Username is required.");
        }
        if (empty($email)){
            array_push($errors, "Email is required.");
        }
        if (empty($password_1)){
            array_push($errors, "A Password is required.");
        }
        if ($password_1 != $password_2){
            array_push($errors, "The two password do not match.");
        }

        // First check the database to make sure.
        //  a user does not already exists with the same username and/or email.
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username){
                array_push($errors, 'Username already exists.');
            }
        }

        if ($user) { // if user exists
            if ($user['email'] === $email){
                array_push($errors, 'Email already exists.');
            }
        }

        // Finally register user if there are no errors in the form.
        if (count($errors) == 0){
            $password = md5($password_1); // Encrypt the password before saving in the database.
            $query = "INSERT INTO users (username, email, password)
                    VALUES('$username', '$email', '$password')";

            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in!";
            $_SESSION['connected'] = true;
            header('location: index.php');
        }
    }

    // Login User
    if (isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)){
            array_push($errors, "Username is required!");
        }

        if (empty($password)){
            array_push($errors, "Password is required!");
        }

        if (count($errors) == 0){
            $password = md5($password); // Encrypt the password before saving in the database.
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1){
                $_SESSION['connected'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in!";
                header('location: index.php');
            }else{
                array_push($errors, "Wrong username and<br>password combination.");
            }
        }
    }

?>