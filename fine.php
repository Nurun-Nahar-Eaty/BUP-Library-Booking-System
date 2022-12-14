<!DOCTYPE html>
<html>

<head>

    <title>Bookhistory</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/b45304ffc2.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>
    <link rel="stylesheet" href="bookhistory.css">







    <style type="text/css">
    section {
        margin-top: -20px;
    }
    </style>
</head>

<body>

    <nav class="navbar navbar" style="background-color: #B8E2FA;">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="/SRE/images/bup.png" id="Buplogo">
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="https://bup.edu.bd/" target="_blank"
                    style="color: #044F2B; font-size: 22px;">Bangladesh University of Professionals</a>
            </div>
            <div class="topnav">
                <a class="active" href="admin_home.php">Home</a>

                <a href="#contact">Protocols</a>
                <a href="#contact">Messages</a>
                <div class="openBtn" onclick="openSearch()">View User</div>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #044F2B; font-size: 18px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <span class="glyphicon glyphicon-user"> Admin</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#B8E2FA;">
                        <a class="dropdown-item" href="admin_home.php" id="dropdn">Home</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="main.php" id="dropdn">Log out</a>
                </li>


            </ul>
        </div>
    </nav>
    </div>
    </div>
    <section>
    </section>
    <div class="library_logo">
        <img src="/SRE/images/bup_library_logo.png" alt="">
    </div>
    <div6 class="sear">
        <div class="d-flex justify-content-center h-100">
            <div class="search">
                <input type="text" class="search-input" placeholder="search " name="">
                <a href="#" class="search-icon">
                    <i class="fa fa-search"></i>
                </a>
            </div>
        </div>
    </div6>



    <div>




        <div class="tab">
            <table class="GeneratedTable">
                <thead>
                    <tr>
                        <th style="font-weight: bolder;  color:#044F2B  ;">Book Occupied (ISBN)</th>
                        <th style="font-weight: bolder;  color:#044F2B  ;">Due Date</th>
                        <th style="font-weight: bolder;  color:#044F2B  ;">Remaining Time(Days)</th>
                        <th style="font-weight: bolder;  color:#044F2B  ;">Calculate fine</th>

                </thead>
                <tbody>
                    <tr style="color:#044F2B;">

                        <td>9780070667075</td>
                        <td>29/09/2022</td>
                        <td>3</td>

                    </tr>
                    <tr style="color:#044F2B;">

                        <td>9780070667075</td>
                        <td>26/09/2022</td>
                        <td>Exceed</td>
                        <td>70tk</td>

                    </tr>
                    <!-- <tr style="color:#044F2B;">
              <td>Telecommunication Switchig Systems and Networks</td>
                <td>97800744444075</td>
                <td>4</td>
                <td>01/08/2022</td>
                <td style="color: red;">30/09/2022</td>
                <td>----</td>
            </tr>
            <tr style="color:#044F2B;">
                <td>Principles of Marketing</td>
                <td>9780070667075</td>
                <td>4</td>
                <td>11/07/2022</td>
                <td style="color: red;">13/0/2022</td>
                <td>----</td>
               
              </tr> -->
                </tbody>
            </table>
        </div>



        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item active" aria-current="page" style="font-weight:bolder; color:#044F2B;">Fine
                </li>
            </ol>
        </nav>
    </div>
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
    </div>

</body>

</html>