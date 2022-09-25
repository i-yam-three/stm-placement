<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Placement Dashboard | By VBLAZE</title>
  <link rel="icon" type="image/x-icon" href="avatar.png">
  <link rel="stylesheet" href="dash.css" />
   <!-- Font Awesome Cdn Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

</head>
<body>
  <!--div class="container">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="avatar.png">
          <p><span class="nav-item"><b></b></span></p>
          <br><span class="badge badge-lg badge-dot">
               <i class="bg-success"></i> 
               </span>
               <span class="badge badge-lg badge-dot">
                <i class="bg-success" style="color: white;">name</i>
                </span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-menorah"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-comment"></i>
          <span class="nav-item">Message</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-database"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Attendance</span>
        </a></li>
        <li><a href="#">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Setting</span>
        </a></li>

        <li><a href="logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav-->


    <section class="main">
      <div class="main-top">
        <h1>&nbsp;Hey <?php echo $name ?> <img src="hi.png" height="25" width="25"> </h1>
        <i><a href="logout.php">Sign Out</a></i>

      </div>

<!-- Swiper --> 
  
      <div class="swiper mySwiper users">
      <div class="swiper-wrapper swiper-slide">    
        <div class="swiper-slide card">
          <img src="placed/AKHIL.jpeg">
          <h4>Akhil C Paul</h4>
          <p>(CSE)</p>
          <p>TCS - Assistant Systems Engineer</p>
          <div class="per">
            <table>
              <tr>
                <td><span>3.36</span></td>
                <!--td><span>87%</span></td-->
              </tr>
              <tr>
                <td>LPA</td>
                <!--td>Year</td-->
              </tr>
            </table>
          </div>
          <button>LinkedIn</button>
        </div>

        <div class="swiper-slide card"> <img src="placed/ANAGHA.jpeg"> <h4>Anagha Hari Krishnan</h4>
          <p>(CSE)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div>

        <div class="swiper-slide card"> <img src="placed/NIDHIN.jpeg"> <h4>Nidhin Babu</h4>
          <p>(CSE)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div>   

        <div class="swiper-slide card"> <img src="placed/DEVIKA1.jpg"> <h4>Devika T</h4>
          <p>(CSE)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div> 

        <div class="swiper-slide card"> <img src="placed/SREESHMA.jpg"> <h4>Baby Sreeshma</h4>
          <p>(CSE)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div>           

        <div class="swiper-slide card"> <img src="placed/PARVATHI.jpeg"> <h4>Parvathi J</h4>
          <p>(EC)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div>  
        
        <div class="swiper-slide card"> <img src="placed/ARUN.jpg"> <h4>Arun</h4>
          <p>(EC)</p> <p>TCS - Assistant Systems Engineer</p> <div class="per"> <table> <tr>
                <td><span>3.36</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div> 

        <div class="swiper-slide card"> <img src="placed/NIDHIN.jpeg"> <h4>Nidhin Babu</h4>
          <p>(CSE)</p> <p>Capgemin - A4-Analyst</p> <div class="per"> <table> <tr>
                <td><span>4.0</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div> 

        <div class="swiper-slide card"> <img src="placed/RAIZA.jpg"> <h4>Raiza Khalid</h4>
          <p>(CSE)</p> <p>Capgemin - A4-Analyst</p> <div class="per"> <table> <tr>
                <td><span>4.0</span></td> <!--td><span>85%</span></td--> </tr> <tr>
                <td>LPA</td> <!--td>Year</td--> </tr> </table> </div>
                <button>LinkedIn</button>
        </div> 

      </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>S.NO</th>
                <th>Name</th>
                <!--th>Depart</th>
                <th>Date</th>
                <th>Join Time</th>
                <th>Logout Time</th-->
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
            <tr class="active">
                <td>01</td>
                <td>Drive Feedback Form</td>
                <!--td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td-->
                <td><button><a href="javascript:void(window.open('https://form.jotform.com/222470672642455','blank','scrollbars=yes,toolbar=no,width=700,height=500'))" class="btn btn-sm btn-neutral">View</a></button>
              </td>
              </tr>
              <tr>

              <tr class="active">
                <td>02</td>
                <td>New Results</td>
                <!--td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td-->
                <td><button><a href="javascript:void(window.open('https://form.jotform.com/222470672642455','blank','scrollbars=yes,toolbar=no,width=700,height=500'))" class="btn btn-sm btn-neutral">View</a></button>
              </td>
              </tr>

              <tr class="active">
                <td>03</td>
                <td>Pool Drives Feedback</td>
                <!--td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td-->
                <td><button><a href="javascript:void(window.open('https://form.jotform.com/222470672642455','blank','scrollbars=yes,toolbar=no,width=700,height=500'))" class="btn btn-sm btn-neutral">View</a></button>
              </td>
              </tr>

              <tr class="active">
                <td>04</td>
                <td>Placement Classes Feedback</td>
                <!--td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td-->
                <td><button><a href="javascript:void(window.open('https://form.jotform.com/222470672642455','blank','scrollbars=yes,toolbar=no,width=700,height=500'))" class="btn btn-sm btn-neutral">View</a></button>
              </td>
              </tr>
              <tr>
              <!-- <tr >
                <td>05</td>
                <td>Salina</td>
                <td>Coding</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr>
              <tr >
                <td>06</td>
                <td>Tara Smith</td>
                <td>Testing</td>
                <td>03-24-22</td>
                <td>9:00AM</td>
                <td>4:00PM</td>
                <td><button>View</button></td>
              </tr> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
   
   <!--Form-->
   <center>
     <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRar5hSPtj7GXT75b-GcZQ7z-S48Rx3PCMuDCx0yBSb9DAachiqeNo2eCapPXgMBmnVJQkj1CFHfsiU/pubhtml?widget=true&amp;headers=false" style="border:none;" height="1000pc" width="100%"></iframe>
     </center>

<!--footer-->   
   <style>
  footer {
  text-align: center;
  color: white;
  padding: 3px;
  background-color: black;
  
}
</style>
    <footer>
    <center>
  <p style="font-family:tajawal ; color: white;"><a href="https://www.vblazeatstm.tk/">Developed By : VBLAZE<br></a>
  <a href="stmvblaze@gmail.com">stmvblaze@gmail.com</a></p><center>
</footer>

      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
  },
  });
</script>



<!--test>
   <div class="dashboardContainer">
      <div class="avatar">
         <img src="avatar.png">
      </div>
      <div class="welcomeMessage">
         <i>Hey</i> <b><?php echo $name ?></b>, welcome to my website
      </div>
      <div class="notes">
         You can modify this page by editing the file 'dashboard.php'
         <iframe src="/default.html" width="100%" height="300" style="border:1px solid black;">
         </iframe>
      </div>
      <a href="logout.php">Logout</a>
<test-->      
</body>
</html>