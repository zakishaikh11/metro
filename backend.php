<html>

<head>
  <script>
    function uncheckCheckbox() {
      document.getElementById('check').checked = false;
    }
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    #home {
      height: 100%;
      width: 100%;
      background-color: rgb(15, 24, 44);
    }

    .imgbox {
      height: auto;
      width: 50%;
      overflow: hidden;
      object-fit: scale-down;
    }

    .imgbox img {
      width: auto;
      max-width: 100%;
      height: 100%;
      display: block;
      margin: 0 auto;
      box-shadow: 0 0 15px rgba(1, 1, 1, 1);
    }


    @media (max-width: 860px) {
      .imgbox img {
        display: none;
      }

    }

    .container {
      height: 100%;
      width: 100%;
      background-color: rgb(15, 24, 44);
      display: flex;
    }

    .container2 {
  width: 50%;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

@media (max-width: 860px) {
  .container2 {
    width: 100%;
    margin-right: 25%;
    overflow: visible;
  }

  #check:checked~.container2 {
    display: none;
  }
}

.welcome {
  width: 100%;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

#grad {
  font-size: 4rem;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  margin-bottom: 0;
  font-weight: bold;
  background-image: linear-gradient(to right, #e7a323, rgb(255, 75, 225));
  background-clip: content-box;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#welcome_msg,
#welcome_msg2 {
  font-size: 1.7rem;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  margin: 0;
  text-align: center;
}

.buttons {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: auto;
  overflow: hidden;
}

button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 12px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 10px;
}

    .btn1:hover {
      background-color: transparent;
      color: #e7a323;
      border: 2px solid #e7a323;
    }

    .btn1 {
      padding: 16px 20px;
      background-color: #e7a323;
      color: black;
    }

    .btn2:hover {
      background-color: transparent;
      color: rgb(255, 75, 225);
      border: 2px solid rgb(255, 75, 225);
    }

    .btn2{
      background-color: rgb(255, 75, 225);
      color: black;
    }






    nav img {
      width: 100px;
      position: relative;
      top: 10px;
      left: 10%;
    }

    * {
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
    }

    nav {
      background: #1f2d3b;
      height: 80px;
      width: 100%;
      position: fixed;    }

    nav ul {
      float: right;
      margin-right: 25px;
    }

    nav ul li {
      display: inline-block;
      line-height: 80px;
      margin: 0 15px;
    }

    nav ul li a {
      position: relative;
      color: #ffffff;
      font-size: 0.8rem;
      text-transform: uppercase;
      padding: 5px 0;
      transition: all .5s;
    }

    nav ul li a:hover {
      background-image: linear-gradient(to right, #e7a323, rgb(255, 75, 225));
      background-clip: content-box;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    nav ul li a:before {
      position: absolute;
      content: '';
      left: 0;
      bottom: 0;
      height: 3px;
      width: 100%;
      background-image: linear-gradient(to right, #e7a323, rgb(255, 75, 225));
      transform: scaleX(0);
      transform-origin: right;
      transition: transform .5s linear;
    }

    nav ul li a:hover:before {
      transform: scaleX(1);
      transform-origin: left;
    }

    label #btn,
    label #cancel {
      float: right;
      line-height: 80px;
      margin-right: 40px;
      cursor: pointer;
      display: none;
    }

    #check {
      display: none;
    }

    @media (max-width: 1118px) {
      nav img {
        left: 8%;
      }
    }

    @media (max-width: 944px) {
      nav img {
        left: 6%;
      }

      nav ul li a {
        font-size: 0.8rem;
      }
    }

    @media (max-width: 861px) {
      label #btn {
        display: block;
      }

      ul {
        position: fixed;
        width: 100%;
        height: 100vh;
        background: #34495e;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
      }

      nav ul li {
        display: block;
        margin: 50px 0;
        line-height: 30px;
      }

      nav ul li a {
        font-size: 20px;

      }

      #check:checked~ul {
        left: 0;
      }

      #check:checked~label #btn {
        display: none;
      }

      #check:checked~label #cancel {
        display: block;
      }

    }

    @media (max-width: 860px) {
      .imgbox {
        width: 100%;
      }

      .container2 {
        width: 100%;
        text-align: center;
      }

      #welcome_msg {
        text-align: center;
        font-size: 2rem;
      }

      #welcome_msg2 {
        text-align: center;
        font-size: 1.5rem;
        /* Adjust the font size as needed */
      }

      #grad {
        text-align: center;
        font-size: 3.5rem;
        /* Make the font size larger */
      }

      .buttons {
        height: auto;
        flex-direction: column;
      }

      button {
        margin: 7px 0;
        font-size: 0.8rem;
        /* Adjust the font size as needed */
      }

      nav img {
        left: 50%;
        transform: translateX(-50%);
      }

    }

    @media (min-width:861px) {
      .buttons {
        align-items: center;
        margin-top: 50px;
        padding: 10px 10px;
      }
    }

    #about {
      width: 100%;
      height: auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: rgb(15, 24, 44);
      color: #ffffff;
    }

    .text {
      width: 100%;
      max-width: 600px;
      font-size: 15px;
      text-align: center;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    h1{
      margin: 30px 0px;
    }

    hr{
      border: none;
      height: 5px;
      background-image: linear-gradient(to right, #e7a323, rgb(255, 75, 225));

    }

    .image {
      width: 100%;
      text-align: center;
    }

    .image img {
      max-width: 100%;
      height: auto;
      object-fit: contain;
      box-shadow: 0 0 15px rgba(1, 1, 1, 1);
    }

    

    @media screen and (min-width: 860px) {
      #about {
        flex-direction: row-reverse;
        justify-content: space-between;
      }

      .image {
        width: 50%;
      }

      .text {
        width: 50%;
      }
    }
    .text .btn2{
      margin: 30px 0;
    }

    #feedback{
            width: 100%;
            background-color: rgb(15,24,44);
            justify-content: center;
            align-items: center;
            display: block;
            margin-right:auto;
            margin-left: auto;
            padding: 10% 0;
        }
        form {
            
            background-color: rgb(30,50,85);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(1, 1, 1, 1);
            width: 70%;
            color: rgb(15, 24, 44);
            margin-right:auto;
            margin-left: auto;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            color: rgb(15, 24, 44);
            border: 2px solid white;
            background-color: transparent;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        textarea:focus {
  outline: none;
  box-shadow: 0 0 5px rgb(15, 24, 44);
  background-color: white;
}


        input[type="radio"] {
            margin-right: 5px;
        }


        input[type="submit"] {
            background-color: white;
            color: rgb(15, 24, 44);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }


        input[type="submit"]:hover {
            background-image: linear-gradient(to right, rgb(249, 0, 249), rgb(255, 190, 0));
            color:rgb(15, 24, 44);
        }
        ::placeholder {
  color: white;}
 
  input[type="text"]:focus::placeholder,
        input[type="email"]:focus::placeholder,
        input[type="number"]:focus::placeholder,
        textarea:focus::placeholder{
  color: rgb(15, 24, 44);}


  @media screen and (max-width: 800px) {
    form {
            width:70%;
        }
        #feedback{
            width: 100%;}
}
@media screen and (max-width: 600px) {
    form {
            width:85%;
        }
        label {
            font-size: 21px;
        }
        #feedback{
            width: 100%;}
}
@media screen and (max-width: 400px){
    h1{
        font-size: 28px;
    }
    form {
            width:100%;
        }
        #feedback{
            width: 100%;}
}
.labels{
  display: block;
            margin-bottom: 8px;
            color: white;
            font-size: 25px;
}
#cust-title{
  font-weight: bold;
  background-image: linear-gradient(to right, #e7a323, rgb(255, 75, 225));
  background-clip: content-box;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
#route {
  width: 100%;
  height: auto;
  display: flex;
  flex-direction: column; 
  align-items: center;
  justify-content: center;
  background-color: rgb(15, 24, 44);
  text-align: center;
  padding: 10% 0;
}

#route img {
  width: 70%;
  height: auto;
  margin-top: 15px; 
  box-shadow: 0 0 15px rgba(1, 1, 1, 1);
}
  </style>
</head>

<body>
  <nav>
    <label for="logo">
      <img src="logo.png" alt="logo">
    </label>
    <input type="checkbox" id="check">
    <label for="check" >
      <i class="fa fa-bars" style="font-size:30px;color:white;" id="btn"></i>
    </label>
    <label for="check" >
      <i class="fa fa-close" style="font-size:30px;color:white;" id="cancel"></i>
    </label>

    <ul>
      <li><a href="#home" onclick="uncheckCheckbox()">Home</a></li>
      <li><a href="#" onclick="uncheckCheckbox()">Ticket Booking</a></li>
      <li><a href="#about" onclick="uncheckCheckbox()">About Pune Metro</a></li>
      <li><a href="#route" onclick="uncheckCheckbox()">Route</a></li>
      <li><a href="#" onclick="uncheckCheckbox()">News</a></li>
      <li><a href="#feedback" onclick="uncheckCheckbox()">Feedback</a></li>
    </ul>
  </nav>
  

  <div id="home">
    <div class="container">
      <div class="imgbox">
        <img src="metro_pic.jpg" alt="metro picture" width="130%" height="100%">
      </div>
      <div class="container2">
        <div class="welcome">
          <p id="welcome_msg">Welcome to
          <p id="grad">Pune Metro</p>
          </p><br>
          <p id="welcome_msg2">Redefining Urban Mobility, Redesigning Tomorrow.</p>
          <div class="buttons">
            <a href="#about">
              <button class="btn1">KNOW MORE...</button> </a>
            <button class="btn2">BOOK YOUR TICKETS</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="about">
    <div class="image">
      <img src="metro_pic2.jpg" alt="Your Image">
    </div>
    <div class="text">
      <h1>About Pune Metro</h1>
      <hr style=" width: 50%; margin: 20px 25%;">
      <p>Welcome to Pune Metro, where innovation meets convenience, and seamless connectivity transforms the way you
        experience urban transportation. Established with a vision to redefine commuting in the vibrant city of Pune,
        our metro system embodies efficiency, sustainability, and modernity. <br> <br>
        At Pune Metro, we are committed to
        providing a world-class transportation solution that not only reduces travel time but also enhances the overall
        quality of life for our commuters. Our state-of-the-art metro network integrates cutting-edge technology,
        ensuring a safe, reliable, and comfortable journey for passengers. <br> <br>
        Driven by a passion for progress, we
        strive to contribute to the city's growth by easing traffic congestion, minimizing environmental impact, and
        fostering economic development along our routes. Our team of dedicated professionals works tirelessly to
        maintain the highest standards of safety, cleanliness, and customer service. <br> <br>
        As we connect neighborhoods, businesses, and cultural hubs, Pune Metro becomes more than just a mode of transportation; it becomes an
        integral part of the city's identity. Join us on this transformative journey, where every ride with Pune Metro
        is a step towards a smarter, sustainable, and interconnected future for Pune. </p>
        <a href="stations.html"><button class="btn2">Explore Stations</button></a>
    </div>
    </div>
    <div id="route">
      <h1 style="font-size: 40px; color:white";>Pune Metro Route</h1> 
      <hr style=" width: 50%; margin: 0px 25%;">
      <p style="color:white; margin: 20px 0; font-size: 17px;" >
        The Pune Metro is a mass rapid transit system serving the city of Pune, India. The system consists of 3 lines with a total length of 54.58 km <br>
        The 16.59-km line runs from PCMC Bhavan to Swargate, the Horizontal line runs from Vanaz to Ramwadi covering a distance of 14.66 km. <br>
        The 23.33-km line will run from the Rajiv Gandhi Infotech Park in Hinjawadi via Balewadi to Civil Court. <br>
        All three lines will align at the Civil Court interchange station. <br>
        The foundation stone (December 2016) and inauguration of operations (March 2022) for the purple and aqua line was laid by the Prime Minister of India Shri Narendra Modi. <br>
        Each train will have 3 coaches, and will run at the speed of 33 km/h with the frequency of 30 min. <br>
        Out of total 3 lines 2 lines which consists 30 stations will be operated by MahaMetro and 1 line which will consists 23 stations by PMRDA. <br>
        An integrated fare system has also been planned to facilitate seamless transfer, however, exact fares for the same travel distance will vary based on the operator between Rs.10 - Rs.50. <br>
      </p>
      <img src="route.jpg" alt="">
    </div>
    <div id="feedback">
      <form action="#" id="feedbackform" method="post">
        <h1 style="text-align: center; color:yellow" id="cust-title">CUSTOMER FEEDBACK</h1><hr><br>
        <label for="feedbackType" class="labels">Type of Feedback:</label>
        <label for="appreciation" class="labels">
          <input type="radio" id="appreciation" name="feedbackType" value="Appreciation">
          Appreciation</label>
        <label for="complaint" class="labels">
          <input type="radio" id="complaint" name="feedbackType" value="Complaint">
          Complaint</label><br>
  
        <label for="fullName" class="labels">Full Name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name">
  
        <label for="city" class="labels">City:</label>
        <input type="text" id="city" name="city" placeholder="Enter your city">
  
        <label for="metroStation" class="labels">Relevant Metro Station:</label>
        <input type="text" id="metroStation" name="metroStation" placeholder="Enter relevant metro station">
  
        <label for="mobileNumber" class="labels">Mobile Number:</label>
        <input type="number" id="mobileNumber" name="mobileNumber" placeholder="Enter your mobile number">
  
        <label for="email" class="labels">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
  
        <label for="subject" class="labels">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="Enter the subject">
  
        <label for="feedback-msg" class="labels">Feedback:</label>
        <textarea id="feedback-msg" name="feedback" rows="4" placeholder="Enter your feedback"></textarea>
  
        <input type="submit" value="Submit">
      </form>
      </div>
</html>