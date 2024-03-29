<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department of ICT</title>
    <link rel="stylesheet" href="research.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;
      700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/fontawesome/4.7.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4/icon/">
</head>

  <body>
   <section class="header">
      <nav>
        <a href="https://bup.edu.bd/" ><img src="images/bupim.png"></a>

        <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="#footer">HOME</a></li>
            <li><a href="about">ABOUT</a></li>
            <li><a href="people">PEOPLE</a></li>
            <li><a href="#academics">ACADEMICS</a></li>
            <li><a href="research">RESEARCH</a></li>
            <li><a href="">COMMUNITY</a>
                <ul>
                  <li><a href="https://bup.edu.bd/clubs/bup-infotech-club">BUP InfoTech Club</a></li>
                  <li><a href="https://bup.edu.bd/clubs/bup-robotics-club">BUP Robotics Club</a></li>
                  <li><a href="https://bup.edu.bd/clubs/bup-ieee-student-branch">BUP IEEE Student Branch</a></li>
                  <li><a href=" ">Alumni</a></li>
                </ul>
              </li>
            <li><a href="newseve.html">NEWS & EVENTS</a></li>
            <li><a href="#cta">CONTACT</a></li>
          </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>

      <div class="text-box">
        <h1><pre>     Department of </pre>
          Information and Communication Technology</h1>
        <p>
          The official website for the students & alumni of Department of Information & Communication Technology, BUP<br>
          From foundational hardware and software systems to new mechine learning models and computational methods to address critical problems. Our work is bringing changes in the society.
        </p>
        <a href="" class="hero-btn">Visit Us to Know more</a>
      </div>
    </section>







    <section>
      <div class="app">
        <div class="menu-toggle">
          <div class="hamburger">
            <span></span>
          </div>
        </div>

        <aside class="sidebar">
          <h2>Menu</h2>

          <div class="menu">
           <ul>
            <li> <a href="research" class="menu-item is-active">Research Area</a></li>
            <li> <a href="fundedProject" class="menu-item">Funded Projects</a></li>
            <li><a href="publication" class="menu-item">Publications</a></li>
          </ul>
          </div>

        </aside>

        <main class="content">
          <h1 style="color:linear-gradient(90deg, rgba(2,0,36,1) 50%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);display: block; text-align:center; padding: 15px;
          border: 1px solid #e7e7e7;background-color: #3bba9c;
          font-weight: 600;
          text-transform: uppercase;">Faculty Research Interest</h1>


            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Mohammed Shafiul Alam Khan <b>
                <br>
            <p> Telecommunication Security, IoT and Its Security, Software Security</p></li>

            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Dr. Kazi Muheymin-Us-Sakib <b>
                <br>
            <p> Software Engineering</p></li>

            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Mohammad Shoyaib <b>
                <br>
            <p> Software Engineering, Computer vision, Machine Learning</p></li>

            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Dr. B M Mainul Hossain <b>
                <br>
            <p> Machine Learning, Data Mining, Software Analytics, Natural Language Processing</p></li>

            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b>  Ahmedul Kabir <b>
                <br>
            <p> Telecommunication Security, IoT and Its Security, Software Security</p></li>

            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Md. Nurul Ahad Tawhid <b>
                <br>
            <p> Image Processing, Computer Vision, Machine Learning, Software Engineering, Biomedical Signal Processing</p></li>
            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b> Mohammed Shafiul Alam Khan <b>
                <br>
            <p> Telecommunication Security, IoT and Its Security, Software Security</p></li>
            <li  style="color:gray; padding: 20px;">
              <i class="fa-sharp fa-solid fa-chalkboard-user"></i>
              <b>  Emon Kumar Dey <b>
                <br>
            <p>Building Extraction; Point Cloud Data Processing; Machine Learning; Image Processing; Pattern Recognition</p></li>

        </main>
      </div>

      <script>
        const menu_toggle = document.querySelector('.menu-toggle');
        const sidebar = document.querySelector('.sidebar');

        menu_toggle.addEventListener('click', () => {
          menu_toggle.classList.toggle('is-active');
          sidebar.classList.toggle('is-active');
        });
      </script>
    </section>


<!-- -------- Footer -------- -->

<section class="footer" id="footer">
  <h4> About Us </h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
    optio, eaque rerum! Provident similique accusantium nemo autem.<br> Veritatis
    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
    recusandae alias error harum maxime adipisci amet laborum. </p>

  <div class="icons">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-square-instagram"></i>
    <i class="fa-brands fa-linkedin-in"></i>
  </div>
</section>

<!-- JavaScript for  Toggle Menu -->
<script>

  var navLinks=document.getElementById("nav-links");
  function showMenu() {
    navLinks.style.right="0";
  }
  function hideMenu() {
    navLinks.style.right="-200px";
  }
</script>

  </body>
</html>
<?php /**PATH D:\ xampp1\htdocs\blog\resources\views/research.blade.php ENDPATH**/ ?>