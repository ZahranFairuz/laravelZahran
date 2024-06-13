<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
 
 *{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: quicksand, sans-serif;
   text-decoration: none;
 }
 
 body{
   overflow-x: hidden;
 }
 
 .hero-header{
   width: 100%;
   height: 100%;
   min-height: 100vh;
   background: #222;
 }
 
 .wrapper{
   width: 1280px;
   max-width: 95%;
   margin: 0 auto;
   padding: 0 20px;
 }
 
 header{
   padding: 40px 0 30px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   flex-wrap: wrap;
 }
 
 .logo {
   display: inline-flex;
   justify-content: center;
   align-items: center;
 }
 
 .logo i{
   height: 45px;
   width: 45px;
   background-color:cyan;
   border-radius: 50%;
   color: #fff;
   font-weight: 700;
   font-size: 1.5rem;
   padding: 10px;
   margin-right: 5px;
   cursor: pointer;
   text-align: center;
 }
 .logo .logo-text{
   font-size: 24px;
   font-weight: 500;
   color: #fff;
 }
 nav .togglebtn{
   width: 35px;
   height: 35px;
   position: absolute;
   top: 45px;
   right: 3%;
   z-index: 5;
   cursor: pointer;
  display: none;
 }
 nav .togglebtn span{
   display: block;
   background-color: #007ced;
   margin: 5px 0px;
   width: 100%;
   height: 3px;
   transition: 0.3s;
   transition-property: transform, opacity;
 }
 nav .navlinks{
   list-style-type: none;
 }
 nav .navlinks li{
   display: inline-block;
 }
 nav .navlinks li a{
   color: #e5e5e5;
   margin-right: 2.5rem;
 }
 .container {
   display: flex;
   justify-content: space-around;
   align-items: center;
   padding-top: 4rem;
 }
 .container .hero-pic{
   width: 300px;
   height: 300px;
   border-radius: 50px;
   overflow: hidden;
   border: 15px solid #444;
   box-shadow: 5px 7px 25px rgba(0,0,0,0.5);
 }
 .hero-pic img{
   height: 100%;
   width: 100%;
   transition: 0.5s;
 }
 .hero-pic img:hover {
   transform: scale(1.2);
 }
 .hero-text {
   max-width: 500px;
   display: flex;
   flex-direction: column;
   margin-bottom: 30px;
 }
 
 .hero-text h5{
   color: #e5e5e5;
   font-size: 14px;
 }
 .hero-text h5 span{
   color: cyan;
   font-size: 16px;
 }
 .hero-text h1{
   color: cyan;
   font-size: 3rem;
 }
 .hero-text p{
   color: #e5e5e5;
 }
 .btn-group{
   margin: 4hpx 0;
   margin-top: 60px;
 }
 .btn-group .btn{
   border-color: #d5d5d5;
   color: #fff;
   background-color: #333;
   padding: 12px 25px;
   margin: 5px 0;
   margin-right: 7px;
   border-radius: 30px;
   border: 2px solid #e5e5e5;
   box-shadow: 0 10px 10px -8px rgb(0 0 0 / 78%);
 }
 .btn.active{
   border-color: cyan;
 }
 .hero-text .social i{
   color: #e5e5e5;
   font-size: 18px;
   margin-right: 10px;
   transition: 0.5s;
 }
 .hero-text .social i:hover{
   color: #007ced;
   transform: rotate(360deg);
 }
 
 .page-section {
   padding: 6rem 0;
   color: #e5e5e5;
   width: 100%;
   height: 100%;
   min-height: 100vh;
   background: #222;
 }
 
 .page-section h2.section-heading, .page-section .section-heading.h2 {
   font-size: 2.5rem;
   margin-top: 0;
   margin-bottom: 1rem;
 }
 .page-section h3.section-subheading, .page-section .section-subheading.h3 {
   font-size: 1rem;
   font-weight: 400;
   font-style: italic;
   font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
   margin-bottom: 4rem;
 }
 
 .rounded-circle {
 border-radius: 100%;
 width: 100%;
 height: 100%;
 }
  
 .timeline {
   position: relative;
   padding: 0;
   list-style: none;
 }
 .timeline:before {
   position: absolute;
   top: 0;
   bottom: 0;
   left: 40px;
   width: 2px;
   margin-left: -1.5px;
   content: "";
   background-color: #e9ecef;
 }
 .timeline > li {
   position: relative;
   min-height: 50px;
   margin-bottom: 50px;
 }
 .timeline > li:after, .timeline > li:before {
   display: table;
   content: " ";
 }
 .timeline > li:after {
   clear: both;
 }
 .timeline > li .timeline-panel {
   position: relative;
   float: right;
   width: 100%;
   padding: 0 20px 0 100px;
   text-align: left;
 }
 .timeline > li .timeline-panel:before {
   right: auto;
   left: -15px;
   border-right-width: 15px;
   border-left-width: 0;
 }
 .timeline > li .timeline-panel:after {
   right: auto;
   left: -14px;
   border-right-width: 14px;
   border-left-width: 0;
 }
 .timeline > li .timeline-image {
   position: absolute;
   z-index: 100;
   left: 0;
   width: 80px;
   height: 80px;
   margin-left: 0;
   text-align: center;
   color: white;
   border: 7px solid #e9ecef;
   border-radius: 100%;
   background-color: #ffc800;
 }
 .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
   font-size: 10px;
   line-height: 14px;
   margin-top: 12px;
 }
 .timeline > li.timeline-inverted > .timeline-panel {
   float: right;
   padding: 0 20px 0 100px;
   text-align: left;
 }
 .timeline > li.timeline-inverted > .timeline-panel:before {
   right: auto;
   left: -15px;
   border-right-width: 15px;
   border-left-width: 0;
 }
 .timeline > li.timeline-inverted > .timeline-panel:after {
   right: auto;
   left: -14px;
   border-right-width: 14px;
   border-left-width: 0;
 }
 .timeline > li:last-child {
   margin-bottom: 0;
 }
 .timeline .timeline-heading h4, .timeline .timeline-heading .h4 {
   margin-top: 0;
   color: inherit;
 }
 .timeline .timeline-heading h4.subheading, .timeline .timeline-heading .subheading.h4 {
   text-transform: none;
 }
 .timeline .timeline-body > ul,
 .timeline .timeline-body > p {
   margin-bottom: 0;
 }
 
 @media (min-width: 768px) {
   .timeline:before {
     left: 50%;
   }
   .timeline > li {
     min-height: 100px;
     margin-bottom: 100px;
   }
   .timeline > li .timeline-panel {
     float: left;
     width: 41%;
     padding: 0 20px 20px 30px;
     text-align: right;
   }
   .timeline > li .timeline-image {
     left: 50%;
     width: 100px;
     height: 100px;
     margin-left: -50px;
   }
   .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
     font-size: 13px;
     line-height: 18px;
     margin-top: 16px;
   }
   .timeline > li.timeline-inverted > .timeline-panel {
     float: right;
     padding: 0 30px 20px 20px;
     text-align: left;
   }
 }
 @media (min-width: 992px) {
   .timeline > li {
     min-height: 150px;
   }
   .timeline > li .timeline-panel {
     padding: 0 20px 20px;
   }
   .timeline > li .timeline-image {
     width: 150px;
     height: 150px;
     margin-left: -75px;
   }
   .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
     font-size: 18px;
     line-height: 26px;
     margin-top: 30px;
   }
   .timeline > li.timeline-inverted > .timeline-panel {
     padding: 0 20px 20px;
   }
 }
 @media (min-width: 1200px) {
   .timeline > li {
     min-height: 170px;
   }
   .timeline > li .timeline-panel {
     padding: 0 20px 20px 100px;
   }
   .timeline > li .timeline-image {
     width: 170px;
     height: 170px;
     margin-left: -85px;
   }
   .timeline > li .timeline-image h4, .timeline > li .timeline-image .h4 {
     margin-top: 40px;
   }
   .timeline > li.timeline-inverted > .timeline-panel {
     padding: 0 100px 20px 20px;
   }
 }
 
 .contents {
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   background-color: black;
   color: white;
   padding-bottom: 100px;
 }
 
 .contents-list {
   box-shadow: 5px 5px aqua;
   background-color: #2f2e2e;
   width: 300px;
   height: 335px;
   border: #2f2e2e;
   margin-top: 100px;
   margin-right: 16px;
   border-radius: 5px;
   margin-left: 80px;
 }
 
 
 
 .contents-list img {
   width: 260px;
   height: 270px;
   margin-left: 20px;
   margin-top: 10px;
 }
 
 .contents-list p {
   color: white;
   margin-left: 15px;
 }
 
 .contact{
   width: 80%;
   background: rgb(45, 44, 44);
   border-radius: 6px;
   padding: 30px 60px 40px 40px;
   box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
   color: white;
   margin-left: 120px;
   filter:drop-shadow(16px 7px 8px cyan)
 }
 
 .contact .contact-title {
   display: flex;
   align-items: center;
   justify-content: space-between;
 }
 
 .contact .contact-title .left-side {
   width: 25%;
   height: 100%;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: center;
   margin-top: 15px;
   position: relative;
 }
 
 .contact-title .left-side::before{
   content: '';
   position: absolute;
   height: 70%;
   width: 2px;
   right: -15px;
   top: 40%;
   transform: translateY(-50%);
   background: #afafb6;
 }
 
 .contact-title .left-side .details {
   margin: 14px;
   text-align: center;
 }
 
 .contact-title .left-side .details i {
   font-size: 30px;
   color: blue;
   margin-bottom: 10px;
 }
 
 .contact-title .left-side .details .topic {
   font-size: 18px;
   font-weight: 500;
 }
 
 .contact-title .left-side .details .text-one,
 .contact-title .left-side .details .text-two {
   font-size: 14px;
   color: #afafb6;
 }
 
 .contact .contact-title .right-side {
   width: 75%;
   margin-left: 75px;
 }
 
 .contact-title .right-side .topic-text {
   font-size: 23px;
   font-weight: 600;
   color: cyan;
 }
 
 .right-side .input-box {
   height: 50px;
   width: 100%;
   margin: 12px 0;
 }
 
 .right-side .input-box input,
 .right-side .input-box textarea {
   height: 100%;
   width: 100%;
   border: none;
   font-size: 16px;
   background: #3a3a3b;
   border-radius: 6px;
   padding: 0 15px;
   resize: none;
   color: white;
 }
 
 .right-side .message-box {
   min-height: 110px;
   margin-top: 6px;
 }
 .right-side .button{
   display:inline-block;
   margin-top: 12px;
 }
 .right-side .button input[type="button"]{
   color: #fff;
   font-size: 18px;
   outline: none;
   border: none;
   padding: 8px 16px;
   border-radius: 6px;
   background: #3e2093;
   cursor: pointer;
   transition: all 0.3s ease;
 }
 
 .button input[type="button"]:hover {
   background: #5029bc;
 }
 
 .contan {
   background-color: #414141;
   padding: 40px;
 }
 
 footer {
   background-color: rgb(50, 50, 50);
   width: 100%;
   height: 80px;
   text-align: center;
   line-height: 40px;
   color: aliceblue;
 }
 
 @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
 
 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Quicksand', sans-serif;
   text-decoration: none;
 }
 
 body {
   overflow-x: hidden;
 }
 
 .hero-header {
   width: 100%;
   height: 100%;
   min-height: 100vh;
   background: #222;
 }
 
 .wrapper {
   width: 100%;
   max-width: 1280px;
   margin: 0 auto;
   padding: 0 20px;
 }
 
 header {
   padding: 40px 0 30px;
   display: flex;
   justify-content: space-between;
   align-items: center;
   flex-wrap: wrap;
 }
 
 .logo {
   display: inline-flex;
   justify-content: center;
   align-items: center;
 }
 
 .logo i {
   height: 45px;
   width: 45px;
   background-color: cyan;
   border-radius: 50%;
   color: #fff;
   font-weight: 700;
   font-size: 1.5rem;
   padding: 10px;
   margin-right: 5px;
   cursor: pointer;
   text-align: center;
 }
 
 .logo .logo-text {
   font-size: 24px;
   font-weight: 500;
   color: #fff;
 }
 
 nav .togglebtn {
   width: 35px;
   height: 35px;
   position: absolute;
   top: 45px;
   right: 3%;
   z-index: 5;
   cursor: pointer;
   display: none;
 }
 
 nav .togglebtn span {
   display: block;
   background-color: #007ced;
   margin: 5px 0px;
   width: 100%;
   height: 3px;
   transition: 0.3s;
   transition-property: transform, opacity;
 }
 
 nav .navlinks {
   list-style-type: none;
 }
 
 nav .navlinks li {
   display: inline-block;
 }
 
 nav .navlinks li a {
   color: #e5e5e5;
   margin-right: 2.5rem;
 }
 
 .container {
   display: flex;
   flex-direction: column;
   align-items: center;
   padding-top: 4rem;
   text-align: center;
 }
 
 .container .hero-pic {
   width: 300px;
   height: 300px;
   border-radius: 50px;
   overflow: hidden;
   border: 15px solid #444;
   box-shadow: 5px 7px 25px rgba(0, 0, 0, 0.5);
 }
 
 .hero-pic img {
   height: 100%;
   width: 100%;
   transition: 0.5s;
 }
 
 .hero-pic img:hover {
   transform: scale(1.2);
 }
 
 .hero-text {
   max-width: 500px;
   display: flex;
   flex-direction: column;
   margin-bottom: 30px;
 }
 
 .hero-text h5 {
   color: #e5e5e5;
   font-size: 14px;
 }
 
 .hero-text h5 span {
   color: cyan;
   font-size: 16px;
 }
 
 .hero-text h1 {
   color: cyan;
   font-size: 2.5rem;
 }
 
 .hero-text p {
   color: #e5e5e5;
 }
 
 .btn-group {
   margin-top: 60px;
 }
 
 .btn-group .btn {
   border-color: #d5d5d5;
   color: #fff;
   background-color: #333;
   padding: 12px 25px;
   margin: 5px 0;
   margin-right: 7px;
   border-radius: 30px;
   border: 2px solid #e5e5e5;
   box-shadow: 0 10px 10px -8px rgb(0 0 0 / 78%);
 }
 
 .btn.active {
   border-color: cyan;
 }
 
 .hero-text .social i {
   color: #e5e5e5;
   font-size: 18px;
   margin-right: 10px;
   transition: 0.5s;
 }
 
 .hero-text .social i:hover {
   color: #007ced;
   transform: rotate(360deg);
 }
 
 .page-section {
   padding: 6rem 0;
   color: #e5e5e5;
   width: 100%;
   height: 100%;
   min-height: 100vh;
   background: #222;
 }
 
 .page-section h2.section-heading {
   font-size: 2rem;
   margin-top: 0;
   margin-bottom: 1rem;
 }
 
 .page-section h3.section-subheading {
   font-size: 1rem;
   font-weight: 400;
   font-style: italic;
   font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
   margin-bottom: 4rem;
 }
 
 .rounded-circle {
   border-radius: 100%;
   width: 100%;
   height: 100%;
 }
 
 .timeline {
   position: relative;
   padding: 0;
   list-style: none;
 }
 
 .timeline:before {
   position: absolute;
   top: 0;
   bottom: 0;
   left: 40px;
   width: 2px;
   margin-left: -1.5px;
   content: "";
   background-color: #e9ecef;
 }
 
 .timeline > li {
   position: relative;
   min-height: 50px;
   margin-bottom: 50px;
 }
 
 .timeline > li:after,
 .timeline > li:before {
   display: table;
   content: " ";
 }
 
 .timeline > li:after {
   clear: both;
 }
 
 .timeline > li .timeline-panel {
   position: relative;
   float: right;
   width: 100%;
   padding: 0 20px 0 100px;
   text-align: left;
 }
 
 .timeline > li .timeline-panel:before {
   right: auto;
   left: -15px;
   border-right-width: 15px;
   border-left-width: 0;
 }
 
 .timeline > li .timeline-panel:after {
   right: auto;
   left: -14px;
   border-right-width: 14px;
   border-left-width: 0;
 }
 
 .timeline > li .timeline-image {
   position: absolute;
   z-index: 100;
   left: 0;
   width: 80px;
   height: 80px;
   margin-left: 0;
   text-align: center;
   color: white;
   border: 7px solid #e9ecef;
   border-radius: 100%;
   background-color: #ffc800;
 }
 
 .timeline > li .timeline-image h4 {
   font-size: 10px;
   line-height: 14px;
   margin-top: 12px;
 }
 
 .timeline > li.timeline-inverted > .timeline-panel {
   float: right;
   padding: 0 20px 0 100px;
   text-align: left;
 }
 
 .timeline > li.timeline-inverted > .timeline-panel:before {
   right: auto;
   left: -15px;
   border-right-width: 15px;
   border-left-width: 0;
 }
 
 .timeline > li.timeline-inverted > .timeline-panel:after {
   right: auto;
   left: -14px;
   border-right-width: 14px;
   border-left-width: 0;
 }
 
 .timeline > li:last-child {
   margin-bottom: 0;
 }
 
 .timeline .timeline-heading h4 {
   margin-top: 0;
   color: inherit;
 }
 
 .timeline .timeline-heading h4.subheading {
   text-transform: none;
 }
 
 .timeline .timeline-body > ul,
 .timeline .timeline-body > p {
   margin-bottom: 0;
 }
 
 @media (min-width: 768px) {
   .container {
     flex-direction: row;
     text-align: left;
   }
 
   .timeline:before {
     left: 50%;
   }
 
   .timeline > li {
     min-height: 100px;
     margin-bottom: 100px;
   }
 
   .timeline > li .timeline-panel {
     float: left;
     width: 41%;
     padding: 0 20px 20px 30px;
     text-align: right;
   }
 
   .timeline > li .timeline-image {
     left: 50%;
     width: 100px;
     height: 100px;
     margin-left: -50px;
   }
 
   .timeline > li .timeline-image h4 {
     font-size: 13px;
     line-height: 18px;
     margin-top: 16px;
   }
 
   .timeline > li.timeline-inverted > .timeline-panel {
     float: right;
     padding: 0 30px 20px 20px;
     text-align: left;
   }
 }
 
 @media (min-width: 992px) {
   .timeline > li {
     min-height: 150px;
   }
 
   .timeline > li .timeline-panel {
     padding: 0 20px 20px;
   }
 
   .timeline > li .timeline-image {
     width: 150px;
     height: 150px;
     margin-left: -75
   }}
 
 
 
    </style>
  <div class="hero-header">
    <div class="wrapper">
      <header>
        <div class="logo">
          <i class="fa-solid fa-a"></i>
          <div class="logo-text">Zahran FR</div>
        </div>
        <nav>
          <div class="togglebtn">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <ul class="navlinks">
            <li><a href="#">Home</a></li>
            <li><a href="#myskill">MySkill</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
      </header>
      <div class="container">
        <div class="hero-pic">
          <img src="img/Profile 2.jpg" alt="">
        </div>
        <div class="hero-text">
          <h5>Hi I'am <span class="input">Web Developer</span></h5>
          <h1>Zahran Fairuz</h1>
          <p>Education is not just going to school and getting a degree. But, it is also about expanding knowledge and absorbing life sciences
          </p>

          <div class="btn-group">
            <a href="#" class="btn active">Download</a>
            <a href="#" class="btn active">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
    <div class="contents" id="myskill">
      <div class="contents-list">
        <img src="img/html 2.jpg">
        <h2>LANGUAGE HTML</h2>
      </div>
      <div class="contents-list">
        <img src="img/csss.jpeg">
        <h2>LANGUAGE CSS</h2>
      </div>
      <div class="contents-list">
        <img src="img/php.jpeg">
        <h2>LANGUAGE PHP</h2>
      </div>
    </div>

    <section class="page-section" id="about">
      <div class="container">
          <ul class="timeline">
              <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/background.jpg" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>9 Januari 2008</h4>
                          <h4 class="subheading">Saya Lahir</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">Saya lahir di RSUD Ciawi Kabupaten Bogor. Kelahiran menandai awal kehidupan seorang individu di dunia. Ini adalah titik awal dari perjalanan hidup yang unik bagi setiap orang.</p></div>
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/sd.jpeg" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>Tahun 2015</h4>
                          <h4 class="subheading">Sekolah Dasar (SD)</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">Saya bersekolah di SD Negeri Srogol 2. Memasuki SD menandai awal pendidikan formal bagi saya. Ini adalah langkah pertama dalam sistem pendidikan yang terstruktur dan mulai belajar keterampilan dasar seperti membaca, menulis, dan berhitung.</p></div>
                  </div>
              </li>
              <li>
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/smp1.jpeg" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>Tahun 2019</h4>
                          <h4 class="subheading">Sekolah Menegah Pertama (SMP)</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">Saya bersekolah di SMP Negeri 1 Cigombong. Memasuki SMP menandai transisi dari pendidikan dasar ke pendidikan menengah. Ini adalah fase di mana tuntutan akademis dan tanggung jawab mulai meningkat dan Siswa mulai belajar mata pelajaran yang lebih spesifik seperti ilmu pengetahuan alam, ilmu sosial, bahasa asing, dan matematika yang lebih lanjutan.</p></div>
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-image"><img class="rounded-circle img-fluid" src="img/smk 1.jpeg" alt="..." /></div>
                  <div class="timeline-panel">
                      <div class="timeline-heading">
                          <h4>Tahun 2023</h4>
                          <h4 class="subheading">Sekolah Menengah Kanjuruan (SMK)</h4>
                      </div>
                      <div class="timeline-body"><p class="text-muted">Saya Bersekolah di SMK Wikrama Bogor. Memasuki SMK menandai peralihan dari pendidikan umum ke pendidikan yang lebih fokus pada keterampilan dan pengetahuan spesifik sesuai dengan bidang kejuruan yang dipilih oleh siswa. Ini mempersiapkan mereka untuk langsung terjun ke dunia kerja setelah lulus.</p></div>
                  </div>
              </li>
              <li class="timeline-inverted">
                  <div class="timeline-image">
                      <h4>
                          Be Part
                          <br />
                          Of Our
                          <br />
                          Story!
                      </h4>
                  </div>
              </li>
          </ul>
      </div>
  </section>

    <div class="contan" id="contact">
    <div class="contact">
      <div class="contact-title">
       <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Kp.Cisalopa</div>
          <div class="text-two">Kec.Caringin, Kab.Bogor</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">0856-9423-4148</div>
          <div class="text-two">0857-7625-6957</div>
       </div>
       <div class="email details">
        <i class="fas fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">zahranfairuzrahman@smkwikrama.sch.id</div>
        <div class="text-two">zahranfiruz9@gmail.com</div>
     </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send As a message</div>
        <p>Please, is there anything I can help you with, if you need me just contact me, I will be happy to help you. Keep following me until you become a professional programmer. </p>
      
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
         <textarea></textarea>
        </div>
        <div class="button">
          <input type="button" value="Send Now">
        </div>
      </form>
      </div>
      </div>
    </div> 
    </div>
    <footer>
      <p>&copy; 2023 My Website</p>
        <p>Contact: info@example.com</p>
    </footer>   
</body>
</html>