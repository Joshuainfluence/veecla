<?php
require_once __DIR__ . "/../config/session.php";

// require_once __DIR__."/../public/signup.classes.php";
class SignupContr extends Signup
{
    private $fullName;
    private $username;
    private $email;
    private $password;
    private $conpassword;
    private $check;
    // for image validation
    private $profile_image;
    private $image_name; //the image name
    private $image_type; // the image type
    private $image_size; // the image size
    private $image_temp; //the temporary location where the uploaded image is stored
    // the upload folder should be created in the same folder that the include/final execution file is
    private $uploads_folders = "./profileUploads/"; // the uplodas folder
    private $upload_max_size = 2 * 1024 * 1024; // setting the max upload file size to 2MB
    //property to hold an array of allowed image types

    private $allowed_image_types = ["image/jpg", "image/jpeg", "image/png", "image/gif"];

    //property to store validation error
    //setting it to public to have access to it from the index file

    public $error;


    public function __construct($fullName, $username, $email, $password, $conpassword, $check, $files)
    {
        $this->fullName = $fullName;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->conpassword = $conpassword;
        $this->check = $check;
        // fpr image
        // Use $files['product_image'] instead of $files['image']
        $this->image_name = $files['profileImage']['name'] ?? '';
        $this->image_size = $files['profileImage']['size'] ?? 0;
        $this->image_temp = $files['profileImage']['tmp_name'] ?? '';
        $this->image_type = $files['profileImage']['type'] ?? '';
    }

    private function emptyInput()
    {
        $result = 0;
        if (empty($this->fullName) || empty($this->username) || empty($this->email) || empty($this->password) || empty($this->conpassword) || empty($this->check) || empty($this->image_name)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function passwordCheck()
    {
        $result = 0;
        if ($this->password !== $this->conpassword) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    private function userTaken()
    {
        $result = 0;
        if (!$this->UserCheck($this->username, $this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail()
    {
        $result = 0;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername()
    {
        $result = 0;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passwordLength()
    {
        $result = 0;
        if (strlen($this->password) < 8) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    // methods for image validation

    private function isImage()
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);

        $mime = finfo_file($finfo, $this->image_temp);
        if (!in_array($mime, $this->allowed_image_types)) {
            return $this->error = "Only [.jpg, .jpeg, .png, and .gif] files are allowed";
        }
        finfo_close($finfo);
    }

    // we need a method to validate the image's name
    //  the method will return the sanitized image name, so we are sure that it is save to store the name in the database

    private function imageNameValidation()
    {
        return $this->image_name = filter_var($this->image_name, FILTER_SANITIZE_STRING);
    }





    // we need a method to validate the max upload size
    // the method will return an error if the file's size exceeds the 2MB limit

    private function sizeValidation()
    {
        if ($this->image_size > $this->upload_max_size) {
            return $this->error = "File is too large";
        }
    }

    // we need to check if the file already exists in the folder
    // the method will return an error if the file exists

    private function checkFile()
    {
        if (file_exists($this->uploads_folders . $this->newName())) {
            return $this->error = "File already exists in the folder";
        }
    }

    // we will move the file from our temporary storage to the uploads folder
    // when we're uploading a file, php is storing that file to a temporary location in the server. Then we have to move the file to our uploads folder



    private function newName()
    {
        return "veecla" . md5($this->image_name);
    }




    private function moveFile()
    {

        // initially the #3 was $this->image_name, but the because it was appearing in the upload folder as the default image name and appeared in the database as the encrypted name, i have to change it here to the newNname,,,with the method created
        // i switched it back to image name because i am trying something
        if (!move_uploaded_file($this->image_temp, $this->uploads_folders . $this->newName())) {
            return $this->error = "There was an error, please try again";
        }
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }




    public function signUser()
    {
        if ($this->emptyInput() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../inc/signup.php?error=emptyfields");
            exit();
        }
        if ($this->passwordCheck() == true) {
            $this->set_message("error", "Passwords do not match");
            header("Location: ../inc/signup.php?error=passwordmatch");
            exit();
        }
        if ($this->userTaken() == false) {
            $this->set_message("error", "User already exists");
            header("Location: ../inc/signup.php?error=userTaken");
            exit();
        }
        if ($this->invalidEmail() == false) {
            $this->set_message("error", "Invalid Email format");
            header("Location: ../inc/signup.php?error=invalidEmail");
            exit();
        }

        if ($this->invalidUsername() == false) {
            $this->set_message("error", "Invalid format");
            header("Location: ../inc/signup.php?error=invalidUsername");
            exit();
        }

        if ($this->passwordLength() == false) {
            $this->set_message("error", "Password should not be less that 8 characters");
            header("Location: ../inc/signup.php?error=Passwordtooshort");
            exit();
        }
        // for the image aspect
        $this->isImage();
        $this->imageNameValidation();
        $this->sizeValidation();
        $this->checkFile();
        $this->newName();

        if ($this->error == null) {
            $this->moveFile();
        }
        $this->set_message("success", "Registration successful");

        $this->RegisterUser($this->fullName, $this->username, $this->email, $this->password, $this->newName());
    }
}
