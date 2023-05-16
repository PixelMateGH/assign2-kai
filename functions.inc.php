<?php
        #This function sanatizes data, leaving no blank space or trailing spaces
        function DataSanatiser($data){ 
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        #This function checks if there's any empty data, if there is return true
        function EmptyData($JobType, $firstname, $lastname, $dob, $email, $gender, $phonenumber, 
        $adone, $suburb, $states, $postcode, $skills){
            if (empty($JobType) || empty($firstname) || empty($lastname) || empty($dob) || empty($email) || 
            empty($gender) || empty($phonenumber) || empty($adone) || empty($suburb) || empty($states) || empty($postcode) || empty($skills)){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check if first name is valid or not
        function InvalidFirstName($firstname){
            if(!preg_match("/^[A-Za-z]{1,20}$/", $firstname)){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check if last name is valid or not
        function InvalidLastName($lastname){
            if(!preg_match("/^[A-Za-z]{1,20}$/", $lastname)){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check for the date format and the allowed age
        function InvalidDob($dob){
            if(!preg_match("/^\d{1,2}\/\d{1,2}\/\d{4}$/", $dob)){
                return true;
            }
            else{
                /////Validate age/////
                $dob_year = (int) substr($dob,-4); //take year from users and turn it into integer
                $current_year = (int) date("Y");
                if(($current_year - $dob_year)>80 || ($current_year - $dob_year) < 15){ //make sure users are not below 15 or above 80
                    return true;
                }
                else{
                    return false;
                } 
            }
        }
        #This function check for the address-1 length
        function InvalidAddress1($adone){
            if(strlen($adone) > 40){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check for the address-2 length
        function InvalidAddress2($adtwo){
            if(strlen($adtwo) > 40){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check for the suburb length
        function InvalidSuburb($suburb){
            if(strlen($suburb) > 40){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check for the state length
        function InvalidState($states){
            if($states=="blank"){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check for postcode length
        function InvalidPostCode($postcode){
            if(strlen($postcode) !== 4){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check if email is valid
        function InvalidEmail($email){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            else{
                return false;
            }
        }
        #This function check if phone number is valid
        function InvalidPhone($phonenumber){
            if(!preg_match("/^[0-9 ]{8,12}$/", $phonenumber)){
                return true;
            }
            else{
                return false;
            }
        }
        
        #This function check if the "Other" checkbox is checked or not, and make sure the other skills are not empty if that's the case
        function EmptySkillbox($skills, $skillbox){
            if($skills == "6"){
                if (empty($skillbox)){ //If "Other skills" is checked, the other skill textbox cannot be empty
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false; //Proceed with the program if nothing is wrong
            }
        }
?>