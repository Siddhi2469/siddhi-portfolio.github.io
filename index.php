<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>port-folio</title>

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="./assets/images/logo.ico"
      type="image/x-icon"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!--
    - #MAIN
  -->

    <main>
      <!--
      - #SIDEBAR
    -->

      <aside class="sidebar" data-sidebar>
        <div class="sidebar-info">
          <figure class="avatar-box">
            <img
              src="C:\Users\Siddh\Downloads\portfolio website\bhanu\assets\images\myavatar.png"
              alt="Richard hanrick"
              width="90"
            />
          </figure>

          <div class="info-content">
            <h1 class="name" title="Richard hanrick">Siddhi Chabukswar</h1>

            <p class="title">Web developer
              (HTML, CSS, JavaScript)
            </p>

          </div>

          <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>

            <ion-icon name="chevron-down"></ion-icon>
          </button>
        </div>

        <div class="sidebar-info_more">
          <div class="separator"></div>

          <ul class="contacts-list">
            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="mail-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Email</p>

                <a href="mailto:richard@example.com" class="contact-link"
                  >siddheshwarichabukswar123@gmail.com</a
                >
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="phone-portrait-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Phone</p>

                <a href="tel:+12133522795" class="contact-link">9021174025</a>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="calendar-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Birthday</p>

                <time datetime="1982-06-23">sep 23, 2002</time>
              </div>
            </li>

            <li class="contact-item">
              <div class="icon-box">
                <ion-icon name="location-outline"></ion-icon>
              </div>

              <div class="contact-info">
                <p class="contact-title">Location</p>

                <address>Maharastra india</address>
              </div>
            </li>
          </ul>

          
          <div class="separator"></div>
<!--
          <ul class="social-list">
            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li class="social-item">
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
          </ul>
        -->
        </div>
      </aside>
    


      <!--
      - #main-content
    -->

      <div class="main-content">
        <!--
        - #NAVBAR
      -->

        <nav class="navbar">
          <ul class="navbar-list">
            <li class="navbar-item">
              <button class="navbar-link active" data-nav-link>About</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Resume</button>
            </li>

            <!--<li class="navbar-item">
              <button class="navbar-link" data-nav-link>Portfolio</button>
            </li>

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Blog</button>
            </li>-->

            <li class="navbar-item">
              <button class="navbar-link" data-nav-link>Contact</buttobn>
              <!-- <a href="#contact">contact</a> -->
            </li>
          </ul>
        </nav>

        <!--
        - #ABOUT
      -->

        <article class="about active" data-page="about">
          <header>
            <h2 class="h2 article-title">About me</h2>
          </header>

          <section class="about-text">
            <p>
             To Secure a position of Web Developer in a reputed company.
             Where I can enhance my technical knowledge.To utilize my technical skills 
             for achieving the target and developing the best performance in the organization. 
             I would like to implement my innovative ideas. Skills and creativity for
             accomplishing the projects.

            </p>
    <!--
            <p>
              My job is to build your website so that it is functional and
              user-friendly but at the same time attractive. Moreover, I add
              personal touch to your product and make sure that is eye-catching
              and easy to use. My aim is to bring across your message and
              identity in the most creative way. I created web design for many
              famous brand companies.
            </p>
          -->
          </section>

          <!--
          - service
        -->

          <section class="service">
            <h3 class="h3 service-title">What i'm doing</h3>

            <ul class="service-list">
              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-design.svg
                "
                    alt="design icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Web design</h4>

                  <p class="service-item-text">
                    The most modern and high-quality design made at a
                    professional level.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-dev.svg"
                    alt="Web development icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Web development</h4>

                  <p class="service-item-text">
                    Quality development of sites.
                  </p>
                </div>
              </li>
              <!--



              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-app.svg"
                    alt="mobile app icon"
                    width="40"
                  />
                </div>

                <div class="service-content-box">
                  <h4 class="h4 service-item-title">Mobile apps</h4>

                  <p class="service-item-text">
                    Professional development of applications for iOS and
                    Android.
                  </p>
                </div>
              </li>

              <li class="service-item">
                <div class="service-icon-box">
                  <img
                    src="./assets/images/icon-photo.svg"
                    alt="camera icon"
                    width="40"
                  />
                </div>
              -->
                <!--

               <div class="service-content-box">
                  <h4 class="h4 service-item-title">Photography</h4>

                  <p class="service-item-text">
                    I make high-quality photos of any category at a professional
                    level.
                  </p>
                </div> -->
          
                </li>
            </ul>
          </section>

          <!--
          - testimonials
          

          <section class="testimonials">
            <h3 class="h3 testimonials-title">Testimonials</h3>

            <ul class="testimonials-list has-scrollbar">
              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-1.png"
                      alt="Daniel lewis"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                    Daniel lewis
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Bhanuprakash was hired to create a corporate identity. We
                      were very pleased with the work done. She has a lot of
                      experience and is very concerned about the needs of
                      client. Lorem ipsum dolor sit amet, ullamcous cididt
                      consectetur adipiscing elit, seds do et eiusmod tempor
                      incididunt ut laborels dolore magnarels alia.
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-2.png"
                      alt="Jessica miller"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                    Jessica miller
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Bhanuprakash was hired to create a corporate identity. We
                      were very pleased with the work done. She has a lot of
                      experience and is very concerned about the needs of
                      client. Lorem ipsum dolor sit amet, ullamcous cididt
                      consectetur adipiscing elit, seds do et eiusmod tempor
                      incididunt ut laborels dolore magnarels alia.
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-3.png"
                      alt="Emily evans"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                    Emily evans
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Bhanuprakash was hired to create a corporate identity. We
                      were very pleased with the work done. She has a lot of
                      experience and is very concerned about the needs of
                      client. Lorem ipsum dolor sit amet, ullamcous cididt
                      consectetur adipiscing elit, seds do et eiusmod tempor
                      incididunt ut laborels dolore magnarels alia.
                    </p>
                  </div>
                </div>
              </li>

              <li class="testimonials-item">
                <div class="content-card" data-testimonials-item>
                  <figure class="testimonials-avatar-box">
                    <img
                      src="./assets/images/avatar-4.png"
                      alt="Henry william"
                      width="60"
                      data-testimonials-avatar
                    />
                  </figure>

                  <h4
                    class="h4 testimonials-item-title"
                    data-testimonials-title
                  >
                    Henry william
                  </h4>

                  <div class="testimonials-text" data-testimonials-text>
                    <p>
                      Bhanuprakash was hired to create a corporate identity. We
                      were very pleased with the work done. She has a lot of
                      experience and is very concerned about the needs of
                      client. Lorem ipsum dolor sit amet, ullamcous cididt
                      consectetur adipiscing elit, seds do et eiusmod tempor
                      incididunt ut laborels dolore magnarels alia.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </section>
        -->
        

          <!--
          - testimonials modal
          -->

          <div class="modal-container" data-modal-container>
            <div class="overlay" data-overlay></div>

            <section class="testimonials-modal">
              <button class="modal-close-btn" data-modal-close-btn>
                <ion-icon name="close-outline"></ion-icon>
              </button>

              <div class="modal-img-wrapper">
                <figure class="modal-avatar-box">
                  <img
                    src="./assets/images/avatar-1.png"
                    alt="Daniel lewis"
                    width="80"
                    data-modal-img
                  />
                </figure>

                <img src="./assets/images/icon-quote.svg" alt="quote icon" />
              </div>

              <div class="modal-content">
                <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                <time datetime="2021-06-14">14 June, 2021</time>

                <div data-modal-text>
                  <p>
                    Richard was hired to create a corporate identity. We were
                    very pleased with the work done. She has a lot of experience
                    and is very concerned about the needs of client. Lorem ipsum
                    dolor sit amet, ullamcous cididt consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels
                    dolore magnarels alia.
                  </p>
                </div>
              </div>
            </section>
          </div>
        

          <!--
          - clients
          -->

          <section class="Achivements">
            <h3 class="h3 Achivements-title">Achivements</h3>
            <p>Awarded second prize in National Level Paper presentation.</p>
            <p>Awarded first prize in Paper Presentation in College level competition.</p>
            <p>Certified in HTML, CSS, JavaScript from Udemy.</p>
            <p> Certified in Complete SQL Bootcamp with MySQL from Udemy.</p>
            <p> Certified in GitHub from Udemy.</p>

              
<!--
            <ul class="clients-list has-scrollbar">
              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-1-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-2-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-3-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-4-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-5-color.png"
                    alt="client logo"
                  />
                </a>
              </li>

              <li class="clients-item">
                <a href="#">
                  <img
                    src="./assets/images/logo-6-color.png"
                    alt="client logo"
                  />
                </a>
              </li>
            </ul>
          -->
          </section>
        </article>
      
      

        <!--
        - #RESUME
         -->

        <article class="resume" data-page="resume">
          <header>
            <h2 class="h2 article-title">Resume</h2>
          </header>

          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Education</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                  Shree Siddheshwar Women's College of Engineering,solapur
          
                </h4>

                <span>2021 - 2024</span>

                <p class="timeline-text">
                  Department of Information Technology.
                </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">
                A.G Patil Polytechnic,Solapur
                </h4>

                <span>2018 - 2021</span>

                <p class="timeline-text">
                  Department of Computer science.
                </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">K.L.E English Medium school,Solapur</h4>

                <span>2007 - 2018</span>

                <p class="timeline-text">
                  Completed my secondary education From CBSE Board.
                </p>
              </li>
            </ol>
          </section>
<!--
          <section class="timeline">
            <div class="title-wrapper">
              <div class="icon-box">
                <ion-icon name="book-outline"></ion-icon>
              </div>

              <h3 class="h3">Experience</h3>
            </div>

            <ol class="timeline-list">
              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">Web developer</h4>

                <span>2022 — Present</span>

                <p class="timeline-text">
                  I am a web developer and a truelancer and i have devveloped so
                  many websites for popular companies.
                </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">web -designer</h4>

                <span>2019 — 2021</span>

                <p class="timeline-text">
                  I started my web development career with web design and
                  created meny attractive and responsive websites.
                </p>
              </li>

              <li class="timeline-item">
                <h4 class="h4 timeline-item-title">data entry operator</h4>

                <span>2018 — 2019</span>

                <p class="timeline-text">
                  I started my jurney with data entry operator worked 1 year for
                  a company and started learning web development
                </p>
              </li>
            </ol>
          </section>
        -->

          <section class="skill">
            <h3 class="h3 skills-title">My skills</h3>

            <ul class="skills-list content-card">
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Web design</h5>
                  <data value="80">80%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 80%"></div>
                </div>
              </li>
<!--
              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Graphic design</h5>
                  <data value="70">70%</data>
                </div>
              

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 70%"></div>
                </div>
              </li>
            -->

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">communication</h5>
                  <data value="80">90%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 90%"></div>
                </div>
              </li>

              <li class="skills-item">
                <div class="title-wrapper">
                  <h5 class="h5">Python</h5>
                  <data value="50">50%</data>
                </div>

                <div class="skill-progress-bg">
                  <div class="skill-progress-fill" style="width: 50%"></div>
                </div>
              </li>
            </ul>
          </section>
        </article>

        <!--
        - #PORTFOLIO
      -->

        <article class="portfolio" data-page="portfolio">
          <header>
            <h2 class="h2 article-title">Portfolio</h2>
          </header>

          <section class="projects">
            <ul class="filter-list">
              <li class="filter-item">
                <button class="active" data-filter-btn>All</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Web design</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Applications</button>
              </li>

              <li class="filter-item">
                <button data-filter-btn>Web development</button>
              </li>
            </ul>

            <div class="filter-select-box">
              <button class="filter-select" data-select>
                <div class="select-value" data-selecct-value>
                  Select category
                </div>

                <div class="select-icon">
                  <ion-icon name="chevron-down"></ion-icon>
                </div>
              </button>
d
              <ul class="select-list">
                <li class="select-item">
                  <button data-select-item>All</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Web design</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Applications</button>
                </li>

                <li class="select-item">
                  <button data-select-item>Web development</button>
                </li>
              </ul>
            </div>

            <ul class="project-list">
              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-1.jpg"
                      alt="finance"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Finance</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-2.png"
                      alt="orizon"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Orizon</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-3.jpg"
                      alt="fundo"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Fundo</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="applications"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-4.png"
                      alt="brawlhalla"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Gamer</h3>

                  <p class="project-category">Applications</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-5.png"
                      alt="dsm."
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">DSM.</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web design"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-6.png"
                      alt="metaspark"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">MetaSpark</h3>

                  <p class="project-category">Web design</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-7.png"
                      alt="summary"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Summary</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="applications"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-8.jpg"
                      alt="task manager"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Task Manager</h3>

                  <p class="project-category">Applications</p>
                </a>
              </li>

              <li
                class="project-item active"
                data-filter-item
                data-category="web development"
              >
                <a href="#">
                  <figure class="project-img">
                    <div class="project-item-icon-box">
                      <ion-icon name="eye-outline"></ion-icon>
                    </div>

                    <img
                      src="./assets/images/project-9.png"
                      alt="arrival"
                      loading="lazy"
                    />
                  </figure>

                  <h3 class="project-title">Arrival</h3>

                  <p class="project-category">Web development</p>
                </a>
              </li>
            </ul>
          </section>
        </article>

        <!--
        - #BLOG
      -->

        <article class="blog" data-page="blog">
          <header>
            <h2 class="h2 article-title">Blog</h2>
          </header>

          <section class="blog-posts">
            <ul class="blog-posts-list">
              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-1.jpg"
                      alt="Design conferences in 2022"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      Design conferences in 2022
                    </h3>

                    <p class="blog-text">
                      Created this blog for design conference in 2022.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-2.jpg"
                      alt="Best fonts every designer"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      Best fonts every designer
                    </h3>

                    <p class="blog-text">
                      Blog created for developers and designer to give best
                      fonts for their projects.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-3.jpg"
                      alt="Design digest #80"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">Design digest #80</h3>

                    <p class="blog-text">
                      This blog for designers to improve their creativity.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-4.jpg"
                      alt="UI interactions of the week"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      UI interactions of the week
                    </h3>

                    <p class="blog-text">
                      This blog about best ui interactions developed in the
                      week.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-5.jpg"
                      alt="The forgotten art of spacing"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">
                      The forgotten art of spacing
                    </h3>

                    <p class="blog-text">
                      Blog is for creators The importence of spacing in design
                      proffesion.
                    </p>
                  </div>
                </a>
              </li>

              <li class="blog-post-item">
                <a href="#">
                  <figure class="blog-banner-box">
                    <img
                      src="./assets/images/blog-6.jpg"
                      alt="Design digest #79"
                      loading="lazy"
                    />
                  </figure>

                  <div class="blog-content">
                    <div class="blog-meta">
                      <p class="blog-category">Design</p>

                      <span class="dot"></span>

                      <time datetime="2022-02-23">Fab 23, 2022</time>
                    </div>

                    <h3 class="h3 blog-item-title">Design digest #79</h3>

                    <p class="blog-text">
                      This blog for designers to improve their creativity.
                    </p>
                  </div>
                </a>
              </li>
            </ul>
          </section>
        </article>

        <!--
        - #CONTACT
      -->
       <div class="contact" id="contact">
        <article class="contact" data-page="contact">
          <header>
            <h2 class="h2 article-title">Contact</h2>
          </header>

          <section class="mapbox" data-mapbox>
            <figure>
              <iframe
                src=https://www.google.com/maps/place/Jyoti+Digital+Photo+Studio/@17.6532567,75.9239422,15z/data=!4m6!3m5!1s0x3bc5db41fb7046fd:0xb5d3ac0f7e3bcc65!8m2!3d17.6532567!4d
                width="400"
                height="300"
                loading="lazy"
              ></iframe>
            </figure>
          </section>

          <section class="contact-form">
            <h3 class="h3 form-title">Contact Form</h3>

            <form
              action="assets/php/data.php"
              class="form"
              data-form
              method="post"
            >
              <div class="input-wrapper">
                <input
                  type="text"
                  name="fullname"
                  class="form-input"
                  placeholder="Full name"
                  required
                  data-form-input
                />

                <input
                  type="email"
                  name="email"
                  class="form-input"
                  placeholder="Email address"
                  required
                  data-form-input
                />
              </div>

              <textarea
                name="message"
                class="form-input"
                placeholder="Your Message"
                required
                data-form-input
              ></textarea>

              <button class="form-btn" type="submit" disabled data-form-btn>
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
              </button>
            </form>
          </section>
        </article>
      </div>
    </main>
    </div>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
