<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <style>
     body {
        font-family: Arial, sans-serif;
        background-color: #c6e2f9;
        margin: 0;
        padding: 20px;
     }
     main {
        display: flex;
        justify-content: center;
     }
     .donation-section {
        background-color: #b8d6ec;
        width: 90%;
        max-width: 800px;
        padding: 30px;
        border: 2px solid #999;
        border-radius: 10px;
        box-shadow: 3px 3px 10px rgba(0,0,0,0.2);
     }
     h2 {
        color: darkred;
        border-bottom: 1px solid #aaa;
        padding-bottom: 5px;
        margin-top: 30px;
        margin-bottom: 10px;
     }
     form label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
        color: #000;
     }
     input[type="text"],
     input[type="address"],
     input[type="number"],
     input[type="email"],
     select,
     textarea {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #555;
        border-radius: 4px;
        background-color: #fff;
        box-sizing: border-box;
     }
     input[type="radio"],
     input[type="checkbox"] {
        margin-right: 8px;
        margin-top: 10px;
     }
     textarea {
        resize: vertical;
     }
     .additionalInfo p,
     .comments p,
     .contact p {
        margin-top: 10px;
        font-size: 14px;
        color: #333;
     }
     .buttons {
      margin-top: 30px;
      text-align: center;
     }
     .button {
      padding: 10px 20px;
      font-size: 15px;
      margin: 5px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      }
     .resetBtn {
        background-color: #f44336;
        color: white;
     }
     .resetBtn:hover {
        background-color: #d32f2f;
     }
     .continueBtn {
      background-color: #4CAF50;
      color: white;
     }
     .continueBtn:hover {
     background-color: #388e3c;
     }
     hr {
     margin-top: 20px;
     margin-bottom: 20px;
     border: 1px solid #aaa;
     }
     .error {
        color: red;
        font-size: 14px;
        margin-left: 10px;
     }
    </style>
</head>
<body>
    <main>
        <section class="donation-section">

            <?php
            $firstname=$lastname=$company=$address1=$address2=$city=$state=$zip=$country=$phone=$fax=$email=$amount=$otherAmount=$monthlyMonths=$donationType=$honorName=$acknowledge=$honorAddress=$honorCity=$honorState=$honorZip=$additionalName=$comments="";
            $firstnameErr=$lastnameErr=$companyErr=$address1Err=$address2Err=$cityErr=$stateErr=$zipErr=$countryErr=$phoneErr=$faxErr=$emailErr=$amountErr=$otherAmountErr=$monthlyMonthsErr=$donationTypeErr=$honorNameErr=$acknowledgeErr=$honorAddressErr=$honorCityErr=$honorStateErr=$honorZipErr=$additionalNameErr=$commentsErr="";  

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $firstname = test_input($_POST["firstname"] ?? "");
                $lastname = test_input($_POST["lastname"] ?? "");
                $company = test_input($_POST["company"] ?? "");
                $address1 = test_input($_POST["address1"] ?? "");
                $address2 = test_input($_POST["address2"] ?? "");
                $city = test_input($_POST["city"] ?? "");
                $state = test_input($_POST["state"] ?? "");
                $zip = test_input($_POST["zip"] ?? "");
                $country = test_input($_POST["country"] ?? "");
                $phone = test_input($_POST["phone"] ?? "");
                $fax = test_input($_POST["fax"] ?? "");
                $email = test_input($_POST["email"] ?? "");
                $amount = test_input($_POST["amount"] ?? "");
                $otherAmount = test_input($_POST["otherAmount"] ?? "");
                $monthlyMonths = test_input($_POST["monthlyMonths"] ?? "");
                $donationType = test_input($_POST["donationType"] ?? "");
                $honorName = test_input($_POST["honorName"] ?? "");
                $acknowledge = test_input($_POST["acknowledge"] ?? "");
                $honorAddress = test_input($_POST["honorAddress"] ?? "");
                $honorCity = test_input($_POST["honorCity"] ?? "");
                $honorState = test_input($_POST["honorState"] ?? "");
                $honorZip = test_input($_POST["honorZip"] ?? "");
                $additionalName = test_input($_POST["additionalName"] ?? "");
                $comments = test_input($_POST["comments"] ?? "");

                // First Name
                if(empty($firstname)){
                    $firstnameErr="First Name is required";
                } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$firstname)){
                    $firstnameErr="Only letters and white space allowed";
                }

                // Last Name
                if(empty($lastname)){
                    $lastnameErr="Last Name is required";
                } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$lastname)){
                    $lastnameErr="Only letters and white space allowed";
                }

                // Company
                if (!empty($company) && !preg_match("/^[a-zA-Z0-9-' ]*$/", $company)) {
                    $companyErr = "Only letters, numbers and white space allowed";
                }

                // Address 1
                if(empty($address1)){
                    $address1Err="Address 1 is required";
                }

                // Address 2
                if(empty($address2)){
                    $address2Err="Address 2 is required";
                }

                // City
                if(empty($city)){
                    $cityErr="City is required";
                } elseif(!preg_match("/^[a-zA-Z-' ]*$/",$city)){
                    $cityErr="Only letters and white space allowed";
                }

                // State
                if(empty($state)){
                    $stateErr="State is required";
                }

                // Zip
                if(empty($zip)){
                    $zipErr="Zip Code is required";
                } elseif(!preg_match("/^[0-9]*$/",$zip)){
                    $zipErr="Only numbers are allowed";
                }

                // Country
                if(empty($country)){
                    $countryErr="Country is required";
                }

                // Phone
                if(empty($phone)){
                    $phoneErr="Phone is required";
                } elseif(!preg_match("/^[0-9]*$/",$phone)){
                    $phoneErr="Only numbers are allowed";
                }

                // Fax
                if(!empty($fax) && !preg_match("/^[0-9]*$/", $fax)) {
                    $faxErr = "Only numbers are allowed";
                }

                // Email
                if(empty($email)){
                    $emailErr="Email is required";
                } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr="Invalid email format";
                }

                // Amount
                if(empty($amount)){
                    $amountErr="Donation Amount is required";
                }

                // Other Amount
                if (!empty($otherAmount) && !preg_match("/^[0-9]*$/", $otherAmount)) {
                    $otherAmountErr = "Only numbers are allowed";
                }

                // Monthly Months
                if (!empty($monthlyMonths) && !preg_match("/^[0-9]*$/", $monthlyMonths)) {
                    $monthlyMonthsErr = "Only numbers are allowed";
                }  

                // Donation Type    
                if (!empty($donationType) && !in_array($donationType, ['honor', 'memory'])) {
                    $donationTypeErr = "Invalid donation type selected";
                }

                // Honor Name
                if (!empty($honorName) && !preg_match("/^[a-zA-Z-' ]*$/", $honorName)) {
                    $honorNameErr = "Only letters and white space allowed";
                }

                // Acknowledge
                if (!empty($acknowledge) && !preg_match("/^[a-zA-Z-' ]*$/", $acknowledge)) {
                    $acknowledgeErr = "Only letters and white space allowed";
                }

                // Honor Address
                // Not required, but you can add validation if needed

                // Honor City
                if (!empty($honorCity) && !preg_match("/^[a-zA-Z-' ]*$/", $honorCity)) {
                    $honorCityErr = "Only letters and white space allowed";
                }

                // Honor Zip
                if (!empty($honorZip) && !preg_match("/^[0-9]*$/", $honorZip)) {
                    $honorZipErr = "Only numbers are allowed";
                }

                // Additional Name
                if (!empty($additionalName) && !preg_match("/^[a-zA-Z-' ]*$/", $additionalName)) {
                    $additionalNameErr = "Only letters and white space allowed";
                }

                // Comments
                if (!empty($comments) && !preg_match("/^[a-zA-Z0-9-'.,!? ]*$/", $comments)) {
                    $commentsErr = "Only letters, numbers and punctuation are allowed";
                }
            }

            function test_input($data){
                $data=trim($data);
                $data=stripslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }
            ?>
          <div class="all">
            <h2>Donor Information</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                <label for="firstname">First Name*</label>
                 <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>">
                 <span class="error"><?php echo $firstnameErr;?></span>

                <label for="lastname">Last Name*</label>
                 <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>">
                 <span class="error"><?php echo $lastnameErr;?></span>

                <label for="company">Company</label>
                 <input type="text" id="company" name="company" value="<?php echo $company; ?>">
            <span class="error"><?php echo $companyErr;?></span>

                <label for="address1">Address 1*</label>
                <input type="text" id="address1" name="address1" value="<?php echo $address1; ?>">
            <span class="error"><?php echo $address1Err;?></span>
                
                <label for="address2">Address 2*</label>
                <input type="text" id="address2" name="address2" value="<?php echo $address2; ?>">
            <span class="error"><?php echo $address2Err;?></span>
                
                <label for="city">City*</label>
                <input type="text" id="city" name="city" value="<?php echo $city; ?>">
            <span class="error"><?php echo $cityErr;?></span>

                <label for="state">State*</label>
                <select name="state" id="state">
                    <option selected disabled>Select a State</option>
                    <option value="" disabled selected hidden>Select a State</option>
                    <option value="Dhaka" <?php if($state=="Dhaka") echo "selected"; ?>>Dhaka</option>
                    <option value="Khulna"<?php if($state=="Khulna") echo "selected"; ?>>Khulna</option>
                    <option value="Barishal"<?php if($state=="Barishal") echo "selected"; ?>>Barishal</option>
                    <option value="Sylet"<?php if($state=="Sylet") echo "selected"; ?>>Sylet</option>
                    <option value="Chattogram"<?php if($state=="Chattogram") echo "selected"; ?>>Chattogram</option>
                    <option value="Rajshahi"<?php if($state=="Rajshahi") echo "selected"; ?>>Rajshahi</option>
                    <option value="Mymensingh"<?php if($state=="Mymensingh") echo "selected"; ?>>Mymensingh</option>
                    <option value="Bogura"<?php if($state=="Bogura") echo "selected"; ?>>Bogura</option>
                </select> <br>
                <span class="error"><?php echo $stateErr;?></span>

                <label for="zip">Zip Code*</label>
                <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>">
            <span class="error"><?php echo $zipErr;?></span>

                <label for="country">Country*</label>
                <select name="country"  id="country">
                    <option value="" disabled selected hidden>Select a Country</option>
                    <option value="Bangladesh" <?php if($country=="Bangladesh") echo "selected"; ?>>Bangladesh</option>
                    <option value="India"<?php if($country=="India") echo "selected"; ?>>India</option>
                    <option value="Nepal"<?php if($country=="Nepal") echo "selected"; ?>>Nepal</option>
                    <option value="Pakistan"<?php if($country=="Pakistan") echo "selected"; ?>>Pakistan</option>
                    <option value="SriLanka"<?php if($country=="SriLanka") echo "selected"; ?>>Sri-Lanka</option>
                    <option value="Usa"<?php if($country=="Usa") echo "selected"; ?>>USA</option>
                    <option value="Uk"<?php if($country=="Uk") echo "selected"; ?>>UK</option>
                    <option value="Australia"<?php if($country=="Australia") echo "selected"; ?>>Australia</option>
                </select> <br>
                <span class="error"><?php echo $countryErr;?></span>

                <label for="phone">Phone*</label>
                <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
            <span class="error"><?php echo $phoneErr;?></span>
                
                <label for ="fax">Fax</label>
                <input type="text" id="fax" name="fax" value="<?php echo $fax; ?>">
            <span class="error"><?php echo $faxErr;?></span>

                <label for="email">Email*</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr;?></span>

                <label>Donation Amount*</label><br>
            <input type="radio" name="amount" value="None" <?php if($amount=="None") echo "checked"; ?>>None
            <input type="radio" name="amount" value="50" <?php if($amount=="50") echo "checked"; ?>>$50
            <input type="radio" name="amount" value="75" <?php if($amount=="75") echo "checked"; ?>>$75
            <input type="radio" name="amount" value="100" <?php if($amount=="100") echo "checked"; ?>>$100
            <input type="radio" name="amount" value="250" <?php if($amount=="250") echo "checked"; ?>>$250
            <input type="radio" name="amount" value="Other" <?php if($amount=="Other") echo "checked"; ?>>Other
            <span class="error"><?php echo $amountErr;?></span>

                <label for="otherAmount">Other Amount $</label>
                <input type="text" id="otherAmount" name="otherAmount" value="<?php echo $otherAmount; ?>">
            <span class="error"><?php echo $otherAmountErr;?></span>

                <label for="recurringDonation">Recurring Donation</label>
                <input type="checkbox" name="recurringDonation" value="yes"> I am interested in giving regularly.<br>

                <label>Monthly Credit Card $</label>
                <label for="monthlyMonths">Months</label>
            <input type="text" id="monthlyMonths" name="monthlyMonths" value="<?php echo $monthlyMonths; ?>">
            <span class="error"><?php echo $monthlyMonthsErr;?></span> <br>

                <h2>Honorarium and Memorial Donation Information</h2>
            <input type="radio" name="donationType" value="honor" <?php if($donationType=="honor") echo "checked"; ?>>To honor 
            <input type="radio" name="donationType" value="memory" <?php if($donationType=="memory") echo "checked"; ?>> In memory of
            <span class="error"><?php echo $donationTypeErr;?></span>

                <label for="honorName">Name</label>
                <input type="text" id="honorName" name="honorName" value="<?php echo $honorName; ?>">
            <span class="error"><?php echo $honorNameErr;?></span>

                <label for="acknowledge">Acknowledge Donation to</label>
                <input type="text" id="acknowledge" name="acknowledge" value="<?php echo $acknowledge; ?>">
            <span class="error"><?php echo $acknowledgeErr;?></span>

                <label for="honorAddress">Address</label>
                <input type="text" id="honorAddress" name="honorAddress" value="<?php echo $honorAddress; ?>">
            <span class="error"><?php echo $honorAddressErr;?></span>

                <label for="honorCity">City</label>
                <input type="text" id="honorCity" name="honorCity" value="<?php echo $honorCity; ?>">
            <span class="error"><?php echo $honorCityErr;?></span>

                <label for="honorState">State</label>
                <select name="honorState" id="honorState">
                    <option value="" disabled selected hidden>Select a State</option>
                <option value="Dhaka" <?php if($honorState=="Dhaka") echo "selected"; ?>>Dhaka</option>
                <option value="Khulna"<?php if($honorState=="Khulna") echo "selected"; ?> >Khulna</option>
                    <option value="Barishal"<?php if($honorState=="Barishal") echo "selected"; ?>>Barishal</option>
                    <option value="Sylet"<?php if($honorState=="Sylet") echo "selected"; ?>>Sylet</option>
                    <option value="Chattogram"<?php if($honorState=="Chattogram") echo "selected"; ?>>Chattogram</option>
                    <option value="Rajshahi"<?php if($honorState=="Rajshahi") echo "selected"; ?>>Rajshahi</option>
                    <option value="Mymensingh"<?php if($honorState=="Mymensingh") echo "selected"; ?>>Mymensingh</option>
                    <option value="Bogura"<?php if($honorState=="Bogura") echo "selected"; ?>>Bogura</option>
                </select> <br>
            <span class="error"><?php echo $honorStateErr;?></span>

                <label for="honorZip">Zip</label>
            <input type="text" id="honorZip" name="honorZip" value="<?php echo $honorZip; ?>">
            <span class="error"><?php echo $honorZipErr;?></span>

                <h2>Additional Information</h2>
                <label for="additionalName">Additional Name</label>
            <input type="text" id="additionalName" name="additionalName" value="<?php echo $additionalName; ?>">
            <span class="error"><?php echo $additionalNameErr;?></span>

                <input type="checkbox" name="anonymous" value="yes"> I would like my gift to remain anonymous.<br>
                <input type="checkbox" name="matchingGift" value="yes"> My employer offers a matching gift program.<br>
                <input type="checkbox" name="noThanks" value="yes"> Do not mail a thank you letter.<br>

                <label for="comments">Comments</label>
            <textarea id="comments" name="comments"><?php echo $comments; ?></textarea>
            <span class="error"><?php echo $commentsErr;?></span>

                <label>How may we contact you?</label><br>
                <input type="checkbox" name="contact[]" value="email"> E-mail <br>
                <input type="checkbox" name="contact[]" value="postalMail"> Postal Mail <br>
                <input type="checkbox" name="contact[]" value="telephone"> Telephone <br>
                <input type="checkbox" name="contact[]" value="fax"> Fax <br>
                <input type="checkbox" name="newsletter[]" value="email"> Receive Newsletter by E-mail <br>
                <input type="checkbox" name="newsletter[]" value="postalMail"> Receive Newsletter by Postal Mail <br>
                <input type="checkbox" name="volunteer" value="yes"> I would like information about volunteering <br>

                <div class="buttons">
                    <button type="reset" class="resetBtn">Reset</button>
                    <button type="submit" class="continueBtn">Continue</button>
                </div>

        </div>

            </form>
        </section>
    </main>
</body>
</html>