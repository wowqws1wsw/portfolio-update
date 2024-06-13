<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>projek</title>
  <link rel="stylesheet" href="css/project2.css">
  <script src="https://kit.fontawesome.com/4ff41ebcaa.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
  <div class="header">
  <div class="header">
      <div class="container">
        <nav>
          <h2>Portfolio</h2>
          <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#competence">Competence</a></li>
            <li><a href="#contacts">contacts</a></li>
          </ul>
        </nav>
        <div class="header-text" id="Home">
          <p>Student of Wikrama</p>
          <h1 style="color: aqua;">Hello Nama saya, Muhammad Arfan Naqi</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="about">
  <div class="container" id="competence">
    <div class="row">
      <div class="alpha show-animate">
        <img src="img/ed1e83c4-adcc-46b2-832c-d72fc7b35ff8.jpeg" alt="image1">
      </div>
      <div class="bravo show-animate">
        <h1 class="sub-title">about me</h1>
        <p>Hello, Nama saya, Muhammad Arfan Naqi, Saya berumur 15 tahun, Saya lahir di kota BOGOR tanggal, 12-5-08,
          Saya anak pertama dari 2
          bersaudara dan hobi saya adalah bermain bola dan sejarah. Sekarang saya bersekolah di <strong>SMK WIKRAMA
            BOGOR</strong></p>
        
        <div class="tab-titles">
          <p class="tab-links active-link" onclick="opentab('Competence')">Competence</p>
        </div>
        <div class="tab-contents active-tab" id="Competence">
          <ul>
            <li><span onclick="scrollToElement('htmlContent')">Html</span></li>
            <li><span onclick="scrollToElement('cssContent')">CSS</span></li>
          </ul>
        </div>
        
        <div class="tab-titles">
          <p class="tab-links active-link" onclick="opentab('Pendidikan')">Pendidikan</p>
        </div>
        <div class="tab-contents" id="Pendidikan">
          <ul>
            <li>SMK WIkrama BOGOR</li>
            <li>SMP 1 Cigombong</li>
            <li>SDN 1 Cigombong</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


  <section id="sertifikat" class="sertifikat">
  <h3 class="menu-card-title">sertifikat Saya</h3>
        <div class="row">
          <div class="menu-card">
            <img src="img/sertifikat.png" alt="sertifikat.png"  height="400px"  class="menu-card-img">
          </div>
  </section>

  <div id="Portfolio">
  <div class="container">
    <h1 class="sub-title">What is Html and Css</h1>
    <div class="work-list">

      <div class="html" id="htmlContent">
        <img src="img/images.png" height="430px">
        <div class="layer">
          <h3>Html</h3>
          <p>"html," which stands for HyperText Markup Language. HTML is the standard <br> markup language used to
            create and design the structure of web pages.</p>
        </div>
      </div>
      

      <div class="html" id="cssContent">
        <img src="img/gambar-CSS.jpg">
        <div class="layer">
          <h3>CSS</h3>
          <p>CSS, or Cascading Style Sheets, is a style sheet language used to describe <br>the presentation of a
            document written in HTML or XML. CSS describes how <br>elements should be rendered on the screen, on
            paper, in speech, or on other media.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  <section class="contact" id="contacts">
  <h2><span>our</span> contact</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed enim eligendi non quidem laudantium voluptate!</p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119951.15528904602!2d106.74651115949654!3d-6.744943347851214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cb8463fa99ff%3A0x739824866581b963!2sKec.%20Cigombong%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1701954517464!5m2!1sid!2sid"
          width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="name">
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email">
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="phone number">
          </div>
          <button type="submit" class="btn">send message</button>
        </form>

      </div>
  </section>

  <footer>
  <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#Home">Home</a>
        <a href="#competence">compotence</a>
        <a href="#contacts">contact</a>
      </div>

      <div class="credits">
        <p>credit by <a href="">arfan</a>. | &copy; 2023</p>
      </div>
  </footer>

  <script>
    feather.replace();
  </script>
  <script src="js/script.js"></script>
</body>
</html>
