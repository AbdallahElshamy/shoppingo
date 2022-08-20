<?php
session_start();
if(isset($_SESSION["id"]))
  {
    include_once "headerafter.php";
  }
else
  {
    include_once "headerbefore.php";
  }
?>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>Who we are ?</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="image/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>
              <ul class="social-icons">
                <li><a href="#" style="color:#000!important"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#" style="color:#000!important"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#" style="color:#000!important"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="#" style="color:#000!important"><i class="fa-brands fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="image/images/moumen.jpeg" alt="">
              </div>
              <div class="down-content">
                <h4>Moumen Hussin </h4>
                <span>A.I</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="image/images/abdallah.jpg" alt="">
              </div>
              <div class="down-content">
                <h4>Abdallah Mamdoh </h4>
                <span>Full Stacke</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="image/images/mohamed-mukhtar.jfif" alt="">
              </div>
              <div class="down-content">
                <h4>Mohamed Mukhtar</h4>
                <span>Front-End Developer</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="image/images/abdalmonem.jpeg" alt="">
              </div>
              <div class="down-content">
                <h4>Abd Almonem</h4>
                <span>Developer</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="height:486 px">
            <div class="team-member">
              <div class="thumb-container">
                <img src="image/images/abdeltwab.jpeg" alt="">
              </div>
              <div class="down-content">
                <h4>Abd Altwab</h4>
                <span>Designer</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <?php
include_once "footer.php";
?>
