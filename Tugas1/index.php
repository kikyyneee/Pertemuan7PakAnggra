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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </header>

<!-- banner -->
    <section class="banner">
        <h2>Welcome To My Site</h2>
    </section>

<!-- about/profile -->
<section class="about">
        <div class="container">
            <div style="display:flex;">
                <div style="flex:1; display:flex ; align-items: center; padding:30px;" >
                    <center>
                    <img src="https://lh3.googleusercontent.com/proxy/yY7Wg0ACEp8uF-vGjgXvC5Gc5Xo_dCmoGnlRW2TNOCvc8VfzbTv05GQ-TtvuM9imfrfU0E5zx4xUv0YLDsnQk27dsXiRbrVuVEs2CQ9wbxTRItUU " style="border-radius:10px;"> </center>

                </div>
                <div style="flex:1;">
                <h3>Profile</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem aspernatur facilis eligendi sed modi quisquam exercitationem? <strong>Autem nobis molestiae enim voluptatum id quis.</strong> 
            Quas laboriosam necessitatibus debitis ratione animi sed? Lorem ipsum dolor, sit amet consectetur adipisicing elit. <strong>Provident aspernatur saepe quaerat reprehenderit, eius, distinctio sunt non explicabo sed cumque consectetur</strong>
            sapiente sit vel aut laudantium eligendi ipsa possimus pariatur? Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda tempora mollitia, numquam ex magnam veritatis, reprehenderit repellat, tenetur a voluptates nihil ullam ea quasi 
            voluptatum eveniet nemo praesentium omnis iste.</p>
                </div>
            </div>
        </div>
    </section>


<!-- contact -->
    <section class="about">
        <div class="container">
            <h3>Contact Info</h3>
            <div class="box">
                <div class="col-4">
                    <h4>Address</h4>
                    <p>JL.Veteran *** Kp.Pondok *******</p>
                </div>

                <div class="col-4">
                    <h4>Email</h4>
                    <p>rizky*****@gmail.com</p>
                </div>

                <div class="col-4">
                    <h4>Telp.</h4>
                    <p>+6285*********</p>
                </div>

                <div class="col-4">
                    <h4>HP</h4>
                    <p>+6285*********</p>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.392869982189!2d106.79527791446931!3d-6.597999266332904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c62d7196cd%3A0xb9728ad803356b26!2sIstana%20Bogor%2C%20Paledang%2C%20Kecamatan%20Bogor%20Tengah%2C%20Kota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1630596770195!5m2!1sid!2sid" 
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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