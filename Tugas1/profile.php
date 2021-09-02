<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>

<!-- loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    
<!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href=""><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://instagram.com/kikyykii"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://github.com/kikyyneee"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <h1><a href="index.php">RIZKY MAULANA</a></h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </div>
    </header>

<!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / About</p>
        </div>
    </section>

<!-- about/profile -->
    <section class="about">
        <div class="container">
            <h3>Profile</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem aspernatur facilis eligendi sed modi quisquam exercitationem? <strong>Autem nobis molestiae enim voluptatum id quis.</strong> 
            Quas laboriosam necessitatibus debitis ratione animi sed? Lorem ipsum dolor, sit amet consectetur adipisicing elit. <strong>Provident aspernatur saepe quaerat reprehenderit, eius, distinctio sunt non explicabo sed cumque consectetur</strong>
            sapiente sit vel aut laudantium eligendi ipsa possimus pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda tempora mollitia, numquam ex magnam veritatis, reprehenderit repellat, tenetur a voluptates nihil ullam ea quasi 
            voluptatum eveniet nemo praesentium omnis iste.</p>
        </div>
    </section>

<!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 . Rizky Maulana All Rights Reserved</small>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide()
        })
    </script>

</body>
</html>