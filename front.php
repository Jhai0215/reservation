<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
            div {text-align: center;}
            </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

  body {
    font-family: 'Gill Sans', sans-serif;
  }
  
  .logo {
            color: rgb(248, 236, 72);
            font-size: 30px;
        }

        .logo span {
            color: #ec984a;
        }

        .menu-bar {
            background: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between; /* Adjusted for spacing */
            align-items: center;
            transition: all 0.3s;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .menu-bar h1 {
            margin-left: 20px; /* Add some left margin for spacing */
        }

        .menu-bar ul {
            list-style: none;
            display: flex;
            margin-right: 20px; /* Add some right margin for spacing */
        }

        .menu-bar ul li {
            padding: 10px 30px;
            position: relative;
        }

        .menu-bar ul li a {
            font-size: 15px;
            color: rgb(221, 110, 19);
            text-decoration: none;
            transition: all 0.3s;
            background-color:  #414040;
            padding: 10px;
            border-radius: 15px;
            cursor: pointer;

        }

        .menu-bar ul li a:hover {
            color: rgb(255, 243, 139);
            transform: scale(1.05);
            box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.2);
        }

body{
    font-family: 'Poppins', sans-serif;
}
.banner {
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), center;
    
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
    padding-top: 5%;
    
}

.card-container{
    display: grid;
    grid-template-columns: 450px 450px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    min-height: 500px;
   
}
.card-img {
            position: relative;
            height: 300px; /* Set a specific height */
            overflow: hidden; /* Hide overflow for images */
            background-image: cover;
            height: 100%;
        }

        .card-img img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none; /* Hide images by default */
        }

        .card-img img.active {
            display: block; /* Show active image */
        }

.card-content{
    background: rgb(182, 179, 179);
    height: 500px;
    opacity: 1.8;
}
.card-content h3{
    text-align: center;
    color: rgb(207, 115, 9);
    padding: 25px 0 10px 0;
    font-size: 27px;
    font-weight: 500;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.alert{
    width: 100%;
    background-color: black;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    font-size: 18px;
    font-weight: 900;
    display: none;
}
.form-row{
    display: flex;
    width: 90%;
    margin: 0 auto;
    border-radius: 10px;
}
form select, form input{
    display: block;
    width: 100%;
    margin: 5px 3px;
    padding: 13px;
    font-size: 13px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid rgb(192, 192, 192);
    font-weight: 300;
}
form input[type = text], form input[type = number], form input::placeholder, select{
    color: #414040;
}
form input[type = submit]{
    color: #fff;
    background: #b86405;
    padding: 10px 0;
    border-radius: 20px;
    cursor: pointer;
}

form input[type = submit]:hover{
    opacity: 5.9;
    transform: scale(1.05);
    box-shadow: 20px 20px 20px rgba(0, 0, 0, 0.2);
}
@media(max-width: 992px){
    .card-container{
        grid-template-columns: 100%;
        width: 100vw;
    }
    .card-img{
        height: 500px;
    }
   
}

    </style>
    <body>
    <div class="category" id="menu-bar">
        <div class="menu-bar">
            <h1 class="logo">IKIRU'S<span>     RESTAURANT</span></h1>
            <ul>
            <li><a href="#container" class="w3-bar-item w3-button">MENU</a>
            <li><a href="#menu-bar" class="w3-bar-item w3-button">RESERVATION</a>
            
                               
              </div>
            </ul>
          </div>
          </div>

        <section class = "banner">
            <div class = "card-container">
                <div class = "card-img">
                <img src="port1.jpg" class="active" alt="Image 1"> 
                <img src="erick.jpg" alt="Image 2"> 
                <img src="por4.jpg" alt="Image 3"> 
                <img src="port6.jpg" alt="image 4">
                <img src="port7.jpg" alt="image 5">
                <img src="henry.jpg" alt="image 6">
                <img src="port5.jpg" alt="image 7">
                <img src="port8.jpg" alt="image 8">
                <img src="port2.jpg" alt="image 9">
                <img src="port9.jpg" alt="image 9">
                 
                </div>

                <div class = "card-content">
                    <h3>RESERVATION FORM</h3>
                    <form action="connect.php" method="post">
    <div class="form-row">
        <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
        <input type="time" name="time" id="time" required placeholder="Time">
    </div>
    <div class="form-row">
        <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required>
        <input type="date" name="date" id="date" required placeholder="Date">
    </div>
    <div class="form-row">
        <input type="email" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-row">
        <select name="branch" id="branch" required>
            <option value="" disabled selected>Select Branch</option>
            <option value="Manila">Manila</option>
            <option value="Pasig">Pasig</option>
            <option value="Pasay">Pasay</option>
            <option value="Makati">Makati</option>
            <option value="Cebu">Cebu</option>
            <option value="Palawan">Palawan</option>
            <option value="Davao">Davao</option>
            <option value="Caloocan">Caloocan</option>
            <option value="Pangasinan">Pangasinan</option>
            <option value="Bulacan">Bulacan</option>
            <option value="Taytay">Taytay</option>
            <option value="El Nido">El Nido</option>
            <option value="Mandaluyong">Mandaluyong</option>
            <option value="Quezon City">Quezon City</option>
        </select>
    </div>
    <div class="form-row">
        <select name="ganap" id="ganap" required>
            <option value="" disabled selected>Select Event</option>
            <option value="Casual Eat">Casual Eat</option>
            <option value="Anniversary">Anniversary</option>
            <option value="Birthday">Birthday</option>
            <option value="Graduation">Graduation</option>
            <option value="Wedding">Wedding</option>
        </select>
    </div>
    <div class="form-row">
        <input type="number" name="tables" id="tables" placeholder="How Many Tables?" min="1" required>
        <input type="number" name="persons" id="persons" placeholder="How Many Persons?" min="1" required> 
    </div>
    <div class="form-row">
        <select name="reservation" id="reservation" required>
            <option value="Table">Table</option>
            <option value="Whole Venue">Whole Venue</option>
        </select>
    </div>
    <div class="form-row">
        <input type="submit" value="BOOK NOW">
    </div>
</form>
                </div>
                </div>
            </div>
        </section>
        <script>
        let currentIndex = 0;
        const images = document.querySelectorAll('.card-img img');
        const totalImages = images.length;

        function showNextImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % totalImages; // Loop back to the first image
            images[currentIndex].classList.add('active');
        }

        setInterval(showNextImage, 2000); // Change image every 3 seconds
    </script>
    
        <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-database.js"></script>
        <script src="script.js"></script>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Menu</title>
            <style>
                body {
                    background-color: #f0f0f0;
                    margin: 0;
                    color: #333;
                    font-family: Arial, sans-serif;
                }
        
                .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 20px;
                }
        
                .menu {
                    text-align: center;
                    padding: 20px 0;
                }
        
                .menu h1 {
                    color: #444;
                    margin: 0;
                    font-size: 36px;
                }
        
                hr {
                    border: 1px solid #ccc;
                    margin: 20px 0;
                }
        
                .category {
                    margin: 40px 0;
                }
        
                .category h2 {
                    color: #555;
                    font-size: 28px;
                    margin-bottom: 10px;
                    border-bottom: 2px solid #ccc;
                    padding-bottom: 5px;
                }
        
                .menu-item {
                    background: white;
                    border-radius: 8px;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    margin: 10px;
                    padding: 20px;
                    transition: transform 0.3s;
                    text-align: center;
                    display: inline-block;
                    width: calc(33% - 40px); /* 3 items per row with margin */
                    box-sizing: border-box;
                }
        
                .menu-item:hover {
                    transform: scale(1.05);
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
                }
        
                .menu-item img {
                    height: 200px;
                    width: auto;
                    max-width: 100%;
                    border-radius: 8px;
                }
        
                .menu-item h3 {
                    margin: 10px 0 5px;
                    color: #000;
                }
        
                .menu-item p {
                    margin: 5px 0;
                    color: #666;
                }
        
                .menu-item span {
                    font-weight: bold;
                    color: #d9534f; /* Bootstrap danger color */
                }
        
                /* Responsive Styles */
                @media (max-width: 768px) {
                    .menu-item {
                        width: calc(50% - 40px); /* 2 items per row */
                    }
                }
        
                @media (max-width: 480px) {
                    .menu-item {
                        width: 100%; /* 1 item per row */
                    }
                }
            </style>
        </head>
        <body>
        <div class="con" id="container">
            <div class="container">
            <div class="menu" id="menu">
                <div class="menu">
                    <h1>THE MENU</h1>
                    <hr>
                </div>
        
                <div class="category" id="BREAKFAST">
                    <h2>BREAKFAST</h2>
                    <div class="menu-item">
                        <h3>ENGLISH BREAKFAST</h3>
                        <span>P199</span>
                        <p>SUNNYSIDE-UP EGG, BACON, SAUSAGE, SLICED TOMATOES, HAM</p>
                        <img src="ENGLISH.jpg" alt="ENGLISH BREAKFAST">
                    </div>
                    <div class="menu-item">
                        <h3>AMERICAN BREAKFAST</h3>
                        <span>P199</span>
                        <p>SUNNYSIDE-UP EGG, SAUSAGE, HAM, PANCAKE</p>
                        <img src="AMERICAN.jpg" alt="AMERICAN BREAKFAST">
                    </div>
                    <div class="menu-item">
                        <h3>PHILIPPINE TOCILOG</h3>
                        <span>P199</span>
                        <p>SUNNYSIDE-UP EGG, TOCINO, FRIED RICE, SLICED TOMATO</p>
                        <img src="PHILIPPINE.jpg" alt="PHILIPPINE TOCILOG">
                    </div>
                </div>
        
                <div class="category" id="LUNCH">
                    <h2>LUNCH</h2>
                    <div class="menu-item">
                        <h3>CHICKEN FRIED STEAK</h3>
                        <span>P299</span>
                        <img src="MANOK.jpg" alt="CHICKEN FRIED STEAK">
                    </div>
                    <div class="menu-item">
                        <h3>FISH AND CHIPS</h3>
                        <span>P399</span>
                        <p>FISH, CHIPS, MAYONNAISE, SLICED LEMON</p>
                        <img src="ISDA.jpg" alt="FISH AND CHIPS">
                    </div>
                    <div class="menu-item">
                        <h3>CHICKEN ADOBO</h3>
                        <span>P199</span>
                        <p>PLAIN RICE, CHICKEN ADOBO, BOILED EGG</p>
                        <img src="ADOBO.jpg" alt="CHICKEN ADOBO">
                    </div>
                </div>
        
                <div class="category" id="DINNER">
                    <h2>DINNER</h2>
                    <div class="menu-item">
                        <h3>THE HAMBURGER</h3>
                        <span>P299</span>
                        <img src="BURGER.jpg" alt="THE HAMBURGER">
                    </div>
                    <div class="menu-item">
                        <h3>BEEF STEAK</h3>
                        <span>P350</span>
                        <img src="BEEF.jpg" alt="BEEF STEAK">
                    </div>
                    <div class="menu-item">
                        <h3>PORK SISIG</h3>
                        <span>P199</span>
                        <p>PLAIN RICE, SUNNYSIDE-UP, SISIG</p>
                        <img src="SISIG.jpg" alt="PORK SISIG">
                    </div>
                </div>
        
                <div class="category" id="DESSERTS">
                    <h2>DESSERTS</h2>
                    <div class="menu-item">
                        <h3>HALO-HALO</h3>
                        <span>P100</span>
                        <p>EVAPORATED MILK, CRUSHED ICE, SWEETENED LANGKA, SWEET BANANA (SABA)</p>
                        <img src="HALO.jpg" alt="HALO-HALO">
                    </div>
                    <div class="menu-item">
                        <h3>PALITAW</h3>
                        <span>P100</span>
                        <p>5PCS</p>
                        <img src="palitaw.jpg" alt="PALITAW">
                    </div>
                    <div class="menu-item">
                        <h3>LECHE FLAN</h3>
                        <span>P100</span>
                        <img src="FLAN.jpg" alt="LECHE FLAN">
                    </div>
                </div>
        
                <div class="category" id="DRINKS">
                    <h2>DRINKS</h2>
                    <div class="menu-item">
                        <h3>RED WINE</h3>
                        <span>P599</span>
                        <p>PER BOTTLE</p>
                        <img src="WINE.jpg" alt="RED WINE">
                    </div>
                    <div class="menu-item">
                        <h3>WHISKEY</h3>
                        <span>P699</span>
                        <p>PER BOTTLE</p>
                        <img src="WHISKEY.jpg" alt="WHISKEY">
                    </div>
                    <div class="menu-item">
                        <h3>WATER</h3>
                        <span>FREE</span>
                        <img src="WATER.jpg" alt="WATER">
                    </div>
                </div>
            </div>


        
        </body>
        </html>
        
    </body>
</html> 