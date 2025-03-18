
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departments</title>
   <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <header>
    <div class="logo"> <img src="dp.jpg"></div>
        <nav>
            <a href="#home" class="active">HOME</a>
            <a href="#tea ">TEACHERS</a>
            <a href="#enrollment">ENROLLMENT</a>
            <a href="#contact">CONTACT</a>
        </nav>
        <div class="agay"> <img src="cpsu3.jpg"></div>
</header>
    <section id="home">
    <div class="container purple">
  <div class="text">
    <div class="p">
        <p>CENTRAL PHILIPPINES STATE UNIVERSITY</p>
    </div>
    <div class="c">
        <p>COLLEGE OF</p>
        <p>COMPUTER STUDIES</p>
    </div>
  </div>
  <img src="dp.jpg" alt="lol" class="logs">
</div>
    </section>
    <section id="home" class = "">
    <div class="con">
  <div class="text">
    <p>Joining here is a great way to gain new skills and advance your career. You'll get expert guidance, practical experience, and opportunities that can open many doors. If you're looking to learn and grow, enrolling in the College of Computer Studies is a smart choice. </p>
    </div>
    <img src="sulod.jpg" alt="College of Computer Studies" class="image">
    </div>

    </section>
    <section id="tea">
        <h1>Teachers Departments</h1>
        <div class="dean">
        <div class="card">
                <img src="dean.jpg" alt="Denny Juan">
                <h3>SHARA MAE R. TEE<BR> MIT</h3>
            </div>
        </div>
            
        <div class="container">
            <div class="card">
                <img src="t1.jpg" alt="Abdul Kean">
                <h3>GLORYBE E. ALEGRE<br>MIT</h3>
            
            </div>
            <div class="card">
                <img src="t2.jpg" alt="Angela Moss">
                <h3>DEBBIE LOU B. ENQUILINO<br>MAED. LPT</h3>

            </div>
            <div class="card">
                <img src="t3.jpg" alt="Afiff Skunder">
                <h3>RAYMOND A. CELIS<br>LPT</h3>

            </div>
            <div class="card">
                <img src="t4.jpg" alt="Anita Queen">
                <h3>FRANCIS IAN R. ADAD</h3>
            
            </div>
            <div class="card">
                <img src="t6.jpg" alt="Abigail Smurt">
                <h3>CHESTER L. COFINO<br>Ph.D</h3>
            </div>
            <div class="card">
                <img src="t7.jpg" alt="Bella Syuqr">
                <h3>JUNE REY L. PALABRICA</h3>

            </div>
            <div class="card">
                <img src="t8.jpg" alt="Benny Gacu">
                <h3>CECILE V. ALBAY</h3>
            
            
            </div>
            <div class="card">
                <img src="t9.jpg" alt="Bella Poco">
                <h3>CHIRISTI MYR L. CHU</h3>
            
            </div>
            <div class="card">
                <img src="t10.jpg" alt="Chloe Simatup..">
                <h3>ANNE AMAHIT ABARILLO</h3>
            
            </div>
            <div class="card">
                <img src="t11.jpg" alt="Denny Juan">
                <h3>MARK JOHN B. SALAO</h3>
            </div>
            <div class="card">
                <img src="t12.jpg" alt="Franklin CS">
                <h3>ORIENT KERR T. DEVERO</h3>
            </div>
        </div>
    <section id="enrollment">
    <div class="contain">
        General Enrollment Inquiry Form
        <h5>Please complete this form and tell us a little about you.<br>We will reach out soon to connect. </h5>
    </div>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="pri">Primary Contact Details</div>
            
            <div class="form-group">
                <label for="salutation">Salutation</label>
                <input type="text" id="salutation" name="salutation">
            </div>
            <div class="form-group">
                <label for="relationship">Relationship *</label>
                <input type="text" id="relationship" name="relationship" required>
            </div>
            <div class="del">Student Details</div>
            
            <div class="form-group">
                <label for="first_name">First Name *</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name *</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="mobile_phone-number">Mobile Phone Number</label>
                <input type="tel" id="mobile_phone_number" name="mobile_phone_number">
            </div>
            <div class="enroll">Enrollment Information</div>
            
            <div class="form-group">
                <label for="year_of_enrollment">Year of Enrollment *</label>
                <input type="text" id="year_of_enrollment" name="year_of_enrollment" required>
            </div>
            <div class="form-group">
                <label for="grade_level_of_entry">Grade Level of Entry *</label>
                <input type="text" id="grade_level_of_entry" name="grade_level_of_entry" required>
            </div>
            <div class="form-group">
                <label for="current_school">Current School</label>
                <input type="text" id="current_school" name="current_school">
            </div>
            <div class="form-group">
                <label for="current_grade_level">Current Grade Level</label>
                <input type="text" id="current_grade_level" name="current_grade_level">
            </div>
            <div class="form-group">
                <label for="how_did_you_first_hear_about_us">How Did You First Hear About Us?</label>
                <input type="text" id="how_did_you_first_hear_about_us" name="how_did_you_first_hear_about_us">
            </div>
            <div class="form-group">
                <label for="additional_information">Please add any additional information or questions here:</label>
                <textarea id="additional_information" name="additional_information"></textarea>
            </div>

            <button type="submit">SUBMIT</button>
        </form>
      
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db_conn.php';
        $salutation = $_POST["salutation"];
        $relationship = $_POST["relationship"];
        $first_name = $_POST["first_name"];
        $date_of_birth = $_POST["date_of_birth"];
        $email = $_POST["email"];
        $last_name = $_POST["last_name"];
        $mobile_phone_number = $_POST["mobile_phone_number"];
        $year_of_enrollment = $_POST["year_of_enrollment"];
        $grade_level_of_entry = $_POST["grade_level_of_entry"];
        $current_school = $_POST["current_school"];
        $current_grade_level = $_POST["current_grade_level"];
        $how_did_you_first_hear_about_us = $_POST["how_did_you_first_hear_about_us"];
        $additional_information = $_POST["additional_information"];

        $sql = "INSERT INTO enrollment(salutation, relationship, first_name, date_of_birth, email, last_name, mobile_phone_number, year_of_enrollment, grade_level_of_entry, current_school, current_grade_level, how_did_you_first_hear_about_us, additional_information)
                VALUES ('$salutation', '$relationship', '$first_name', '$date_of_birth', '$email', '$last_name', '$mobile_phone_number', '$year_of_enrollment', '$grade_level_of_entry', '$current_school', '$current_grade_level', '$how_did_you_first_hear_about_us', '$additional_information')";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        }

        ?>
          </body>
        </html>
    </section>
    <section id="contact">
        <div class="containers">
            <div class="contact-form">
              
                <form id="contactForm" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <h2>Contact Us</h2>
                    <label for="name">Name:</label><br>
                    <input type="text" id="fullname" name="fullname" required><br>
                    <label for="emails">Email:</label><br>
                    <input type="emails" id="emails" name="emails" required><br>
                    <label for="tel">Tel No. :</label><br>
                    <input type="tel" id="tel" name="tel" required><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" required></textarea><br>
                    <button type="button" onclick="submitForm()">Submit</button>
                </form>

                <script>
                    function submitForm() {
                        const form = document.getElementById('contactForm');
                        const formData = new FormData(form);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', form.action, true);
                        xhr.send(formData);

                        xhr.onload = function() {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText);
                                form.reset();
                            } else {
                                console.error('Error:', xhr.statusText);
                            }
                        };
                    }
                </script>

                <?php
                    if (isset($_POST['fullname']) && isset($_POST['emails'])  && isset($_POST['tel']) && isset($_POST['message'])) {
                        include 'db_conn.php';
                        $name = $conn->real_escape_string($_POST['fullname']);
                        $emails = $conn->real_escape_string($_POST['emails']);
                        $tel = $conn->real_escape_string($_POST['tel']);
                        $message = $conn->real_escape_string($_POST['message']);

                        $sql = "INSERT INTO contact (fullname, emails, tel, message) VALUES ('$name', '$emails', '$tel', '$message')";

                        if ($conn->query($sql) === TRUE) {
                            echo "Inserted successfully";
                        } else {
                            echo "Error inserting form data: ". $conn->error;
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    </section>
    </section>
    </section>
    <script src="script.js"></script>

  
    
</body>
</html>