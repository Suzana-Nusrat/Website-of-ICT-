<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Department Website Design</title>
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
            <li><a href="index">HOME</a></li>
            <li><a href="about">ABOUT</a></li>
            <li><a href="people">PEOPLE</a></li>
            <li><a href="#academics">ACADEMICS</a></li>
            <li><a href="#research">RESEARCH</a></li>
            <li><a href="">COMMUNITY</a>
                <ul>
                  <li><a href="https://bup.edu.bd/clubs/bup-infotech-club">BUP InfoTech Club</a></li>
                  <li><a href="https://bup.edu.bd/clubs/bup-robotics-club">BUP Robotics Club</a></li>
                  <li><a href="https://bup.edu.bd/clubs/bup-ieee-student-branch">BUP IEEE Student Branch</a></li>
                  <li><a href=" ">Alumni</a></li>
                </ul>
              </li>
            <li><a href="newseve">NEWS & EVENTS</a></li>
            <li><a href="#cta">CONTACT</a></li>
            <li>
                <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                    <li><span><?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?></span></li>

                    <?php else: ?>
                       <li> <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a></li>
                        <?php if(Route::has('register')): ?>
                           <li> <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a></li>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
           </li>
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
        <a href="login" class="hero-btn">Visit Us to Know more</a>
      </div>
    </section>


<!-- Academics -->

<section class="academics" id="academics">
  <h1>Our Programs</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
    recusandae alias error harum maxime adipisci amet laborum.
    </p>

  <div class="row">
    <div class="academics-col">
      <div class="card">
        <div class="inner-box">
          <div class="card-front"
               <h3><b>Undergraduate</b></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit
               </p>
          </div>
          <div class="card-back">
            <p>Bachelor's in Information and Communication Engineering (BICE)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="academics-col">
      <div class="card">
        <div class="inner-box">
          <div class="card-front"
               <h3><b>Graduate</b></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit
                </p>
          </div>
          <div class="card-back">
            <p>Masters in Information and Communication Engineering (MICE)</p>
            <p>Masters in Information and Communication Technology (MICT)</p>
            <p>Masters in Information Security System (MISS)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="academics-col">
      <div class="card">
        <div class="inner-box">
          <div class="card-front"
               <h3><b>Post Graduate</b></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit
                </p>
          </div>
          <div class="card-back">
            <p>No Programs Available Yet</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- -------- Facilities -------- -->

<section class="facilities">
  <h1> Our Facilities</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
    recusandae alias error harum maxime adipisci amet laborum. </p>

  <div class="row">
    <div class="facilities-col">
      <img src="images/eclab.webp" height="250px">
          <h3>Electrical Circuit Lab</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum. </p>
    </div>

    <div class="facilities-col">
      <img src="images/clab.png" height="250px">
          <h3>Computer Lab</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum. </p>
    </div>

    <div class="facilities-col">
      <img src="images/comlab.png" height="250px">
          <h3>Communication Lab</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
            recusandae alias error harum maxime adipisci amet laborum. </p>
    </div>
  </div>
</section>

<!-- -------- Research -------- -->

<section class="research" id="research">
  <h1> Our Research Areas</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
    recusandae alias error harum maxime adipisci amet laborum. </p>

  <div class="row">
    <div class="research-col">
      <img src="images/ai&ml.png" width="502px" height="450px">
      <div class="layer">
          <h3>Artificial Intelligence & Machine Learning</h3>
      </div>
    </div>
    <div class="research-col">
      <img src="images/communication.png" width="502px" height="450px">
      <div class="layer">
          <h3>Communication</h3>
      </div>
    </div>
    <div class="research-col">
      <img src="images/cyber.png" width="502px" height="450px">
      <div class="layer">
          <h3>Cyber Security</h3>
      </div>
    </div>
  </div>
</section>


<!-- News & Events -->

<section class="n&e" id="n&e">

</section>

  <!-- -------- Testimonials -------- -->

<section class="testimonials" id="blog">
  <h1> What Our Students Say</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos
    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
    recusandae alias error harum maxime adipisci amet laborum. </p>

  <div class="row">
    <div class="testimonial-col">
      <img src="images/user1.jpg" alt="user1" >
      <div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
        recusandae alias error harum maxime adipisci amet laborum. </p>
      <h3>N Suzana</h3>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-half-o"></i>
    </div>
  </div>
    <div class="testimonial-col">
      <img src="images/user2.webp" alt="user2" >
      <div>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        recusandae alias error harum maxime adipisci amet laborum.
       </p>
      <h3>Anika</h3>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star"></i>
      <i class="fa fa-star-o"></i>
    </div>
  </div>
  <div class="testimonial-col">
    <img src="images/user3.jpg" alt="user3" >
    <div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
      molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
      numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
      optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
      obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
      nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
      tenetur error, harum nesciunt ipsum debitis quas aliquid.
     </p>
    <h3>Sadia</h3>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-o"></i>
    </div>
  </div>
</section>

<!-- -------- Call To Action -------- -->

<section class="cta" id="cta">
  <h1> Enroll For Our Programs<br> Anywhere From The World</h1>
  <a href="contact" class="hero-btn">Contact Us</a>
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

  var navLinks = document.getElementById("navLinks");
  function showMenu() {
    navLinks.style.right="0";
  }
  function hideMenu() {
    navLinks.style.right="-200px";
  }
</script>

  </body>
</html>
<?php /**PATH D:\ xampp1\htdocs\blog\resources\views/home.blade.php ENDPATH**/ ?>