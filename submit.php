<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing</title>
    <link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
            <nav>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/index.html">HOME</a>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/aboutme.html">ABOUT</a>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/education.html">EDUCATION</a>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/volunteer.html">VOLUNTEER EXPERIMENT</a>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/sideproject.html">SIDE PROJECT</a>
                <a href="https://jamesprojectsforhtml.000webhostapp.com/IT240/projects/myportfolio/contact.html" id="currentPage">Contact Me</a>
                <a href="https://www.linkedin.com/in/chen1226/" class="icon"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                <a href="https://github.com/Chih-Chun-Chen?tab=repositories" class="icon"><i class="fa fa-github-square" style="font-size:36px"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100002197589321" class="icon"><i class='fa fa-facebook-f' style='font-size:36px'></i></a>
                <a href="https://www.instagram.com/chen_zhi_jun/" class="icon"><i class="fa fa-instagram" style="font-size:36px"></i></a>
            </nav>

            <main>
            <h1>Receive your information</h1>
            Name: <?php print $_POST['name'] ?>
            Email: <?php print $_POST['email'] ?>
            Phone: <?php print $_POST['phone'] ?>
            Comment: <?php print $_POST['comment'] ?>
            </main>
    </div>
        <footer>
            <p>&copy; 2023 James Chen</p>
        </footer>
</body>
</html>