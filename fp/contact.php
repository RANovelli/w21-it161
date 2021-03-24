<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Wig Out! 60s R&amp;B, Garage, Soul Dance Party</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />     
       <!-- jQuery -->
       <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
       <!-- MenuMaker Plugin -->
       <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
       <!-- Icon Library -->
       <script src="https://kit.fontawesome.com/8665c732d2.js" crossorigin="anonymous"></script>
 </head>
 <body>
  <main>
    <header>
         <h1 class="header"><a href="template.html">WIG OUT!<br/>60s R&amp;B, Garage, Soul Dance Party</a></h1>
         <nav id="cssmenu">
          <ul class="menu">
             <li class="item"><a href="template.html"><i class="fa fa-fw fa-home"></i> Wig Out!</a></li>
             <li class="item"><a href="music.html"><i class="fa fa-fw fa-music"></i> Music</a></li>
             <li class="item"><a href="photos.html"><i class="fa fa-fw fa-camera-retro"></i> Photos</a></li>
             <li class="item"><a href="events.html"><i class="fa fa-fw fa-calendar"></i> Events</a></li>
             <li class="item"><a href="screwmap.html"><i class="fas fa-screwdriver"></i> Screwdriver Bar</a></li>  
             <li class="item"><a href="contact.php"><i class="fab fa-forumbee"></i> Contact</a></li>
             <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>            
          </ul>
         </nav>
    </header>
    
        <!-- START LEFT COLUMN -->
        <section class="fullwidth">
            <img class="kevin" src="images/kevin800x600.jpg" alt="Wig Out Promo Image" />
            <h2 class="subheader">Drop Us A Line!!</h2>
            <p>To book Wig Out or any of the fine DJs at a music festival, nightclub, bar, arena, stadium, fashion show, art opening, corporate event, wrestling match, rodeo, bachelor/bachelorette party, birthday party, bar mitzvah, baby shower, funeral, or Irish wake, feel free to reach out!!</p>
            <div class="form">
            <?php
                /*
                 * Below are 2 different forms to be re-used       
                 * 
                 * Only use one at a time, comment out the other!       
                 *
                 */
                 
                include 'includes/contact_include.php'; #site keys & code here

                $toAddress = "djmaxwelledison@gmail.com";  //place your/your client's email address here
                $toName = "Maxwell Edison"; //place your client's name here
                $website = "Wig Out! 60s R&B, Garage, Soul Dance Party";  //place NAME of your client's website
                
                
                  echo loadContact('simple.php');#demonstrates a simple contact form
                
                //echo loadContact('multiple.php');#demonstrates multiple form elements
            ?>
            </div>    
        </section>
        <!-- END LEFT COLUMN -->
      
        <!-- START RIGHT COLUMN -->
        <aside>
            <h3><a href="https://screwdriverbar.com/screwdriver" target="_blank">Screwdriver Bar</a></h3>
            <address> 
                2320 1st Ave<br/>
                Seattle, WA 98121
            </address>
            <a class="phone" href="tel:012064414370">(206) 441-4370</a>
            
            <img class="wigsign" src="images/wigsign-300x300.jpg" alt="Wig Out Sign Board" />
            
        </aside>
        <!-- END RIGHT COLUMN -->
      
    <footer>
      <p><small>&copy; 2021 by <a href="contact.php">Ryan Novelli</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> ~ <a href="disclaimer.html">Disclaimer</a></small></p>
      <!-- Social Media Buttons -->   
      <a href="https://www.facebook.com/Wig-Out-60s-RB-and-Soul-Dance-Party-2097406403829353" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/wigoutbaby" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UCbOUjNWio1w7mkmP6rjVDQw" target="_blank"><i class="fab fa-youtube"></i></a>    
    </footer>
  
  </main>
  <script src="js/wigscript.js"></script>   
 </body>
</html>