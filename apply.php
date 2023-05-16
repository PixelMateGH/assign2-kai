<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Apply for a Web Developmment Job!">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Developer Application</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
  <body class="apply">
    <!----------------------------------Code for navigation bar-------------------------->
<section class="form-whole">
    <form action="processEOI.php" method="post">
    
      <?php
        include "header.inc";
      ?>

            <!-----------------------------------Code for Identity-------------------------------------->
            <br><br><br>
          <div class="Input">
            <input type="radio" id="NetAdmin" name="JobType">
            <label for="NetAdmin">Network System Administrator (#52348)</label>
            <input type="radio" id="WebDev" name="JobType">
            <label for="WebDev"> Wev developer (#53549)</label>
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You have to choose a job</p>";
              }
            ?>
          </div> 
          <br><br>
          <div class="Input">
            <input id="firstname" type="text" placeholder="Enter your first name"name="firstname" >
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You must enter your first name</p>";
              }
              else if(isset($_GET["error"]) == "inv-firstname"){
                echo "<p class='error-message'>Your first name is invalid</p>";
              }
            ?>
          </div> 
          <div class="Input">
            <input id="lastname" type="text" placeholder="Enter your last name" name="lastname">
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You must enter your last name</p>";
              }
              else if(isset($_GET["error"]) == "inv-firstname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-lastname"){
                echo "<p class='error-message'>Your last name is invalid</p>";
              }
            ?>
          </div> 
          <br><br>
          <div class="Input">
            <input id="dob" type="text" placeholder="dd/mm/yyyy" maxlength="10" name="dob">
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You must enter your date of birth</p>";
              }
              else if(isset($_GET["error"]) == "inv-firstname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-lastname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-dob"){
                echo "<p class='error-message'>Invalid date or age must between 15-80</p>";
              }
            ?>
          </div> 
          <div class="Input">
            <input id="middlename" type="text" placeholder="Enter middlename here">
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You must enter your middle name</p>";
              }
              else if(isset($_GET["error"]) == "inv-firstname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-lastname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-dob"){
                echo "<p class='error-message'>Invalid date or age must between 15-80</p>";
              }
            ?>
          </div> 
          <p></p>
          <div class="Input">
            <input id="email" type="text" placeholder="Enter email here" name="email" >
            <?php
              if (isset($_GET["error"]) == ""){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "emptyinput"){
                echo "<p class='error-message'>You must enter your email address</p>";
              }
              else if(isset($_GET["error"]) == "inv-firstname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-lastname"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-dob"){
                echo "<p class='error-message'></p>";
              }
              else if(isset($_GET["error"]) == "inv-email"){
                echo "<p class='error-message'>Invalid email address</p>";
              }
            ?>
          </div>
          <p></p>
          <div class="gender">
            <fieldset>
              <legend>Choose Your Gender</legend>
                <input type="radio" id="male" name="gender">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender">
                <label for="other">Other</label><br>
                <input type="radio" id="notsay" name="gender">
                <label for="notsay">Prefer not to say</label><br>
                <?php
                  if (isset($_GET["error"]) == ""){
                    echo "<p class='error-message'></p>";
                  }
                  else if(isset($_GET["error"]) == "emptyinput"){
                    echo "<p class='error-message'>You must choose an option</p>";
                  }
                  else if(isset($_GET["error"]) == "inv-firstname"){
                    echo "<p class='error-message'></p>";
                  }
                  else if(isset($_GET["error"]) == "inv-lastname"){
                    echo "<p class='error-message'></p>";
                  }
                  else if(isset($_GET["error"]) == "inv-dob"){
                    echo "<p class='error-message'></p>";
                  }
                  else if(isset($_GET["error"]) == "inv-email"){
                    echo "<p class='error-message'></p>";
                  }
                ?>
            </fieldset>
          </div>
          <p></p> 
          <div class="Input">
            <input class="phonenumber" type="text" placeholder="Enter Phone number here" maxlength="12">
            <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'>You must enter your phone number</p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'>Phone number must be 8-12 digits</p>";
                }
            ?>
          </div> 
          <!---------------------------Code for Adress information--------------------->
          <h2 class="address">Address</h2>
          <div class="countries">
              <select id="country" name="country" class="country">
                  <option value="blank">Select country</option>
                  <option value="AUS">Australia</option>
              </select>
              <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'>You must choose an option</p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
              ?>
          </div>
          <p></p>
          <div class="Input">
            <input class="adone" type="text" placeholder="Address line 1" maxlength="40" > 
            <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'>You must enter the address</p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-address-1"){
                  echo "<p class='error-message'>Invalid Address</p>";
                }
            ?>
          </div>
          <p></p>
          <div class="Input">
            <input class="adtwo" type="text" placeholder="Address line 2" maxlength="40" >
            <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-address-2"){
                  echo "<p class='error-message'>Invalid Address</p>";
                }
            ?>
          </div>
          <p></p>
        <div class="state">
            <input class="suburb" type="text" placeholder="Enter Suburb"  maxlength="40">
          <select id="states" name="states" class="states">
              <option value="blank">Select a state</option>
              <option value="ACT">Australian Capital Territory</option>
              <option value="NSW">New South Wales</option>
              <option value="NT">Northern Territory</option>
              <option value="QLD">Queensland</option>
              <option value="SA">South Australia</option>
              <option value="TAS">Tasmania</option>
              <option value="VIC">Victoria</option>   
              <option value="WA">Western Australia</option>
          </select>
          <p></p>
          <input class="postcode" type="text" placeholder="Postcode" maxlength="4"  pattern="\d{4}">
          <p></p>
          <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message' style='padding-right: 45%;'>Enter a suburb, Select a state and enter postcode</p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-address-2"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-suburb"){
                  echo "<p class='error-message' style='padding-right: 45%;'>You can only enter upto 40 characters</p>";
                }
                else if(isset($_GET["error"]) == "inv-states"){
                  echo "<p class='error-message' style='padding-right: 45%;'>You must select a state</p>";
                }
            ?>
        </div>
          <!---------------------------------Code for skills---------------------------------->
          <h2 class="otherskill">Skills</h2>
          <div class="Input">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="check1" type="checkbox" name="skills" value="1">
              <label for="check1">C++, CSS, HTML</label>
              &nbsp;<input id="check2" type="checkbox" name="skills" value="2">
              <label for="check2">Microsoft Office</label>
            
            <br><br>
              &nbsp;<input id="check3" type="checkbox" name="skills" value="3">
              <label for="check3">MySQL</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="check4" type="checkbox" name="skills" value="4">
              <label for="check4">PHP</label>
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="check5" type="checkbox" name="skills" value="5">
              <label for="check5">Java, JavaScript</label>&nbsp;
              <input id="otherCheck" type="checkbox" name="skills" value="6">
              <label for="otherCheck" id="checkbox">Other Skills</label>
            <br>
            <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'>You must choose at least one skill</p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-address-2"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-suburb"){
                  echo "<p class='error-message' style='padding-right: 45%;'></p>";
                }
                else if(isset($_GET["error"]) == "inv-states"){
                  echo "<p class='error-message' style='padding-right: 45%;'></p>";
                }
            ?>
          </div>
          <h3 id="otherbox">Other Skills</h3>
          <div class="Input">
            <textarea id="skillbox" placeholder="Enter Other skills" maxlength="200" rows="8" cols="30" name="skillbox"></textarea>
            <?php
                if (isset($_GET["error"]) == ""){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "emptyinput"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-firstname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-lastname"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-dob"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-email"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-phone-num"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-address-2"){
                  echo "<p class='error-message'></p>";
                }
                else if(isset($_GET["error"]) == "inv-suburb"){
                  echo "<p class='error-message' style='padding-right: 45%;'></p>";
                }
                else if(isset($_GET["error"]) == "inv-states"){
                  echo "<p class='error-message' style='padding-right: 45%;'></p>";
                }
                else if(isset($_GET["error"]) == "inv-skillbox"){
                  echo "<p class='error-message'>You must specify the other skills you have</p>";
                }
            ?>   
          </div>
          <h3>Why do you want to work with LESTER TOUCHES TECH?</h3>
          <textarea class="reason" placeholder=" Explain why you would like to work here in 200 words or less"
          maxlength="200" rows="8" cols="30" name="reason"></textarea>
          <br><br><br>
          <input type="file" id="upload-btn" name="upload" hidden>
          <label for="upload-btn" class="upload-label">Upload Resume</label>
          <br>
          <input type="submit" value="Submit Application" class="submit" name="submit">
          <br><br>
  </form>
 </section>
  
<!-----------------------------------The footer------------------------------->
  <?php
    include "footer.inc";
  ?>
  
</body>
</html>