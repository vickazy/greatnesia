<?php $this->load->view('front/header'); ?>

  <div class="slidepanel">
    <div class="container">
      <div class="row">
        <div class="span8">
          <div class="spara"> 
            <!-- Contact details -->
            <p><i class="icon-envelope-alt lightblue"></i> something@gmail.com &nbsp; 
              <i class="icon-twitter lightblue"></i> @something &nbsp; 
              <i class="icon-desktop lightblue"></i> 123-456-7890
            </p>
          </div>
        </div>
        <div class="span4">
            <div class="social">
              <!-- Social media icons. Repalce # with your profile links -->
                      <a href="#" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="#" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="#" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="#" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="#" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="#" class="borange"><i class="icon-rss"></i></a>
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Sliding panel ends-->

  <!-- Header starts -->

  <header>
    <div class="container">
      <div class="row">

        <div class="span3">

          <!-- Logo starts -->

          <div class="logo">
            <div class="logo-image">
              <!-- Image link -->
              <a href="index.html"><i class="icon-desktop blue"></i></a>
            </div>
            <div class="logo-text">
              <h1><a href="index.html">Metro<span class="lightblue">Man</span></a></h1>
              <div class="logo-meta">Cool Metro Theme</div>
            </div>

            <div class="clearfix"></div>
          </div>

          <!-- Logo ends -->

        </div>

        <div class="span9">

          <!-- Navbar starts -->

          <div class="navi pull-right">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
                            <ul>

                <li><a href="index.html" class="blightblue"> <i class="icon-home"></i> Home</a></li>

                <!-- Main navigation -->
                <li><a href="#" rel="ddsubmenu2" class="bred"> <i class="icon-desktop"></i> Pages</a>
                    <!-- Sub Navigation -->
                    <ul id="ddsubmenu2" class="ddsubmenustyle">
                       <li><a href="landingpage.html">Landing Page</a></li>
                       <li><a href="comingsoon.html">Coming Soon</a></li>
                       <li><a href="features2.html">Features</a></li>
                       <li><a href="service1.html">Service</a></li>
                       <li><a href="team.html">Our Team</a></li>
                       <li><a href="aboutus.html">About Us</a></li>
                       <li><a href="resume.html">Resume</a></li>
                       <li><a href="tasks.html">Tasks</a></li>
                       <li><a href="#">Sub Navigation</a>
                          <ul>
                            <li><a href="#">Nav Level #3</a></li>
                          </ul>
                       </li>
                    </ul>
                </li>

                <!-- Main navigation -->
                <li><a href="#" rel="ddsubmenu2" class="bviolet"> <i class="icon-tablet"></i> Pages</a>
                    <!-- Sub Navigation -->
                    <ul id="ddsubmenu2" class="ddsubmenustyle">
                       <li><a href="404.html">404</a></li>
                       <li><a href="testimonials.html">Testimonials</a></li>
                       <li><a href="clients.html">Clients</a></li>
                       <li><a href="pricingtable.html">Pricing Table</a></li>
                       <li><a href="projects.html">Projects</a></li>
                       <li><a href="register.html">Register</a></li>
                       <li><a href="login.html">Login</a></li>
                       <li><a href="events.html">Events</a></li>
                    </ul>
                </li>                

                <li><a href="#" rel="ddsubmenu2" class="bgreen"> <i class="icon-comments"></i> Blog</a>
                  <!-- Sub navigation -->
                  <ul id="ddsubmenu2" class="ddsubmenustyle">
                    <li><a href="blog2.html">Blog #1</a></li>
                    <li><a href="blog1.html">Blog #2</a></li>
                    <li><a href="blogsingle.html">Blog Single</a></li>
                  </ul>
                </li>

                <li><a href="portfolio.html" class="borange"> <i class="icon-camera"></i> Portfolio</a></li>

                <li><a href="contactus.html" class="bblue"> <i class="icon-envelope-alt"></i> Contact</a></li>


              </ul>
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->

  <!-- Page heading -->
  <!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
  <div class="page-heading blightblue">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2 class="pull-left"><i class="icon-arrow-right title-icon"></i> Blog</h2>
          <div class="pull-right heading-meta">This Is <span class="lightblue">Meta</span>. Write <span class="lightblue">Something</span> Here</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page heading ends -->

  <!-- Content starts -->
  <div class="content">
    <div class="container">
      <div class="blog">
        <div class="row">

                        <div class="span3">

                          <!-- Sidebar 2 -->
                           <div class="sidebar">
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
                                    <li><a href="#">Condimentum</a></li>
                                    <li><a href="#">Etiam at</a></li>
                                    <li><a href="#">Fusce vel</a></li>
                                    <li><a href="#">Vivamus</a></li>
                                    <li><a href="#">Pellentesque</a></li>

                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>Contact</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.  </p>
                              </div>                              
                           </div>                                                
                        </div>

                        <div class="span5">
                           <div class="posts">
                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
                                 <h2><i class="icon-arrow-right title-icon"></i> <a href="#">Sed justo scelerisque ut constur scelerisque</a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> 26-2-2012 <i class="icon-user"></i> Admin <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
                                    <a href="#"><img src="img/photos/1.jpg" alt="" /></a>
                                 </div>
                                 
                                 <!-- Para -->
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>

                                 <!-- Read more -->
                                 <a href="#" class="btn btn-info">Read More...</a>
                              </div>
                              
                              <!-- Post 2 -->
                              <div class="entry">
                                 <h2><i class="icon-arrow-right title-icon"></i> <a href="#">Ut commo ullarper risus nec scelerisque mattis</a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> 26-2-2012 <i class="icon-user"></i> Admin <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
                                    <a href="#"><img src="img/photos/2.jpg" alt="" /></a>
                                 </div>
                                 
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                                 <a href="#" class="btn btn-info">Read More...</a>
                              </div>
                              
                              <!-- Pagination -->
                              <div class="paging">
                                 <span class='current'>1</span>
                                 <a href='#'>2</a>
                                 <span class="dots">&hellip;</span>
                                 <a href='#'>6</a>
                                 <a href="#">Next</a>
                              </div> 
                              
                              <div class="clearfix"></div>
                              
                           </div>
                        </div>                        
                        <div class="span4">

                            <!-- Sidebar 1 -->

                           <div class="sidebar">
                              <!-- Widget -->
                              <div class="widget">
                                 <h4>Search</h4>
                                 <form method="get" id="searchform" action="#" class="form-search">
                                    <input type="text" value="" name="s" id="s" class="input-medium"/>
                                    <button type="submit" class="btn btn-info">Search</button>
                                 </form>
                              </div>
                              <div class="widget">
                                 <h4>Recent Posts</h4>
                                 <ul>
                                 <li>Etiam adipiscing posuere justo, nec iaculis justo dictum non</li>
                                 <li>Cras tincidunt mi non arcu hendrerit eleifend</li>
                                 <li>Aenean ullamcorper justo tincidunt justo aliquet et lobortis diam faucibus</li>
                                 <li>Maecenas hendrerit neque id ante dictum mattis</li>
                                 <li>Vivamus non neque lacus, et cursus tortor</li>
                                 </ul>
                              </div>
                              <div class="widget">
                                 <h4>About</h4>
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
                              </div>                              
                           </div>                                                
                        </div>
                      </div>
                        
    </div>

    </div>
  </div>
  <!-- Content ends -->

<!-- Footer -->

<!-- Below area is for Testimonial -->
<div class="foot blightblue">
  <div class="container">
    <div class="row">
      <div class="span12">
          
          <!-- User icon -->
          <span class="twitter-icon text-center"><i class="icon-user"></i></span>
          <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras elementum dolor eget nisi <br />fermentum quis hendrerit magna vestibulum."</em></p>
        
      </div>
    </div>
  </div>
</div>  

<?php $this->load->view('front/footer'); ?>