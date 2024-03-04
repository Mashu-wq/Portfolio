<?php
require('db.php');
$query = "SELECT * FROM home, section_control, social_media";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
// print_r($user_data);
?>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
if (isset($_POST['send'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

  if (mysqli_num_rows($select_message) > 0) {
    $message[] = 'message sent already';
  } else {
    mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES ('$name', '$email', '$number', '$msg')") or die('query failed');
    $message[] = 'message sent successfully';
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Portfolio</title>

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <?php

  if (isset($$message)) {
    foreach ($$message as $message) {
      echo '<div class = "message">
    <span>' . $message . '</span>
    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>
    ';
    }
  }
  ?>
  <!-- header section starts -->
  <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="#home" class="logo">Portfolio</a>
    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
      <a href="login.php" class="login">Login</a>
    </nav>

    <!-- <a href="#login" class="login-btn">login</a> -->

    <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
    </div>
  </header>

  <!-- home section -->
  <section class="home" id="home">
    <div class="image">
      <img src="./images/profileImage.png" alt="profileImage" />
    </div>
    <div class="content">
      <h3><?= $user_data['title']

          ?></h3>
      <span><?= $user_data['subtitle'] ?></span>
      <p>dedicated to creating cross-platform mobile applications.</p>
      <a href="#about" class="btn">about me</a>
    </div>
  </section>

  <!-- about section-->
  <section class="about" id="about">
    <h1 class="heading"><span>biography</span></h1>
    <div class="biography">
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse
        voluptate optio reiciendis vel ut perspiciatis voluptates sed est
        explicabo illum, consequatur, modi aliquam odit, et autem id? Alias,
        quae blanditiis.
      </p>
      <div class="bio">
        <h3><span>name : </span>Mayesha Marzia</h3>
        <h3><span>email : </span>mim2007088@stud.kuet.ac.bd</h3>
        <h3><span>address : </span>khulna, bangladesh</h3>
        <h3><span>phone : </span>+880-17630-23678</h3>
        <h3><span>age : </span>22 years</h3>
        <h3><span>experience : </span>1+ years</h3>
      </div>
      <a href="#" class="btn">download CV</a>
    </div>
    <div class="skills">
      <h1 class="heading"><span>skills</span></h1>
      <div class="progress">
        <div class="bar">
          <h3><span>Flutter</span><span>95%</span></h3>
        </div>
        <div class="bar">
          <h3><span>Dart</span><span>90%</span></h3>
        </div>
        <div class="bar">
          <h3><span>HTML</span><span>88%</span></h3>
        </div>
        <div class="bar">
          <h3><span>CSS</span><span>80%</span></h3>
        </div>
        <div class="bar">
          <h3><span>JavaScript</span><span>78%</span></h3>
        </div>
        <div class="bar">
          <h3><span>PHP</span><span>78%%</span></h3>
        </div>
      </div>
    </div>
    <div class="edu-exp">
      <h1 class="heading"><span>education & experience</span></h1>
      <div class="row">
        <div class="box-container">
          <h3 class="title">education</h3>
          <div class="box">
            <span>( 2016 - 2018)</span>
            <h3>SSC</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>

          <div class="box">
            <span>( 2018 - 2020)</span>
            <h3>HSC</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>

          <div class="box">
            <span>( 2021 - 2024)</span>
            <h3>CSE Undergraduate</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>
        </div>

        <div class="box-container">
          <h3 class="title">experience</h3>
          <div class="box">
            <span>( 2021 - 2022)</span>
            <h3>Android Developer</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>

          <div class="box">
            <span>( 2022 - 2023)</span>
            <h3>SEO Marketing</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>

          <div class="box">
            <span>( 2023 - 2024)</span>
            <h3>Wordpress Developer</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Adipisci, illum ipsa veritatis iusto atque alias, ut ea aut
              aliquam quia repellendus. Harum ad similique at aspernatur
              quaerat magni. Odit, placeat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- services section starts-->
  <section class="services" id="services">
    <h1 class="heading"><span>services</span></h1>
    <div class="box-container">
      <div class="box">
        <i class="fas fa-wordpress"></i>
        <h3>wordpress development</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse velit
          nesciunt cupiditate facilis ipsam aperiam facere quae, non vitae
          unde corporis? Enim, nesciunt fugiat! Quam qui excepturi officiis
          nostrum corrupti?
        </p>
      </div>

      <div class="box">
        <i class="fas fa-code"></i>
        <h3>web development</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse velit
          nesciunt cupiditate facilis ipsam aperiam facere quae, non vitae
          unde corporis? Enim, nesciunt fugiat! Quam qui excepturi officiis
          nostrum corrupti?
        </p>
      </div>

      <div class="box">
        <i class="fas fa-mobile-android-alt"></i>
        <h3>Android development</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse velit
          nesciunt cupiditate facilis ipsam aperiam facere quae, non vitae
          unde corporis? Enim, nesciunt fugiat! Quam qui excepturi officiis
          nostrum corrupti?
        </p>
      </div>

      <div class="box">
        <i class="fas fa-chart-line"></i>
        <h3>seo marketing</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse velit
          nesciunt cupiditate facilis ipsam aperiam facere quae, non vitae
          unde corporis? Enim, nesciunt fugiat! Quam qui excepturi officiis
          nostrum corrupti?
        </p>
      </div>
    </div>
  </section>
  <section class="portfolio" id="portfolio">
    <h1 class="heading"><span>portfolio</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="./images/flutter.png" alt="flutter development" />
        <h3>Android development</h3>
        <span>( 2021 - 2022 )</span>
      </div>

      <div class="box">
        <img src="./images/seo marketing.png" alt="flutter development" />
        <h3>Android development</h3>
        <span>( 2022 - 2023 )</span>
      </div>

      <div class="box">
        <img src="./images/wordpress.png" alt="flutter development" />
        <h3>Android development</h3>
        <span>( 2023 - 2024 )</span>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <h1 class="heading"><span>contact me</span></h1>
    <form action="" method="post">
      <div class="flex">
        <input type="text" name="name" placeholder="enter your name" class="box" required />
        <input type="email" name="email" placeholder="enter your email" class="box" required />
      </div>
      <input type="number" min="0" name="number" placeholder="enter your number" class="box" required />
      <textarea name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn" />
    </form>

    <!-- <div class="box-container">

      <div class="box">
        <i class="fas fa-phone"></i>
        <h3>phone</h3>
        <p>+880 1763-120707</p>
      </div>
      <div class="box">
        <i class="fas fa-envelope"></i> -->
    <!-- <h3>email</h3>
        <p>mayesha9212k20@gmail.com</p>
      </div>
      <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>address</h3>
        <p>khulna, bangladesh</p>
      </div>
    </div> -->

  </section>
  <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mayesha Marzia </span></div>


  <script src="script.js"></script>
</body>

</html>