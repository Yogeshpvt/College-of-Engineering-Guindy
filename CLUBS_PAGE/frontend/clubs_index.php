<?php


    include('C:\xampp\htdocs\project\DATABASE\database_scripts.php');
    $user_data = check_login();

?>

<!DOCTYPE html>
<html>
<head>
    <title>College of Engineering Guindy | Clubs</title>
    <link rel="stylesheet" href="project.css">
    <link rel="shortcut icon" href="AU_logo.ico">
        <meta charset ="UTF-8"/>
        <meta name ="keywords" content="html, css, js"/>
        <meta name ="author" content="YOGESH V, 2020115107" />
        <meta name ="robots" content="index,follow"/>
        <meta http-equiv ="refresh" content="30"/>
        <meta name ="language" content="EN_US"/>
        <meta name ="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body style=" background: url(redbrick.jpg) no-repeat; background-size: cover;">
              <header>
                <div class="container">
                        <div id="brand">
                                <img src="AU_logo.jpg" alt="logo" height="100" width="100">
                                <h1>College of Engineering Guindy</h1>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="http://localhost/project/CLUBS_PAGE/backend/clubs_logout.php">Logout</a></li>
                            </ul>
                        </nav>


              </div>
              </header>

  <h1 id="forms" style="margin-top:-5px; text-align:center;">CEG CLUBS</h1>
  <div class="container">

  <?php echo "<p style='color:#02db30; font-size:45px; text-align:center; background: #4d0d0d; opacity:0.9; margin-bottom: -0.5px;'>"."Welcome &nbsp". $user_data['user_name']. "&nbsp !"."</p>"; ?>
  <section style="opacity:0.9;" id="departments">
  <img src="clubs.jpg">
  <h3 style="margin-bottom:-5px;  margin-top:-18px;">Students Association of CEG</h3>
  <p>The Students Association of CEG, generally abbreviated as SA-CEG is the official student representative body of the institution. They are a channel of communication between the management and the students and voice out matters that include academia and welfare.</p>
  <h3 style="margin-bottom:-5px; margin-top:-18px;">Literary Club of Anna University</h3>
  <p>The literary club seeks to nurture the literary talents of the students. It conducts various inter- and intra- college events and training activities through the year in this sphere.</p>
  <h3 style="margin-bottom:-5px; margin-top:-18px;">Rotaract Club of CEG</h3>
  <p>The Rotaract club seeks to improve the leadership and professional skills of the students in addition to moulding them into responsible individuals. They organize various events that foster the spirit of social responsibility.</p>
  <h3 style="margin-bottom:-5px; margin-top:-18px;">ACM Student Chapter of CEG</h3>
  <p>The ACM Student Chapter of CEG, generally abbreviated as ACM CEG is the official student Chapter of ACM in the institution. It's aim is to motivate students to embark on the journey of learning and developing the tools of computer science and instilling in them a passion for computer science. It serves to clear the clutter and provide guidance to help them to achieve their goals.</p>
  <h3 style="margin-bottom:-5px; margin-top:-18px;">Twisters</h3>
  <p>The official dance troupe of CEG, with extremely high reputation in the city for excellence in performance and creativity, train and encourage the interested with distinctive dance techniques.</p>
  <h3 style="margin-bottom:-5px; margin-top:-18px;">Green Brigade</h3>
  <p>Green brigade is the only non-technical club of CEG that aims to promote environmental awareness. It also organizes various events in association with other NGOs that work for similar causes.</p>
  <img style= "margin-top:-17px;"src="festivals.jpg">
  <h3 style="margin-bottom:-7px;  margin-top:-18px;">Kurukshetra(K!)</h3>
  <p>The reputation of CEG as a premier technical institution is evidenced by the brilliance of its student body. Kurukshetra, CEG's inter-college techno-management festival, upholds that reputation and takes pride in being the first ever techno-management college fest in India to obtain UNESCO patronage. K! sees thousands of students from all over the country pour into CEG to showcase their skills and utilize the learning platform.Kurukshetra is hosted for 4 days in January, and is packed with a range of events.<br><br>Technical quizzes, mind-bending games, paper presentations and more see students prove their worth in the face of steep competition. Technical workshops, Guest lectures etc. conducted by several influential technology organizations, provide students with opportunities to expand their knowledge beyond the norm.</p>
  </section>
  <!-- <h1>Book Your Slot</h1>
  <a href= "http://localhost/project/IT%20LAB%20MINI%20PROJECT/Register/frontend/register.php">SLOT</a> -->
</div>
  <section id="link1">
      <h3>Tap the button below to book your slot for upcoming Kurukshetra events</h3>
      <a href="http://localhost/project/IT%20LAB%20MINI%20PROJECT/Register/frontend/register.php" target="_blank">Book Slot </a>
    </sectiom>
</body>
</html>
