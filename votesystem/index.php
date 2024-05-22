<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartPolling Voting System</title>
    <link rel="website icon" type="png" href="./images/logo.jpg">
    <link rel="stylesheet" href="./plugins/styleee.css">
    <link rel="stylesheet" href="./plugins/bootstraps.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./plugins/fontawesome-all.min.css">
    <link rel="stylesheet" href="./plugins/w.css">
    <style>
        /* Add animation classes */
        .upcoming-show {
            animation: slideInUP 0.5s forwards;
        }

        .pastelection-show {
            animation: slideInUp 0.5s forwards;
        }   

        @keyframes slideInUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideOutDown {
            from {
                transform: translateY(0);
                opacity: 1;
            }
            to {
                transform: translateY(100%);
                opacity: 0;
            }
        }
    </style>
    <script src="./dist/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#upcoming-btn").click(function() {
                $("#upcoming").show();
                $("#pastelection").hide();
            });

            $("#pastelecation-btn").click(function() {
                $("#pastelection").show();
                $("#upcoming").hide();
            });

            $("#closeall-btn").click(function() {
                $("#upcoming").hide();
                $("#pastelection").hide();
            });

        });
    </script>
</head>
<body>
    <!------------- NAVIGATION BAR ------------->
    <nav class="navbar">
        <div class="navbar-container containers">
            <ul class="menu-items">
                <li><a href="#hero" >Home</a></li>
                <li><a href="#features">Key Features</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="admin/index.php">Admin</a></li>
                <li><a href="./login.php">Voters</a></li>
                <!-- <li><a href="./candidate/registration.php">Candidate</a></li> -->
            </ul>
            <div class="brand">
            <img src="./images/logo.jpg" alt="logo" srcset="" style="width: 50px;">
            <h1 class="logo">SmartPolling</h1>
            </div>
        </div>
    </nav>

    <!------------- HERO SECTION ------------->
    <section id="hero">
        <div id="hero-container">

            <div id="bg">
                <div id="color-overlay"></div>
            </div>
            
            <div class="sitetitle">
                <h1 id="hero-title">Welcome to SmartPolling</h1>
                <h2 id="hero-subtitle">Secure, Transparent, Online Voting</h4>
                <p id="hero-content">
                    We are thrilled to have you as part of our democratic journey, where your voice matters. With OV, we have revolutionized the way we participate in elections by bringing the power of technology and convenience to your fingertips.
                    <br />
                    <br />
                    SmartPolling Voting System ensures the highest standards of security and privacy. We have implemented robust encryption protocols and advanced authentication mechanisms to safeguard your information and maintain the integrity of the voting process. Rest assured that your vote is anonymous, and your personal data remains confidential.
                </p>
                <a href="./login.php" class="hero-button">Vote Now!</a>
            </div>
        </div>
    </section>

    <!-- up coming and past election -->
    
    <div class="uppast-election">
        <div class="uppast-nav">
            <p class="nav-point" id="upcoming-btn">UP Comming Elecation</p>
            <p class="nav-point" id="pastelecation-btn">Past Election</p>
            <p class="nav-point" id="closeall-btn">Close all</p>
        </div>
    </div>



    <!------------- Up Coming Voting ------------->

    <!-- <div class="w3-dropdown-click upcoming-show" id="upcoming">
        <button onclick="myFunction()" class="w3-button">Click for Upcoming Election</button> -->
    <div id="upcoming">
        <div id="demo" class="upcoming-show">
            <div id="ad-container" class="up-detail upcoming-drop">
                <span class="logo-lg " style="background-color: #202020 ; color: #E5E5E5 ; font-size: 22px; font-family:Times; padding: 1% 0 0 0; letter-spacing: 2px; "><marquee behavior="scroll"  direction="left"><b style="color:red"><b style="font-size:medium; ">&#128308;</b>LIVE</b> Online Voting for Rajhans Bunglows </marquee></span>
                <h3 class="upcoming-title">Up Coming Election</h3>  
                <!-- <img src="./images/Bootstrap_logo.svg.png" alt="Advertisement"> -->
                <div class="upcoming-para">
                Participate in the upcoming society secretary election hosted by SmartPolling. This is an exclusive opportunity for society members to choose their next leader and drive positive change within our community.
                </div>
                <div class="upcoming-event">
                    <div class="event-info">
                        <div class="info">
                            <p class="info-title">Title :</p>
                            <p class="infotitle-value">Rajhans Bunglows Secretary Election</p>
                        </div>
                        <div class="info-datetime">
                            <p class="info-title">Date and Time:</p>
                            <p class="infotitle-value">April 15th - April 20th, 2024</p>
                        </div>
                    </div>
                    <div class="candidate-info">
                        <h3 class="candidate-heading">Candidate Information</h3>
                       <div class="cand-info">
                            <table style="width: 100%;"> 
                                <tr>
                                    <th class="can-tab-head">Candidate Name</th>
                                    <th class="can-tab-head">Position</th>
                                </tr>
                                <tr>
                                    <td class="can-tab">
                                        <?php  
                                            include './includes/conn.php';
                                            $query = "SELECT firstname,lastname FROM candidates"; 
                                            $result = mysqli_query($conn, $query);
                                            // Check if query was successful
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                // Loop through the results and display each candidate name
                                                $row = mysqli_fetch_assoc($result);
                                                // Display the first name of the first candidate
                                                echo "<p class='candidate-name'>" . $row['firstname'], $row['lastname']  . "</p>";                                    
                                            } else {
                                                echo "No candidates found.";
                                            }

                                            // Close connection
                                            mysqli_close($conn); 
                                        ?>
                                    </td>
                                    <td class="can-tab">
                                        <?php  
                                            include './includes/conn.php';
                                            $query = "SELECT description FROM positions"; 
                                            $result = mysqli_query($conn, $query);
                                            // Check if query was successful
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                // Loop through the results and display each candidate name
                                                $row = mysqli_fetch_assoc($result);
                                                // Display the first name of the first candidate
                                                echo "<p class='candidate-name'>" . $row['description'] . "</p>";                                    
                                            } else {
                                                echo "No candidates found.";
                                            }
                                            // Close connection
                                            mysqli_close($conn); 
                                        ?>
                                    </td>
                                    <tr>
                                    <td class="can-tab">
                                        <?php  
                                            include './includes/conn.php';
                                            $query = "SELECT firstname,lastname FROM candidates LIMIT 1 OFFSET 1"; 
                                            $result = mysqli_query($conn, $query);
                                            // Check if query was successful
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                // Loop through the results and display each candidate name
                                                $row = mysqli_fetch_assoc($result);
                                                // Display the first name of the first candidate
                                                echo "<p class='candidate-name'>" . $row['firstname'], $row['lastname']  . "</p>";                                    
                                            } else {
                                                echo "No candidates found.";
                                            }

                                            // Close connection
                                            mysqli_close($conn); 
                                        ?>
                                    </td>
                                    <td class="can-tab">
                                        <?php  
                                            include './includes/conn.php';
                                            $query = "SELECT description FROM positions"; 
                                            $result = mysqli_query($conn, $query);
                                            // Check if query was successful
                                            if ($result && mysqli_num_rows($result) > 0) {
                                                // Loop through the results and display each candidate name
                                                $row = mysqli_fetch_assoc($result);
                                                // Display the first name of the first candidate
                                                echo "<p class='candidate-name'>" . $row['description'] . "</p>";                                    
                                            } else {
                                                echo "No candidates found.";
                                            }
                                            // Close connection
                                            mysqli_close($conn); 
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<!------------- Past Coming Voting ------------->

<div id="pastelection" class="pastelection-show">
    <div id="past-container" class="past-info">
        <h3 class="past-heading">Past Election</h3>
        <div class="pastevent">
            <table class="past-table">
                <tr>
                    <th class="title">Last Election</th>
                    <th class="past-value">25-Jan-2023</th>
                </tr>
                <tr>
                    <th class="title">Society Name</th>
                    <th class="past-value">Aashapura co. op. Society, Ahmedabad</th>
                </tr>
                <tr>
                    <th class="title">Position</th>
                    <th class="past-value">President</th>
                </tr>
                <tr>
                    <th class="title">Winner Candidate</th>
                    <th class="past-value">Shyamlal Mukharji</th>
                </tr>
            </table>
        </div>
    </div>
</div>


<!------------- Key Features ------------->
<!-- <div id="features">
    <h3 class="key-title">Key Features</h3>
    <div class="features-points">
        <div class="features-point">
            <div class="img-points">
                <img src="./logo/secureandencrypt.png" alt="" class="points-img ">
                <p class="points"><b>Secure and Encrypted:</b> Our platform ensures the highest standards of security and encryption to safeguard the integrity of the voting process and protect voter privacy.
                </p>
            </div>
            <div class="img-points">
                <img src="./logo/userfriendly.png" alt="" class="points-img ">
                <p class="points"><b>User-Friendly Interface:</b> With an intuitive and easy-to-use interface, voters can cast their ballots  conveniently from any device with internet access, ensuring maximum participation.
                </p>
            </div>
            <div class="img-points">
                <img src="./logo/real-timeresualt.png" alt="" class="points-img ">
                <p class="points"><b>Real-Time Results:</b> Get instant access to real-time voting results and analytics, enabling organizers to monitor the progress of elections and make informed decisions.
                </p>
            </div>
            <div class="img-points">
                <img src="./logo/coustomizebleballots.png" alt="" class="points-img ">
                <p class="points"><b>Customizable Ballots:</b> Create customizable ballots with options for various types of elections, from student council elections to corporate board elections.
                </p>
            </div>
        </div>
    </div>
</div> -->

<div id="features">
    <h3 class="features-heading">KEY FEATURE</h3>
    <div class="feature-card flip-box-inner">
        <div class="feature-info">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="./logo/secureandencrypt.png" alt="Secure and Encrypted" style="width:150px;">
                    </div>
                    <div class="flip-box-back">
                        <h2>Secure and Encrypted</h2>
                        <p>Our platform ensures the highest standards of security and encryption to safeguard the integrity of the voting process and protect voter privacy.</p>
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="./logo/userfriendly.png" alt="Secure and Encrypted" style="width: 150px;">
                    </div>
                    <div class="flip-box-back">
                        <h2>User-Friendly Interface</h2>
                        <p>With an intuitive and easy-to-use interface, voters can cast their ballots  conveniently from any device with internet access, ensuring maximum participation.</p>
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="./logo/real-timeresualt.png" alt="Secure and Encrypted" style="width:150px;">
                    </div>
                    <div class="flip-box-back">
                        <h2>Real-Time Results</h2>
                        <p>Get instant access to real-time voting results and analytics, enabling organizers to monitor the progress of elections and make informed decisions.</p>
                    </div>
                </div>
            </div>
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                    <img src="./logo/coustomizebleballots.png" alt="Secure and Encrypted" style="width: 150px;">
                    </div>
                    <div class="flip-box-back">
                        <h2>Customizable Ballots:</h2>
                        <p>Create customizable ballots with options for various types of elections, from student council elections to corporate board elections.</p>
                    </div>
                </div>
            </div>                               
        </div>
    </div>
</div>





<!------------- ABOUT US SECTION ------------->
<section id="about">
    <div class="main">
        <img src="./images/logo.jpg" alt="Ballot box">
        <div class="about-text">
            <h1 style="color: #fca311;">Choose Wisely!</h1>
            <p>At SmartPolling, we believe in the power of democracy and the importance of accessible and secure voting systems. Our online voting system is designed to revolutionize the way elections are conducted, making the process more convenient, transparent, and trustworthy for voters and organizers alike.
                <br />
                <br />
                Thank you for choosing SmartPolling as your trusted e-voting partner. Together, let us embark on this exciting digital voyage and create a future where every citizen's voice is heard and every vote matters.
            </p>
            <br />
            <br /> 
        </div>
    </div>
</section>

<!------------- CONTACT US SECTION ------------->
<section id="contact">
    <div class="section-header">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or need support? Our team is here to help! Contact us at for assistance.</p>
            <p>If you want to voting services from any other socicty and for your organitation so contact out team. we givean below.</p>
        </div>
    </div>
        
    <div class="form-contact containers">
        <div class="row">
            
            <div class="contact-info">
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="material-icons">phone</i>
                    </div>
                    
                    <div class="contact-info-content">
                        <h4>Phone</h4>
                        <p>+91 912-345-6789</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-info-icon">
                        <i class="material-icons">email</i>
                    </div>
                    
                    <div class="contact-info-content">
                        <h4>Email</h4>
                        <p>support@SmartPolling.com</p>
                    </div>
                </div>
            </div>
            
            <div class="contacts-form">
                <form action="" id="contact-form">
                    <h2>Send Message</h2>
                    <div class="input-box">
                        <input type="text" required="true" name="">
                        <span>Full Name</span>
                    </div>
                    
                    <div class="input-box">
                        <input type="email" required="true" name="">
                        <span>Email</span>
                    </div>
                    
                    <div class="input-box">
                        <textarea required="true" name=""></textarea>
                        <span>Type your Message...</span>
                    </div>
                    
                    <div class="input-box">
                        <input type="submit" value="Send" name="">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>

<!------------- FOOTER ------------->
<footer>
    <p></a>  © 2023 | ROBOT</p>
</footer>
    
    <script>
        function myFunction() {
            var x = document.getElementById("demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            } else { 
                x.className = x.className.replace(" w3-show", "");
            }    
        }

        // upcoming and past elecation
    
        document.addEventListener("DOMContentLoaded", function() {
            var floorplanhide = document.getElementById("upcoming");
            if (floorplanhide) {
                floorplanhide.style.display = "none"; 
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            var imageshide = document.getElementById("pastelection");
            if (imageshide) {
                imageshide.style.display = "none";    
            }
        });

        $(document).ready(function() {
            $("#upcoming-btn").click(function() {
                $("#upcoming").addClass("upcoming-show");
                $("#pastelection").removeClass("upcoming-show hide-section");
            });

            $("#pastelecation-btn").click(function() {
                $("#pastelection").addClass("upcoming-show");
                $("#upcoming").removeClass("upcoming-show hide-section");
            });

            $("#closeall-btn").click(function() {
                $("#upcoming, #pastelection").addClass("hide-section");
            });
        });

</script>

</body>
</html>