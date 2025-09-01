<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <main>
        <section class="donation-section">
            <h2>Donor Information</h2>
            <form method="get">
                <label>First Name*</label>
                <input type="text" name="firstname" required><br>

                <label>Last Name*</label>
                <input type="text" name="lastname" required><br>

                <label>Company*</label>
                <input type="text" name="Company"><br>

                <label>Address 1*</label>
                <input type="address" name="address"><br>
                
                <label>Address 2*</label>
                <input type="address" name="address"><br>
                
                <label>City*</label>
                <input type="text" name="City"><br>

                <label>State*</label>
                    <select name="state" id="state" required>
                        <option selected disabled>Select a State</option>
                        <option value="dhaka" required>Dhaka</option>
                        <option value="khulna">Khulna</option>
                        <option value="barishal">Barishal</option>
                        <option value="sylet">Sylet</option>
                        <option value="chattogram">Chattogram</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="mymensingh">Mymensingh</option>
                        <option value="bogura">Bogura</option>
                    </select> <br>

                <label>Zip Code*</label>
                <input type="text" name="zip"> <br>

                <label>Country*</label>
                <select name="country" id="countrySelect" required>
                        <option selected disabled>Select a Country</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="india">India</option>
                        <option value="nepal">Nepal</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="sriLanka">Sri-Lanka</option>
                        <option value="usa">USA</option>
                        <option value="uk">UK</option>
                        <option value="australia">Australia</option>
                    </select> <br>


                <label>Phone*</label>
                <input type="number" name="phone" required> <br>

                <label>Fax</label>
                <input type="number" name="fax"> <br>

                <label>Email*</label>
                <input type="text" name="Email" required> <br>

                <label class="donationAmount">
                    <label for="donationAmount">Donation Amount* </label>
                    <input type="radio" name="Amount" id=""> None
                    <input type="radio" name="Amount" id=""> $50
                    <input type="radio" name="Amount" id=""> $75
                    <input type="radio" name="Amount" id=""> $100
                    <input type="radio" name="Amount" id=""> $250
                    <input type="radio" name="Amount" id=""> Other
                    <label for="statement"> <br>
                        (Check a button or type In your amount)</label>
                </label> <br>

                <label class="otherAmount">
                    <label for="otherAmount">Other Amount $ </label>
                    <input type="number" name="amount" id="amount">
                </label> <br>

                <label class="recurringDonation">
                    <label for="recurringDonation">Recurring Donation </label>
                    <input type="checkbox" name="recurringDonation" id="recurringDonation"> I am interested in giving on a regular basis.
                </label> <br>
                <label class="monthlyCreditCard">
                    <label for="monthlyCreditCard">Monthly Credit Card $</label>
                    <input type="number" name="money" id=""> For 
                    <input type="number"> Months
                </label>
               
                <!-- Honorarium and Memorial Donation Information.😎😎😎😎😎😎😎😎 -->

              <h2>Honorarium and Memorial Donation Information</h2> 
              <label class="donationFor">
                <label for="donationFor">I would like to make this donation</label>
                <input type="radio" name="donationFor" value="toHonor"> To Honor <br>
                <input type="radio" name="donationFor" value="inMemoryOf"> In Memory of <br>
              </label>

              <label>Name</label>
              <input type="text" name="firstname"><br>

              <label>Acknowledge Donation to</label>
              <input type="text" name="acknowledgeDonation"> <br>

              <label>Address</label>
              <input type="text" name="address"><br>

              <label>City</label>
              <input type="text" name="city"><br>

              <label>State</label>
                <select name="state" id="state">
                <option selected disabled>Select a State</option>
                        <option value="dhaka" required>Dhaka</option>
                        <option value="khulna">Khulna</option>
                        <option value="barishal">Barishal</option>
                        <option value="sylet">Sylet</option>
                        <option value="chattogram">Chattogram</option>
                        <option value="rajshahi">Rajshahi</option>
                        <option value="mymensingh">Mymensingh</option>
                        <option value="bogura">Bogura</option>
                </select> <br>

                <label>Zip</label>
                <input type="text" name="zip"> <br>
                

                <!-- Additional Information 😒😒😒😒😒😒😒😒😒😒 -->


                <h2>Additional Information </h2>

                <div class="additionalInfo">
                <p>Please enter your name, company or organization as you would like it to appear in our publications:
                </p>
                <div class="additionalInfoName">
                    <label for="additionalInfoName">Name </label>
                    <input type="text" name="name" id="additionalInfo">
                </div>
                <div class="additionalInfoCheckBox">
                    <input type="checkbox" name="" id="">I would like my gift to remain anonymous.
                    <br>
                    <input type="checkbox">My employer offers a matching gift program. I will mail the matching gift
                    form.
                    <br>
                    <input type="checkbox">Please save the cost of acknowledging this gift by not mailing a thank you
                    letter.
                </div>
                <div class="comments">
                    <label for="comments">Comments </label>
                    <p>(Please type any questions or feedback here)</p>
                    <textarea id="comment" name="comment" rows="10" cols="50"></textarea>
                </div>
                <div class="contact">
                    <label for="contact">How may we contact you?</label>
                    <input type="checkbox" name="email" id="contactEmail"> E-mail <br>
                    <input type="checkbox" name="postalMail" id="postalMail"> Postal Mail <br>
                    <input type="checkbox" name="telephone" id="telephone"> Telephone <br>
                    <input type="checkbox" name="fax" id="fax"> Fax <br>
                    <p>I would like to receive newsletters and information about special events by:</p>
                    <input type="checkbox" name="receiveEmail" id="receiveEmail"> E-mail <br>
                    <input type="checkbox" name="receivePostalMail" id="receivePostalMail">Postal Mail <br>
                    <input type="checkbox" id="volunter">I would like information about volunteering with the
                    <hr>
                </div>
            </div>
            <div class="buttons">
                <button class="resetBtn button">Reset</button>
                <button class="continueBtn button">Continue</button>
            </div>

            </form>
        </section>
    </main>
</body>
</html>