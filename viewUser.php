<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="viewUser.css">
    <!-- <script src="https://kit.fontawesome.com/b45304ffc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="viewUser.css" rel="stylesheet"> -->
</head>


<body>
    <div class="wrapper">
        <header>
            <div class="logo">
                <a href="https://bup.edu.bd/" target="_blank">
                    <img src="/Arpa/images/Bup_logo.png">
                </a>
            </div>

            <div class="loginout">
                <img src="/Arpa/images/login.png"></a>
                <h1>Admin</h1>
                <div class="drop"><a href=""><img src="/Arpa/images/droparrow.png"></a></div>
            </div>
            <div3 class="bup">
                <p>Bangladesh University Of Professionals</p>
            </div3>
            <div class="topnav">
                <a class="active" href="admin_home.php">Home</a>

                <!-- <a href="#contact">Protocols</a> -->
                <a href="#contact">Messages</a>
                <div class="open-button" onclick="openForm()">Protocols</div>
                <div class="openBtn" onclick="openSearch()">View User</div>
            </div>
            <div class="formpop">
                <div class="form-popup" id="myForm">
                    <form action="#" class="form-containerrrr">


                        <label for="email"><b>Renewal Time</b></label>
                        <input type="password" placeholder="Enter days" name="email" required style="width: 250px;">

                        <label for="psw"><b>Fine</b></label>
                        <input type="password" placeholder="Enter tk/day" name="psw" required style="width: 250px;">

                        <button type="submit" class="btn">Update Protocols</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                    </form>
                </div>
            </div>
            <div class="library_logo">
                <img src="/Arpa/images/girl.png" alt="">
            </div>
            <div class="acc_info">
                <p><u>User Information:</u>&nbsp &nbsp &nbsp &nbsp Library ID:&nbsp
                    <input type="text" value="2054901000" readonly
                        style="color: grey; width: 130px; height: 25px; font-weight: bolder; border-radius: 10px;">
                </p>
            </div>
            <div6 class="sear">
                <div class="d-flex justify-content-center h-100">
                    <div class="search">
                        <input type="text" class="search-input" placeholder="Search User ID " name="">
                        <a href="#" class="search-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div6>
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close ">??</span>
                <div class="overlay-content">
                    <form action="viewUser.php">
                        <input type="text" placeholder="Search User ID" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <script>
            function openSearch() {
                document.getElementById("myOverlay").style.display = "block";


            }


            function closeSearch() {
                document.getElementById("myOverlay").style.display = "none";
            }
            </script>
    </div>
    <div class="form-container">

        <form name="frmContact" id="" frmContact"" method="post" action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">
            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        <span id="firstName-info" class="info"></span>
                    </div>
                    <input type="text" readonly class="input-field" placeholder="Name : User" name="contact-first-name"
                        id="contact-first-name" />
                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        <span id="lastName-info" class="info"></span>
                    </div>
                    <input type="text" readonly class="input-field" placeholder="Contact : 01*********"
                        name="contact-last-name" id="contact-last-name" />
                </div>
            </div>
            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        <span id="email-info" class="info"></span>
                    </div>
                    <input type="text" readonly class="input-field" placeholder="Mail : user@gmail.com"
                        name="contact-email" id="contact-email" />
                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        <span id="phone-info" class="info"></span>
                    </div>
                    <input type="text" readonly class="input-field" placeholder="Address : Mirpur DOHS, Dhaka"
                        name="contact-phone" id="contact-phone" />
                </div>
            </div>
            <div class="row">
                <div class="inline-block right-margin">
                    <div class="label">
                        <span id="email-info" class="info"></span>
                    </div>
                    <div class="button3"><a class="btn btn-default" href="bookhistory.php" role="button"
                            style="text-decoration: none;">
                            <div class="bcolor3">Book History</div>
                        </a>
                    </div>

                </div>
                <div class="inline-block responsive">
                    <div class="label">
                        <span id="phone-info" class="info"></span>
                    </div>
                    <div class="button33"><a class="btn btn-default" href="fine.php" role="button"
                            style="text-decoration: none; font-weight: bolder;">
                            <div class="bcolor33">Fine</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="inline-block responsive">
                <div class="label">
                    <span id="phone-info" class="info"></span>
                </div>
                <input type="text" readonly class="input-field" placeholder="Message" name="contact-phone"
                    id="contact-phone" style="width:580px ; text-align: center;" />
            </div>
    </div>





    </form>





    </div>
    <script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    </script>

    <script type="text/javascript" src="owl.carousel.js"></script>
    <script src="assets/js/form.js" type="text/javascript"></script>

    </div>




    </header>
    <section>

    </section>
    <footer>

    </footer>

</body>

</html>
</body>

</html>