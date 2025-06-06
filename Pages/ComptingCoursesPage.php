<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computing Courses</title>
    <link rel="icon" type="image/webp" href="../Assets/Images/Favicon.webp" />
    <link rel="stylesheet" href="../Styles/Style.css" />
    <script src="../Scripts/Script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="main-container">
        <!--  top navigation bar -->
        <nav class="navbar">
            <img src="../Assets/Images/logo.webp" alt="Cantor College Logo" />

            <div class="nav-links">
                <a href="index.html" id="normal-link">HOME</a>

                <div class="dropdown">
                    <button class="dropbtn">
                        INFORMATION
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <div class="header"></div>
                        <div class="row">
                            <div class="column">
                                <h3>INFORMATION FOR</h3>
                                <a href="BusinessPage.html">Business</a>
                                <a href="StaffPage.html">Staff</a>
                            </div>

                            <div class="column">
                                <h3>LEARNING RESOURCES</h3>
                                <a href="RulesGoverningPage.html">Rules Governing The Use Of The Resource Services</a>
                            </div>

                            <div class="column">
                                <h3>FACILITIES</h3>
                                <a href="AllFacilitiesPage.html">All Facilities</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">
                        COURSES
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <div class="header"></div>
                        <div class="row">
                            <div class="column">
                                <h3>COMPUTING COURSES</h3>
                                <a href="ComptingCoursesPage.php">Computing</a>
                            </div>

                            <div class="column">
                                <h3>DESIGNING COURSES</h3>
                                <a href="DesignCoursesPage.php">Design</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">
                        FOR STUDENTS
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <div class="header"></div>
                        <div class="row">
                            <div class="column">
                                <h3>ACADEMIC INFORMATION</h3>
                                <a href="DummyLinkPage.html">Faculties</a>
                                <a href="DummyLinkPage.html">Departments</a>
                                <a href="DummyLinkPage.html">Library + Learning Resource Services</a>
                                <a href="DummyLinkPage.html">Academic Partners</a>
                                <a href="DummyLinkPage.html">Research</a>
                            </div>

                            <div class="column">
                                <h3>ADMINISTRATIVE SUPPORT</h3>
                                <a href="DummyLinkPage.html">Academic Registry</a>
                                <a href="DummyLinkPage.html">Student Guide To Regulations</a>
                            </div>

                            <div class="column">
                                <h3>STUDENT SERVICES</h3>
                                <a href="DummyLinkPage.html">Advisory + Counselling Centre</a>
                                <a href="DummyLinkPage.html">Health Centre</a>
                                <a href="DummyLinkPage.html">Multi-Fath Centre</a>
                                <a href="DummyLinkPage.html">Pre-School Centre</a>
                                <a href="DummyLinkPage.html">Sports Centre</a>
                            </div>

                            <div class="column">
                                <h3>UNIVERSITY SERVICES</h3>
                                <a href="DummyLinkPage.html">Catering Services</a>
                                <a href="DummyLinkPage.html">Printing Services</a>
                                <a href="DummyLinkPage.html">Student Accommodation Services</a>
                            </div>

                            <div class="column">
                                <h3>LIFE AT UNIVERSITY</h3>
                                <a href="DummyLinkPage.html">Arts Centre</a>
                                <a href="DummyLinkPage.html">Students' Union</a>
                                <a href="DummyLinkPage.html">University Guide</a>
                                <a href="DummyLinkPage.html">Campus Navigator</a>
                            </div>

                            <div class="column">
                                <h3>COMMUNICATIONS</h3>
                                <a href="DummyLinkPage.html">Noticeboards</a>
                                <a href="DummyLinkPage.html">Student Email Search</a>
                                <a href="DummyLinkPage.html">Staff Search</a>
                                <a href="DummyLinkPage.html">A to Z List Of Service</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="AboutUs.html" id="normal-link">ABOUT US</a>
            </div>
        </nav>
        <!-- end of top navigation bar -->

        <!--  main content -->
        <div class="Computing-container">
            <h3 class="Computing-Header">Computing</h3>
            <p class="Computing-Text">
                The College offers a range of courses to suit applicants with varying backgrounds and educational
                abilities. At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer
                Networks, Software Engineering and Cyber Security with Forensics amongst others.
                <br>
                <br>
                The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including
                computer science, software development, information systems, networking and software engineering. It is
                at the heart of a passionate computing community, including student societies devoted to games
                development, digital forensics and programming.
                <br>
                <br>
                The courses are British Computer Society accredited and are highly relevant to modern industry. They are
                designed to prepare students for professional occupations in Computing and related fields. Many
                graduates continue their studies to pursue a higher degree such as an MSc. or PhD.
            </p>

            <br>

            <!------------------------------------------------------ Database Table PHP + CSS ------------------------------------------------------------------------------------>
            <table class="course-table">
                <thead>
                    <tr>
                        <th>Course Title</th>
                        <th>Course Type</th>
                        <th>Summary</th>
                        <th>Award</th>
                        <th>Required Ucas Points</th>
                        <th>Study Type</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "cantor_courses";

                    // connection
                    $connection = new mysqli($servername, $username, $password, $database);

                    // check connection
                    if ($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // read all row from database table
                    $sql = "SELECT * FROM course_list WHERE CourseTitle LIKE '%Comput%' OR CourseTitle LIKE '%Software%' OR CourseTitle LIKE '%Cyber%'";
                    $result = $connection->query($sql);

                    // check if query was executed correctly
                    if (!$result) {
                        die("Invalid query: " . $connection->connect_error);
                    }

                    // read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                <td>" . $row["CourseTitle"] . "</td>
                <td>" . $row["CourseType"] . "</td>
                <td>" . $row["CourseSummary"] . "</td>
                <td>" . $row["CourseAwardName"] . "</td>
                <td>" . $row["UcasPoints"] . "</td>
                <td>" . $row["ModeOfAttendance"] . "</td>
            </tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- end of main content -->

            <!--  footer -->
            <div class="footer">

                <img src="../Assets/Images/Favicon.webp" alt="Cantor College Logo" />

                <pre>
                Cantor College,
                Main Street, Sheffield
                SC4 2BB
            </pre>

                <h3>How To Find Us</h3>

                <pre>
                Tel: (01321) 2340 235,
                Fax: (01321) 2340 236,
                Email: info@cantorcollege.ac.uk
            </pre>
            </div>
        </div>
</body>

</html>