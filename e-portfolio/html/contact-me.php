<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="../css/contact-me.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
     <header>
        <nav>
            <div class="logo">
                <a href="../index.html"> ASIF </a>
            </div>
            <div class="list">
                <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="education.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="project.html">Project</a></li>
                <li><a href="contact-me.html">Contact Me</a></li>
            </ul>
            </div>
        </nav>
    </header>

    <main>
       <section>
        <form class="form-contain" method="get">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
    
        <div class="form-group">
            <label for="reason">Reason for contact:</label>
            <input type="radio" name="reason" value="other" required>Other
            <input type="radio" name="reason" value="job" required>Job
            <input type="radio" name="reason" value="thesis" required>Thesis
            <input type="radio" name="reason" value="meet and greet" required>Meet and Greet
        </div>

        <div class="form-group">
            <label for="services">Services:</label>
            <input type="radio" name="services" value="consulting" required>Consulting
            <input type="radio" name="services" value="project" required>Project
            <input type="radio" name="services" value="design" required>Design
        </div>

        <div class="form-group">
            <label for="hiring">Are you contacting for hiring?</label>
            <input type="radio" name="hiring" value="yes">Yes
            <input type="radio" name="hiring" value="no">No
        </div>

        <div class="form-group">
            <label for="job_position">Enter your job position:</label>
            <select id="job_position" name="job_position">
                <option selected disabled>Enter your job</option>
                <option value="HR">HR</option>
                <option value="CEO">CEO</option>
                <option value="manager">Manager</option>
                <option value="Other">other</option>
            </select>
        </div>
        <div class="formBtn">
                <input id="submitBtn" type="submit" value="Submit">
            </div>

      </form>
     </section>
    </main>
 

     <footer>
        
        <div class="socialLink">
            <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=app" target="_blank"><img src="../image/email.png" width="20px" alt="email"></a>
            <a href="https://www.linkedin.com/in/asif-sayed-847194281/" target="_blank"><img src="../image/linkedin logo.png "width="30px" alt="linkedin"></a>
            <a href="https://www.instagram.com/asif_sayed_2580/" target="_blank"><img src="../image/instragram.png" width="30px" alt="instagram"></a>
            <a href="https://www.facebook.com/asif.sayed.talukder" target="_blank"><img src="../image/Facebook.png" width="20px" alt="FaceBook"></a>
        </div>
        <div class="copyRight">
            <p>&copy; 2025 Asif Sayed. All rights reserved.</p>

        </div>
    </footer>
</body>
</html>
