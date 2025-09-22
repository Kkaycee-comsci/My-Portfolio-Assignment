<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaycee's Portfolio Website</title>

<style>
        body {
            background-color: #111;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .profile-pic {
            width: 300px;
            height: 300px;
            border-radius: 50%; /* makes it circle */
            object-fit: cover; /* crops nicely */
            border: 3px solid #fff; /* white border */
            margin-top: 20px;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="hero">
        <div class="container">
            <!-- Circle Profile Picture -->
    <img src="<?php echo 'h.jpg'; ?>" alt="Profile Picture" class="profile-pic">
            <h1 class="heading">KAYCEE evangelista</h1>

            <p class="subheading">Observe more, speak less, understand deeper.</p>
            <nav class="navbar navbar-expand-lg navbar-custom">
                <div class="container-fluid justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-3"><a class="nav-link" href="index.php">Home</a></li>
                       
                        <li class="nav-item mx-3"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item mx-3"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="container py-5">
        <div class="card mb-4">
            <div class="card-body">

                <h2 class="card-title text-center">Me, Myself and I</h2>
                <div class="about-box">
               <p class="card-text"> I’m Kaycee. I’m pretty quiet I like observing quietly, but I notice a lot. I’d say you’ll get to know me more in time. I’m just here to learn, connect, and see where things go.</p> </div>
            </div>
        </div>
<style>
  .about {
    text-align: center;
    margin: 60px auto;
    max-width: 700px;
  }

  .about h2 {
    font-size: 28px;
    text-transform: uppercase;
    color: #ffcc00;
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
  }

  .about h2::after {
    content: "";
    display: block;
    width: 60%;
    height: 3px;
    background: #ffcc00;
    margin: 8px auto 0;
    border-radius: 2px;
  }

  .about-box {
    background: linear-gradient(135deg, #1a1a1a, #222);
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: justify;
    line-height: 1.8;
    color: #ddd;
    font-size: 16px;
  }

  .about-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(243, 49, 146, 0.3);
  }
</style>

<div class="card mb-4">
            <div class="card-body">
                <div class="about-box">
                <h2 class="card-title text-center">Kaycee's Likes:</h2>
                <p class="card-text text-center">I like to capture every moment.</p>
                <p class="card-text text-center">I like photograpies.</p>
                <p class="card-text text-center">I'm a girl who loves coffee and sunset.</p>
                <p class="card-text text-center">I like reading a books.</p>
                <p class="card-text text-center">I love nature.</p></div>
            </div>
        </div>
<style>
  .about {
    text-align: center;
    margin: 60px auto;
    max-width: 700px;
  }

  .about h2 {
    font-size: 28px;
    text-transform: uppercase;
    color: #ffcc00;
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
  }

  .about h2::after {
    content: "";
    display: block;
    width: 60%;
    height: 3px;
    background: #ffcc00;
    margin: 8px auto 0;
    border-radius: 2px;
  }

  .about-box {
    background: linear-gradient(135deg, #1a1a1a, #222);
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: justify;
    line-height: 1.8;
    color: #ddd;
    font-size: 16px;
  }

  .about-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(243, 49, 146, 0.3);
  }
</style>




        <div class="card mb-4">
            <div class="card-body">
                <div class="about-box">
                <h2 class="card-title text-center">Education :</h2>
                <p class="card-text text-center">Concepcion Holy Cross College</p>
                <p class="card-text text-center">Bachelor of Science in Computer Science</p>
                <p class="card-text text-center">2023-2027</p></div>
            </div>
        </div>

<style>
  .about {
    text-align: center;
    margin: 60px auto;
    max-width: 700px;
  }

  .about h2 {
    font-size: 28px;
    text-transform: uppercase;
    color: #ffcc00;
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
  }

  .about h2::after {
    content: "";
    display: block;
    width: 60%;
    height: 3px;
    background: #ffcc00;
    margin: 8px auto 0;
    border-radius: 2px;
  }

  .about-box {
    background: linear-gradient(135deg, #1a1a1a, #222);
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: justify;
    line-height: 1.8;
    color: #ddd;
    font-size: 16px;
  }

  .about-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(243, 49, 146, 0.3);
  }
</style>



        <div class="card mb-4">
            <div class="card-body">
            <div class="about-box">
                <h2 class="card-title text-center">Skills :</h2>
                <ul class="list-group list-group-flush bg-transparent">
                    <li class="list-group-item bg-transparent">Listening deeply, making people feel heard.</li>
                    <li class="list-group-item bg-transparent">Creativity</li>
                    <li class="list-group-item bg-transparent">Teamwork</li>
                    <li class="list-group-item bg-transparent">Communication skills</li>
                    <li class="list-group-item bg-transparent">Time management</li>
                    <li class="list-group-item bg-transparent">Willingness to learn new tech</li></div>
<style>
  .about {
    text-align: center;
    margin: 60px auto;
    max-width: 700px;
  }

  .about h2 {
    font-size: 28px;
    text-transform: uppercase;
    color: #ffcc00;
    margin-bottom: 20px;
    position: relative;
    display: inline-block;
  }

  .about h2::after {
    content: "";
    display: block;
    width: 60%;
    height: 3px;
    background: #ffcc00;
    margin: 8px auto 0;
    border-radius: 2px;
  }

  .about-box {
    background: linear-gradient(135deg, #1a1a1a, #222);
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.6);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: justify;
    line-height: 1.8;
    color: #ddd;
    font-size: 16px;
  }

  .about-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(240, 126, 19, 0.3);
  }
</style>


                  
                </ul>
            </div>
        </div>

        
            </div>
        </div>
    </div>

    <footer class="text-center py-3">
        <div class="container">
            <p class="mb-0">&copy; 2025 Kaycee.evangelista All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>