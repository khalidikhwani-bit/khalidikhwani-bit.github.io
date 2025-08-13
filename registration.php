<!-- registration.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Al Hikma Islamic Online Academy</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo"><a href="index.html">Al-Hikma Islamic Academy</a></div>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="courses.html">Courses</a></li>
                <li><a href="registration.php">Registration</a></li>
            </ul>
        </div>
    </nav>

    <section class="registration-form">
        <div class="form-container">
            <h2>Student Registration</h2>
            <?php if(isset($_GET['success'])): ?>
                <div class="success-message">
                    Registration successful! We'll contact you soon.
                </div>
            <?php endif; ?>
            <form action="process_registration.php" method="POST">
                <div class="form-group">
                    <label for="fullname">Full Name*</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">WhatsApp Number*</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                
                <div class="form-group">
                    <label for="country">Country*</label>
                    <input type="text" id="country" name="country" required>
                </div>
                
                <div class="form-group">
                    <label for="course">Course Interested In*</label>
                    <select id="course" name="course" required>
                        <option value="">Select a course</option>
                        <option value="Arabic Language">Arabic Language (Higaad)</option>
                        <option value="Quran">Quran (Recitation, Tajweed, Tafseer)</option>
                        <option value="Islamic Tarbiyah">Islamic Tarbiyah</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="student_age">Student Age*</label>
                    <select id="student_age" name="student_age" required>
                        <option value="">Select age group</option>
                        <option value="5-12">5-12 years (Children)</option>
                        <option value="13-19">13-19 years (Teens)</option>
                        <option value="20+">20+ years (Adults)</option>
                    </select>
                </div>
                
                <button type="submit" class="submit-btn">Register Now</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>COPYRIGHT © 2024 Al-hikma Islamic Academy ALL RIGHTS RESERVED</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>