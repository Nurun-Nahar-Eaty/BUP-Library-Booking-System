<!DOCTYPE html>
<html>

<head>

    <title>Borrow</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/b45304ffc2.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="custom.js"></script>
    <link rel="stylesheet" href="borrow.css">







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
                <img src="/Arpa/images/bb.png" id="Buplogo">
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="https://bup.edu.bd/" target="_blank"
                    style="color: #044F2B; font-size: 24px;">Bangladesh University of Professionals</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #044F2B; font-size: 18px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                        <span class="glyphicon glyphicon-user"> User</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#B8E2FA;">
                        <a class="dropdown-item" href="#" id="dropdn">Your Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin_home.php" id="dropdn">Log out</a>
                    </div>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-bell"
                            style="color:#044F2B; font-size: 24px;"></span></a></li>

                <li>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="myBooks.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-book" style="color:#044F2B; font-size: 24px;">
                            </span> My Books</a>
                        <a href="pay fees.php" style="color: #044F2B; font-size: 24px; 
                        font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-usd" style="color:#044F2B; font-size: 24px;">
                            </span> Pay Fees</a>
                        <a href="user transaction.php" style="color: #044F2B; font-size: 24px; 
                            font-family:Istok Web;text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
                            <span class="glyphicon glyphicon-floppy-disk" style="color:#044F2B; font-size: 24px;">
                            </span> Transaction Report</a>
                    </div>
                    <span class="glyphicon glyphicon-menu-hamburger"
                        style="color:#044F2B; font-size: 24px; top: 2px;padding: 12px;" onclick="openNav()"></span>
                </li>
            </ul>
        </div>
    </nav>
    </div>
    </div>
    <section>
    </section>
    <div6 class="search1">
        <div class="d-flex justify-content-center h-100">
            <div class="search">
                <input type="text" class="search-input" placeholder="search..." name="">
                <a href="#" class="search-icon">
                    <i class="fa fa-search"></i>
                </a>
            </div>
        </div>

    </div6>
    <div class="book"><img src="/Arpa/images/java book.png" alt=""></div>
    <div4 class="library_logo_name">
        <img src="bup_library_logo.png" alt="">
    </div4>
    <div class="button1"><a class="btn btn-default" href="cart1.php" role="button">
            <div class="bcolor">Borrow</div>
        </a>
    </div>
    <div class="book_detail1"><br>Java Program Design/ Douglas A. Lind, William G. Marchal, Samuel A. Wathen.</br>
        By: Lind, Douglas A</br>
        Contributor(s): Marchal, William G | Wathen, Samuel A</p>
    </div>
    <div class="button2"><a class="btn btn-default" href="cart2.php" role="button">
            <div class="bcolor2">Place hold</div>
        </a>
    </div>
    <div class="book_detail2">
        <p>Material type: Text
            Language: English <br>
            Publisher: India : Mcgraw-Hill, 2011 <br>
            Edition: 13th ed <br>
            Description: 860 p. : Fig, Table, graph ; 24cm <br>
            ISBN: 9780070667075 (paperback) <br>
            Subject(s): Social sciences -- Statistical methods | Economics
            DDC classification: 330 <br>
            Tags from this library: No tags from this library for this title. Add tag(s)</p>
    </div>
    <div class="button3"><a class="btn btn-default" href="#" role="button">
            <div class="bcolor3">Holdings</div>
        </a>
    </div>

    <div class="tab">
        <table class="GeneratedTable">
            <thead>
                <tr>
                    <th>Item type</th>
                    <th>Current location</th>
                    <th>Status</th>
                    <th>Due date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Books</td>
                    <td> BUP Library Division General Stacks</td>
                    <td>Available</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Books</td>
                    <td> BUP Library Division General Stacks</td>
                    <td>Checked out</td>
                    <td>25/09/2022</td>
                </tr>
                <tr>

            </tbody>
        </table>
    </div>

    <!-- <div> 
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="user home.php">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
</div>  -->

    <div>
        <a class="back_btn">
            <span class="glyphicon glyphicon-menu-left" onclick="history.back()">
            </span>
        </a>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="user home.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Your Account</li>
            </ol>
        </nav>
    </div>

    </div>

</body>

</html>