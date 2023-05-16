<?php 
    require_once "settings.php";
    require_once "functions.inc.php";
    
    if (isset($_POST["submit"])){ #Check if the users have actually submitted the form, i.e: pressing the submit button once

        $dbconn = mysqli_connect($host, $user, $pwd, $sql_db);
        if (!$dbconn) {
            die("Database connection failure");
        }

        $JobType = DataSanatiser($_POST["JobType"]);
        $firstname = DataSanatiser($_POST["firstname"]);
        $lastname = DataSanatiser($_POST["lastname"]);
        $dob = DataSanatiser($_POST["dob"]);
        $email = DataSanatiser($_POST["email"]);
        $gender = DataSanatiser($_POST["gender"]);
        $phonenumber = DataSanatiser($_POST["phonenumber"]);
        $adone = DataSanatiser($_POST["adone"]);
        $adtwo = DataSanatiser($_POST["adtwo"]);
        $suburb = DataSanatiser($_POST["suburb"]);
        $states = DataSanatiser($_POST["states"]);
        $postcode = DataSanatiser($_POST["postcode"]);
        $skills = DataSanatiser($_POST["skills"]);
        $skillbox = DataSanatiser($_POST["skillbox"]);
        $reason = DataSanatiser($_POST["reason"]);

        #if users did not enter any data
        if (EmptyData($JobType, $firstname, $lastname, $dob, $email, $gender, $phonenumber, 
        $adone, $suburb, $states, $postcode, $skills) !== false){ 
            header("Location:apply.php?error=emptyinput"); #return the users back to the application page with an error message on link
            exit();
        }
        #if firstname is not maximum 20 alpha character
        if (InvalidFirstName($firstname) !== false){
            header("Location: apply.php?error=inv-firstname");
            exit();
        }
        #if lastname is not maximum 20 alpha character
        if (InvalidLastName($lastname) !== false){
            header("Location: apply.php?error=inv-lastname");
            exit();
        }
        #if date of birth is not valid 
        if (InvalidDob($dob) !== false){
            header("Location: apply.php?error=inv-dob");
            exit();
        }
        #if address 1 is bigger than 40 characters
        if (InvalidAddress1($adone) !== false){
            header("Location: apply.php?error=inv-address-1");
            exit();
        }
        #if address 2 is bigger than 40 characters
        if (InvalidAddress2($adtwo) !== false){
            header("Location: apply.php?error=inv-address-2");
            exit();
        }
        #if suburb is bigger than 40 characters
        if (InvalidSuburb($suburb)!== false) {
            header("Location: apply.php?error=inv-suburb");
            exit();
        }
        #if states is not chosen correctly
        if (InvalidState($states) !== false){
            header("Location: apply.php?error=inv-states");
            exit();
        }
        #if postcode is not typed correctly
        if (InvalidPostCode($postcode) !== false){
            header("Location: apply.php?error=inv-states");
            exit();
        }
        #if email is invalid
        if (InvalidEmail($email) !== false){
            header("Location: apply.php?error=inv-email");
            exit();
        }
        #if phone number is invalid
        if (InvalidPhone($phonenumber) !== false){
            header("Location: apply.php?error=inv-phone-num");
            exit();
        }
        #if "other skill" check box is checked and the textbox is empty
        if (EmptySkillbox($skills,$skillbox) !== false){
            header("Location: apply.php?error=inv-skillbox");
            exit();
        }

        
        $sql_table = 'EOI';

        $query = "INSERT INTO $sql_table (JobRefNum, firstname, lastname, dob, gender, streetaddress, suburb, state, postcode, email, phonenumber, reason, MySQL, MSoffice, CSS, PHP, JAVA, otherskills) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($dbconn, $query);

        mysqli_stmt_bind_param($stmt, 'sssssssssssssssssss', $JobType, $firstname, $lastname, $dob, $gender, $adone, $suburb, $states, $postcode, $email, $phonenumber, $reason, $skills, $skills, $skills, $skills, $skills, $skillbox);

        if (mysqli_stmt_execute($stmt)) {
            echo "Expression of Interest submitted successfully!";
        } else {
            echo "Error: " . mysqli_error($dbconn);
        }
        mysqli_close($dbconn);
        
    }
    else{
        header("Location: apply.php"); #return the users back to the application page
        exit();
    }

?>
