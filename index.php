<?php  include("__header.php"); ?>

            <!-- Banner -->
               <div id="banner" class="container">

                  <section>

                  <div class="boxed">
                     <form name="loginForm" method="POST" action="https://proteomicsresource.washington.edu/pr/login.do">
                        <input type="username" id="logintext"       name="username" placeholder="     username">
                        <input type="password" id="loginpassword"   name="password" placeholder="     password">
                        <input type="submit"   id="loginbutton"     value="login to UWPR">
                        <a href="https://proteomicsresource.washington.edu/pr/pages/login/forgotPassword.jsp" id="forgottext">Forgot password?</a>
                        <a href="https://proteomicsresource.washington.edu/pr/viewRegister.do" id="forgottext">Not registered?</a>
                     </form>
                  </div>

                     <br>
                     <p>The University of Washington's Proteomics Resource (UWPR) is a proteomics facility whose mission is to advance proteomic technologies and apply these technologies to significant biological problems.</p>
<!--
                     <a href="#" class="button large">Read More</a>
-->

                    

                  </section>
               </div>

            <!-- Extra -->
               <div id="extra">
                  <div class="container">
                     <div class="row no-collapse-1">
                        <section class="4u"> <a href="collab.php" class="image featured"><img src="images/collaborate.png" alt="collaborate"></a>
                           <div class="box">
                              <p>UWPR provides UW researchers with analytical and instructional expertise in proteomics techniques and data analysis.</p>
                              <a href="collab.php" class="button" alt="collab">Read More</a> </div>
                        </section>
                        <section class="4u"> <a href="resources.php" class="image featured"><img src="images/resources.png" alt="resources"></a>
                           <div class="box">
                              <p>Learn more about UWPR's state of the art LC-MS instrumentation and computational resources.</p>
                              <a href="resources.php" class="button" alt="resources">Read More</a> </div>
                        </section>
                        <section class="4u"> <a href="methods.php" class="image featured"><img src="images/methods.png" alt="methods"></a>
                           <div class="box">
                              <p>A collection of methods, protocols, and hardware can be found here, from sample prep to column packing.</p>
                              <a href="methods.php" class="button" alt="methods">Read More</a> </div>
                        </section>
                     </div>
                     <div class="row no-collapse-1">
                        <section class="4u"> <a href="protocols06/" class="image featured"><img src="images/tools.png" alt="tools"></a>
                           <div class="box">
                              <p>Information on software, utilities, and related resources available at the UWPR to analyze and visualize proteomics data.</p>
                              <a href="protocols06/" class="button" alt="software">Read More</a> </div>
                        </section>
                        <section class="4u"> <a href="publications.php" class="image featured"><img src="images/publications.png" alt="publications"></a>
                           <div class="box">
                              <p>The UWPR supports a wide range of proteomics research. A collection of the publications is available here.</p>
                              <a href="publications.php" class="button" alt="publications">Read More</a> </div>
                        </section>
                        <section class="4u"> <a href="contact.php" class="image featured"><img src="images/contact.png" alt="contact"></a>
                           <div class="box">
                              <p>Interested in contacting or visiting the UWPR?  Find phone and email contacts, address, and shuttle information here.</p>
                              <a href="contact.php" class="button" alt="contact">Read More</a> </div>
                        </section>
                     </div>
                  </div>
               </div>

            <!-- Main -->
               <div id="main">
                  <div class="container">
                     <div class="row">

                        <!-- Content -->
                        <div class="6u">
                           <section>
                              <ul class="style">
                                 <li class="fa fa-cogs">
                                    <h3>Our Mission</h3>
                                    <span>Proteomics is one of many complementary tools we apply to broaden our knowledge of biological systems. At UWPR we enable researchers to exploit powerful proteomic technologies to explore living systems and answer important biological questions.</span> </li>
                              </ul>
                           </section>
                        </div>
                        <div class="6u">
                           <section>
                              <ul class="style">
                                 <li class="fa fa-road">
                                    <h3>University of Washington</h3>
                                    <span>UWPR is located at the University of Washington School of Medicine, South Lake Union (SLU) campus.</span> </li>
                              </ul>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>

   </div>

<?php  include("__footer.php"); ?>

