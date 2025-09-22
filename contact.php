<?php
// Initialize variables for form data and messages
$name = $mobile = $email = "";
$name_err = $mobile_err = $email_err = "";
$submission_status = "";

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate name
    if (empty(trim($_POST["name"]))) {
        $name_err = "Please enter your name.";
    } else {
        $name = trim($_POST["name"]);
    }
    
    // Validate mobile number
    if (empty(trim($_POST["mobile"]))) {
        $mobile_err = "Please enter your mobile number.";
    } elseif (!preg_match("/^[0-9]{10}$/", trim($_POST["mobile"]))) {
        $mobile_err = "Please enter a valid 10-digit mobile number.";
    } else {
        $mobile = trim($_POST["mobile"]);
    }
    
    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
    } else {
        $email = trim($_POST["email"]);
    }
    
    // If no errors, process the form
    if (empty($name_err) && empty($mobile_err) && empty($email_err)) {
        // Simple form submission success
        $submission_status = "success";
        $name = $mobile = $email = ""; // Clear form
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style>
    body {
      background-color: #111;
      color: #fff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    .profile-card {
      max-width: 600px;
      margin: 40px auto;
      background: #1a1a1a;
      padding: 30px 20px;
      border-radius: 16px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.7);
      text-align: center;
    }

    .profile-pic {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid #cf1b6fff;
      margin-bottom: 15px;
    }

    h2 {
      font-size: 26px;
      margin-bottom: 15px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-bottom: 2px solid #cf1b6fff;
      display: inline-block;
      padding-bottom: 5px;
    }

    .contact-item {
      display: flex;
      align-items: center;
      margin: 15px 0;
      padding: 12px;
      border-radius: 8px;
      background: #222;
      transition: all 0.3s ease;
    }

    .contact-item:hover {
      background: #333;
      transform: translateX(5px);
    }

    .icon {
      font-size: 20px;
      color: #cf1b6fff;
      margin-right: 15px;
      min-width: 25px;
      text-align: center;
    }

    .contact-text {
      font-size: 16px;
      text-align: left;
    }

    .contact-text a {
      color: #ffcc00;
      text-decoration: none;
      font-weight: bold;
    }

    .contact-text a:hover {
      text-decoration: underline;
    }
  </style>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>





    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400&family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="style.css">
</head>
<body>




    <header class="header-nav">
        <div class="container">
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
    
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Information</h2>
             <div class="profile-card">
    <!-- Circle Profile Picture -->
    <img src="<?php echo 'h.jpg'; ?>" alt="Profile Picture" class="profile-pic">




            <div class="card contact-card mb-4 p-4">
                <div class="card-body">
                    <p class="mb-2">Phone No: 09703283139</p>
                    <p class="mb-2">Email: <a href="mailto: evangelistak596@gmail.com" class="contact-link">evangelistak596@gmail.com</a></p>
                    <p class="mb-2">Facebook: <a href="https://www.facebook.com/kayceeeevangelista" target="_blank" class="contact-link">Kaycee Evangelista</a></p>
                    <p class="mb-2">Github: <a href="https://github.com/Kkaycee-comsci" target="_blank" class="contact-link">Kkaycee-comsci </a></p>
                </div>
            </div>

            <h2 class="text-center mb-4">Please fill the form for more details</h2>
            
            <?php if ($submission_status === "success"): ?>
            <div class="alert alert-success" role="alert">
                Thank you for your submission!
            </div>
            <?php elseif ($submission_status === "error"): ?>
            <div class="alert alert-danger" role="alert">
                <S></S>Something went wrong. Please try again later.
            </div>
            <?php endif; ?>
            
            <div class="card contact-card p-4">
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" 
                                id="name" name="name" value="<?php echo $name; ?>" required>
                            <div class="invalid-feedback"><?php echo $name_err; ?></div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile Number:</label>
                            <input type="tel" class="form-control <?php echo (!empty($mobile_err)) ? 'is-invalid' : ''; ?>" 
                                id="mobile" name="mobile" value="<?php echo $mobile; ?>" required>
                            <div class="invalid-feedback"><?php echo $mobile_err; ?></div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">Email ID:</label>
                            <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" 
                                id="email" name="email" value="<?php echo $email; ?>" required>
                            <div class="invalid-feedback"><?php echo $email_err; ?></div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>