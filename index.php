<?php
    $name = null;
    $email = null;
    $message = null;
    $from = null;
    $to = null;
    $subject = null;
    $errName = null;
    $errEmail = null;
    $errMessage = null;
    $errResult = null;
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Contact-Us'; 
        $to = 'hiren@entechks.com'; 
        $subject = 'Enquiry';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
     
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="success">Thank You! We will reply shortly</div>';
        $_POST = array();
    } else {
        $result='<div class="message">Your message could not be sent.</div>';
    }
}
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Entech Kunststoffe Solution Pvt.Ltd </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="mdl/material.css" />
        <link rel="shortcut icon" href="entech.ico" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="mdl/material.min.js"></script>
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-deep_purple.min.css" />
        <script src="https://use.fontawesome.com/04867bf9d1.js"></script>  
        <link rel="stylesheet" href="styles/main.css"> 
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'> 
        <!-- <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"> 
        <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script> -->
        
    </head>
    <body>
        <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header"> <!-- Layout div -->
            <header class = "mdl-layout__header mdl-color--grey-900">
               <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Entech Kunstoffe</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="#section--about">About</a>
                    <a class="mdl-navigation__link" href="#section--facility">Facility</a>
                    <a class="mdl-navigation__link" href="#section--clients">Clients</a>
                    <a class="mdl-navigation__link" href="#section--contact">Contact</a>
                </nav>
           
               </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Menu</span>
                <nav class="mdl-navigation">
                  <a class="mdl-navigation__link" href="about.html">About</a>
                  <a class="mdl-navigation__link" href="facilitiy.html">Facilities</a>
                  <a class="mdl-navigation__link" href="clients.html">Clients</a>
                  <a class="mdl-navigation__link" href="#section--contact">Contact</a>
                </nav>
            </div>
            <main class = "mdl-layout__content">
                <div class = "page-content">
                    <div class = "mdl-grid mdl-grid--no-spacing">
                        
                         <div class="mdl-cell  mdl-cell--9-col  mdl-cell--12-col-phone mdl-cell--12-col-tablet" id = "img-holder">
                              <div><img src="./img/entech_cover-2.jpg"></div>    
                         </div> 
                         <div class="mdl-cell  mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--12-col-tablet" id = "text-holder">
                            <h1 class = "company_name"> Entech Kunststoffe Solutions Pvt.Ltd </h1>   
                            <h5 class="company_subtext"> Engineering Solutions with Plastics </h5>
                         </div>                   
                    </div>
                    <section class="section section--content section--about" id = "section--about">
                        <div class = "mdl-grid about">
                            <div class="mdl-cell mdl-cell--12-col">
                                <h1 class="about--header"> About </h1>
                                <h6>Established in  2014, Entech Kunstoffe Solutions is a joint venture between the Gandhi Family, promoters of Mutual Industries & Haresh G. Chandarana Family,  Founders of Timo Plast, Monarch Plastics & Premauni Tools. We seek to give our customers maximum returns - with our expertise & deep understanding of technology as well as customer's specifications, dedication of our staff and our passion for technology. </h6>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--grey-900  mdl-js-ripple-effect" id = "more-info" href = "about.html">
                                    Read More
                                </a>
                            </div>
                            
                        </div>
                    </section>
                    <section class="section section--content section--facility" id = "section--facility">
                        <div class = "mdl-grid about">
                            <div class="mdl-cell mdl-cell--7-col">
                                <iframe
                                    width="100%"
                                    height="320px"
                                    frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyALe2zdBYZymLbGgQ2rpixOi14FyV-CLQU
                                    &q=Dhumal+Nagar,+Golani+Naka,+Vasai+East,+Vasai,+Maharashtra" allowfullscreen>
                                </iframe>
                                
                            </div>
                            <div class="mdl-cell mdl-cell--5-col">
                                <h1 class="facility--header"> Facility </h1>
                                <h6>Entech Kunstoffe's Mould Manufacturing Facility is situated in Vasai,  near Mumbai, to manufacture molds ranging in size for 20T to 400T Injection Molding Press.</h6>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--grey-900  mdl-js-ripple-effect" id = "more-info" href = "facility.html">
                                    More Info 
                                </a>
                                
                            </div>
                            
                        </div>
                    </section>
                    <section class="section section--content section--clients" id = "section--clients">
                        <div class = "mdl-grid clients">
                            <div class="mdl-cell mdl-cell--4-col">
                                <h1 class = "clients--header"> Our Clients </h1>
                                <h6> Our clientele includes Larsen & Toubro Ltd, Volkswagen, Philips, IFB, Videocon amongst other companies </h6>
                                <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--grey-900  mdl-js-ripple-effect" id = "more-info" href = "clients.html">
                                   Our Products
                                </a>
                            </div>
                            <div class="mdl-cell mdl-cell--8-col" id = "client-right">
                               
                                <img src="./img/logo.jpg">
                                
                            </div>
                            
                        </div>
                    </section>
                    <section class="section section--content section--contact" id = "section--contact">
                        <div class = "mdl-grid contact">
                            <div class="mdl-cell mdl-cell--6-col">
                                <h1 class="enquiry--header"> Contact </h1>
                                <h6> Mr. Hiren Chandrana | Mr. Uchit Gandhi</h6>
                                <h6> hiren@entechks.com | udgandhi@entechks.com </h6>
                                <h6> +919833285895 | +919820227395</h6>
                                
                            </div>
                            
                            <div class="mdl-cell mdl-cell--6-col">
                                <h1 class = "enquiry--header"> Enquiry </h1>
                                <form action = "index.php" method="post" >
                                    <div class = "mdl-textfield mdl-js-textfield">
                                        <input type = "text" name = "name" class = "mdl-textfield__input name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                        <label class="mdl-textfield__label" for="name">Name</label>
                                    </div>
                                    <?php echo "<p class = 'message'>$errName</p>";?>
                                    <div class = "mdl-textfield mdl-js-textfield">
                                        <input type = "text" name = "email" class = "mdl-textfield__input email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                        <label class="mdl-textfield__label" name = "email" for="email">Email</label>
                                    </div>
                                    <?php echo "<p class = 'message'>$errEmail</p>";?>
                                    <div class = "mdl-textfield mdl-js-textfield">
                                        <textarea type = "text" id="enquiry" class = "mdl-textfield__input enquiry"  value="<?php echo htmlspecialchars($_POST['enquiry']); ?>" name = "enquiry"></textarea>
                                        <label class="mdl-textfield__label" for="email">Your Enquiry</label>
                                    </div>
                                    <?php echo "<p class = 'message'>$errMessage</p>";?>
                                    <input name = "submit" type = "submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-color--grey-900  mdl-js-ripple-effect">
                                    <?php echo $result;?>
                                </form>
                                
                            </div>
                        </div>
                    </section>
                </div>
                <footer class="mdl-mega-footer mdl-color--grey-900">
                    <div class="mdl-mega-footer__middle-section">

                        <div class="mdl-mega-footer__drop-down-section">
                            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                            <h1 class="mdl-mega-footer__heading">About</h1>
                            <ul class="mdl-mega-footer__link-list">
                                
                                <li><a href="about.html">Vision</a></li>
                                <li><a href="about.html">Goals</a></li>
                                <li><a href="clients.html">Clients</a></li>
                            </ul>
                        </div>

                    <div class="mdl-mega-footer__drop-down-section">
                        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
                        <h1 class="mdl-mega-footer__heading">Technology</h1>
                        <ul class="mdl-mega-footer__link-list">
                            <li><a href="facility.html">Machinery</a></li>
                            <li><a href="facility.html">Process</a></li>
                            <li><a href="about.html">People</a></li>
                        </ul>
                    </div>


                    </div>

                    <div class="mdl-mega-footer__bottom-section">
                        <div class="mdl-logo">Site Design & Development: <a href = "mailto:aayushchadha0111@gmail.com">Aayush Chadha</a></div>
                        <ul class="mdl-mega-footer__link-list">
                            <li><a href="#">Privacy & Terms</a></li>
                        </ul>
                    </div>

                </footer> <!-- Page Content -->
            </main>
            
        </div> <!-- Layout div -->
    </body>
   </html>