<?php
require_once 'check_session.php';
require_once 'databaseconnectio';
?>          
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admission Management System</title>
    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts -->
    <header class="header">
      <a href="#" class="logo">Admission Management<span>System</span></a>
      <a class="menu fas fa-bars"></a>
      <nav class="navbar">
        <a href="#">home</a>
        <a href="#about">about</a>
        <a href="#services">catagory</a>
        <a href="#contact">contact</a>
        <a href="login.html">Log In</a>
        <a href="regform.html">Sign Up</a>
      </nav>
    </header>
    <!-- header section starts -->

    <!-- home section starts -->
    <section class="home" id="home">
      <h1>Admission Management System</h1>
      <p>Please contact for the admission on <b>Siddhanath Science Campus Mahendranagar Kanchanpur</b> in different types of faculty. </p>
      <a href="#" class="btn">learn more</a>
    </section>
    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">
      <div class="box-container">
        <div class="box">
          <h1 class="heading">about us</h1>
          <p>
            Siddhanath Science Campus was established in 1976 AD (2033 BS) as a community campus located in Bhimdatta Municipality, Mahendranagar, Kanchanpur district, Sudurpaschim Province of Nepal. It is affiliated to Tribhuvan University. Hence, it is completely supported and managed by the community. It is offering B.Sc CSIT, B.Sc, and M.Sc in Physics program. Unanimity in campus development among all the stakeholders including political parties, parents, representatives of the municipality, District Development Office, etc. Most of the officials and parents are the graduates of this campus. There is a sense of belongingness among all concerned.</p>
            <p>
            Siddhanath Science Campus has overcome many challenges and accomplished many achievements. It must be pride and prestige of Far Western Region because it is only one science campus in this area and it has qualified teachers, quality production and efforts of diverse developments. So the Siddhanath Science Campus has become a bright light of education in Far Western Nepal. Siddhanath Science Campus, the glory of Far Western Region, has earned its name and fame in science faculty across Nepal.
          </p>
          <p>
            Mahendranagar is an emerging town of Kanchanpur district in the far western Terai region of Nepal and also a border town adjoining Banbasa, India. It is mainly catering to the students from Kanchanpur and at least nine adjoining districts, mainly of the students are the first generation in higher education, many of them are from Dalit and disadvantaged Janajati groups
          </p>
        </div>

        <div class="box">
          <div class="image">
            <img src="1.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- about section ends -->

    <!-- catagory section starts -->
    <section class="services" id="services">
      <h1 class="heading">our catagory</h1>
      <div class="box-container">
        <div class="box">
          <img src="images/icon-1.svg" alt="" />
          <h3>Bachelor of Information Technology (BIT)</h3>
          <p>
            Bachelors in Information Technology (BIT) program of Tribhuvan University is designed by closely following the courses practiced 
            in accredited international universities, subject to the condition that the intake students are twelve years of schooling
             in any stream or equivalent from any recognized board. 

            In addition to the foundation and core Information Technology courses, Bachelors in Information Technology (BIT) offers several elective courses to meet the 
            undergraduate academic program requirement and to fulfill the demand for the development and implementation of new technology. 
          </p>
        </div>
        <div class="box">
          <img src="images/icon-2.svg" alt="" />
          <h3>Bachelor of Science in Computer Science of Information Technology (B.Sc.CSIT)</h3>
          <p>
            Tribhuvan University, Institute of Science and Technology has introduced a 4-year semester program, Bachelors of Science in Computer Science and Information Technology (B.Sc.CSIT). 
            The course designed for this program is highly acceptable and demanding to the nation and the IT industries all around the world. B.Sc.CSIT is four years eight-semester program offered by Tribhuvan University for the first time in Nepal.
             This program is being offered at the following constituent colleges of Tribhuvan University.
          </p>
        </div>
        <div class="box">
          <img src="images/icon-3.svg" alt="" />
          <h3>Bachelor of Science (B.Sc) in Physics</h3>
          <p>
                B.Sc Physics is a four-year annual program of Tribhuvan University. Tribhuvan University started 4 years Bachelor of Science in Physics (B.Sc Physics) from 2012 AD.
            Physics is one of the most fundamental of all sciences and is the basis of our scientific knowledge of the physical world. It seeks to explain the behavior of matter, time, and space in the universe and covers phenomena ranging from subnuclear interactions to cosmological events like the Big Bang.
            The traditional B.Sc. degree in Physics is centered on understanding scientific fundamentals and it is through this basic approach that advances in scientific knowledge and technological innovations have been made.
          </p>
        </div>
        <div class="box">
          <img src="images/icon-4.svg" alt="" />
          <h3>Bachelor of Science (B.Sc) in Chemistry</h3>
          <p>
            Bachelor of Science (B.Sc) in Chemistry is a four-year course of Tribhuvan University. B.Sc Chemistry is offered by many constituent and affiliated colleges of Tribhuvan University across the nation.
            Chemistry is regarded as the heart of all the scientific disciplines. 
            For a long time in the last century, chemical industries had been considered even as an index of national development. In this context, the history of Chemistry Education in our country is relatively new.
            The teaching of Chemistry in Nepal commenced in 1921 in Tri-Chandra College, with the introduction of Intermediate of Science (I. Sc.) program, which was then upgraded to Bachelor of Science (B. Sc.) level in 1947.
          </p>
        </div>
        <div class="box">
          <img src="images/icon-5.svg" alt="" />
          <h3>Bachelor of Science (B.Sc) in Microbiology</h3>
          <p>
            The Bachelor of Science (B.Sc) is a four-year course of Tribhuvan University which is offered by many constituent and affiliated colleges of Tribhuvan University across the nation.
          </p>
        </div>
        <div class="box">
          <img src="images/icon-6.svg" alt="" />
          <h3>Bachelor of Science (B.Sc) in Biology</h3>
          <p>
            The Bachelor of Science (B.Sc) is a four-year course of Tribhuvan University which is offered by many constituent and affiliated colleges of Tribhuvan University across the nation.
          </p>
        </div>
        
        <div class="box">
          <img src="images/icon-6.svg" alt="" />
          <h3>Master of Science (M.Sc) in physics</h3>
          <p>
            Physics majors seek to understand the laws that govern the universe. From gigantic stars trillions of miles away to the subatomic particles within our own bodies, physics takes on matter and energy in all its forms.
            Physics is the scientific study of matter and energy. Topics covered include classical and modern theories, electricity and magnetism, and relativity.

            Master level physics syllabus has been upgraded and updated as per four years B.Sc. physics. The new courses have been designed keeping in view with recent developments in Physics. Availability of additional specialties in new areas and upgraded quality of course will meet the requirement of prospective students.
            Various elective courses are incorporated in the syllabus and some of the old courses are thoroughly revised.
          </p>
        </div>
        
        <div class="box">
          <img src="images/icon-6.svg" alt="" />
          <h3>Master of Science (M.Sc) in Mathematics</h3>
          <p>
            M.Sc. Mathematics (Semester System) runs for two academic years, i.e., four semesters. The total aggregate of credit hours for the four semesters is at least 100. 
          </p>
        </div>
      </div>
    </section>
    <!-- services section ends -->

    
    <!-- contact section starts -->
    <section class="contact" id="contact">
      <h1 class="heading">contact us</h1>
      <div class="box-container">
        <div class="box">
          <h3>address</h3>
          <p>Bhimdatta-18, Mahendranagar Kanchanpur</p>
          <h3>email</h3>
          <p>info@snsc.edu.np</p>
          <h3>phone</h3>
          <p>+977-99-521304</p>
          <h3>Phone</h3>
          <p>+977-99-511220</p>
        </div>

        <form>
          <div class="inputBox">
            <input type="text" placeholder="your name" />
            <input type="text" placeholder="your number" />
          </div>
          <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>
      </div>
    </section>
    <!-- contact section ends -->

    <!-- footer section starts -->
    <section class="footer">
      <a href="#" class="logo">Admission<span>Website</span></a>
      <div class="socials">
        <ion-icon name="logo-google"></ion-icon>
        <ion-icon name="logo-twitter"></ion-icon>
        <ion-icon name="logo-youtube"></ion-icon>
        <ion-icon name="logo-linkedin"></ion-icon>
      </div>
    </section>
    <!-- footer section ends -->

    <!-- ionicons cdn -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- local js file -->
    <script src="script.js"></script>
  </body>
</html>

          