<?php $config = parse_ini_file('php/config/default.ini', true); ?>

<!DOCTYPE html>

<html>
  <head>
    <title>Resum&eacute; - ChristopherMarasco.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    
    <!-- Bootstrap CSS -->
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="libs/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
    
    <!-- Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet" media="screen" />
    <link href="css/mobile.css" rel="stylesheet" media="screen and (max-width: 480px)" />
    
    <!-- Custom JS -->
    <script src="js/active.js"></script>
  </head>
  <body>
    <nav>
      <!-- Navbar -->
      <?php include('php/static/navbar.php'); ?>
    </nav>
    <header>
      <!-- Header -->
      <?php include('php/static/header.php'); ?>
    </header>
    <section>
      <!-- Main content -->
      <div class="container">
        <div class="row">
          <div class="span12">
            <h2>Resum&eacute;</h2>
            <p class="lead">Thanks for reading my resum&eacute;. You can either read it online, <a href="./files/MarascoChristopherResume.pdf" class="btn btn-danger">Download the PDF</a> or <a href="./files/MarascoChristopherResume.doc" class="btn btn-primary">Download the .DOC</a>.</p>
            <ul class="nav nav-tabs">
              <li><a href="#objective" data-toggle="tab">Objective</a></li>
              <li><a href="#education" data-toggle="tab">Education</a></li>
              <li><a href="#experience" data-toggle="tab">Experience</a></li>
              <li><a href="#honors" data-toggle="tab">Honors</a></li>
              <li><a href="#skills" data-toggle="tab">Skills</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="objective">
                <h3>Objective</h3>
                <p>To obtain an engaging career relevant to my major field of study, preferably in a Systems Administration position working with virtualization technology.</p>
              </div>
              <div class="tab-pane" id="education">
                <h3>Education</h3>
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>College</th>
                    <th>Degree</th>
                    <th>Date</th>
                  </tr>
                  <tr>
                    <td>Kaplan University</td>
                    <td>M.S. In Information Security and Assurance</td>
                    <td>Expected August 2015</td>
                  </tr>
                  <tr>
                    <td>Rochester Institute of Technology</td>
                    <td>B.S. in Information Technology</td>
                    <td>February 2013</td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane" id="experience">
                <h3>Experience</h3>
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Company</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Dates</th>
                  </tr>
                  <tr>
                    <td>Modis</td>
                    <td>System Administrator</td>
                    <td>Rochester, NY</td>
                    <td>9/23/13 - Present</td>
                  </tr>
                  <tr>
                    <td>Synergy Global Solutions</td>
                    <td>Field Service Engineer</td>
                    <td>Rochester, NY</td>
                    <td>04/14/13 - 06/22/13</td>
                  </tr>
                  <tr>
                    <td>Rochester Institute of Technology</td>
                    <td>IT Services Supervisory Assistant</td>
                    <td>Rochester, NY</td>
                    <td>05/05/12 - 11/01/12</td>
                  </tr>
                  <tr>
                    <td>Rochester Institute of Technology</td>
                    <td>Assistant PC Systems Admin</td>
                    <td>Rochester, NY</td>
                    <td>08/22/11 - 03/01/12</td>
                  </tr>
                  <tr>
                    <td>NTID Technical Support Services</td>
                    <td>PC Technician (Co-Op)</td>
                    <td>Rochester, NY</td>
                    <td>03/11/10 - 05/31/10</td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane" id="honors">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Organization</th>
                    <th>Honor</th>
                    <th>Date</th>
                  </tr>
                  <tr>
                    <td>Sigma Alpha Mu Fraternity</td>
                    <td>President</td>
                    <td>Spring 2011 to Winter 2012</td>
                  </tr>
                  <tr>
                    <td>Sigma Alpha Mu Fraternity</td>
                    <td>Secretary</td>
                    <td>Spring 2010 to Winter 2011</td>
                  </tr>
                  <tr>
                    <td>Boy Scouts of America</td>
                    <td>Eagle Scout</td>
                    <td>Spring 2006</td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane" id="skills">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Languages</th>
                    <td>Java, HTML, CSS, PHP, javaScript, jQuery, Perl, Powershell</td>
                  </tr>
                  <tr>
                    <th>Systems</th>
                    <td>Microsoft XP-8.1, Microsoft Server 2008-2012R2, Macintosh OSX 10.4 - 10.9, Linux (Debian, Fedora, Ubuntu)</td>
                  </tr>
                  <tr>
                    <th>Software</th>
                    <td>Microsoft Office,MSSQL,  Adobe Photoshop and Flash, VMWare, Altiris, SCCM, DeployStudio, Norton Ghost, McAfee Anti-Virus, Apple Remote Desktop, EMC's Networker.
                  </tr>
                  <tr>
                    <th>Courses</th>
                    <td>Computer System Fundamentals, Network Fundamentals, Intro to Routing and Switching, Web Design and Development, OS Scripting, Programming for Information Technology I - III, Network Design and Performance, Computer networks, Cryptography, Database and SQL Query design, IT and Security Project Management.</td>
                  </tr>
                  <tr>
                    <th>Other</th>
                    <td>Excellent oral and written communication skills, PC proficiency, customer service/leadership qualities, and willingness to learn</td>
                  </tr>
                  <tr>
                    <th>Certifications</th>
                    <td>
                      <img src="img/VCP-DCV-sm.gif" alt="VCA-VDC" class="img" />
                      <img src="img/VCA-DCV-sm.gif" alt="VCA-VDC" class="img" />
                      <img src="img/VCA-Cloud-sm.gif" alt="VCA-VCloud" class="img" />
                      <img src="img/comptia.jpg" alt="CompTIA A+ Certified" class="img" />
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <!-- Footer -->
      <?php include('php/static/footer.php'); ?>
    </footer>
      <!-- Analytics -->
      <?php include('js/googleanalytics.js'); ?>
  </body>
</html>
