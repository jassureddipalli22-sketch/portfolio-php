<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
</head>
<body>

    
    <header>
        <nav>
            <h2 class="logo">Portfolio</h2>

            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        
    </header>

    
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Hello, I'm </h1>
            <h3><span>R.K.Jaswanthi</span></h3>
            <p>Web Developer | Designer | Student</p>
           
        </div>
    </section>

  
    <section id="about" class="about">
        <h2>About Me</h2>
        <p>
            I'm a B.Tech ECE student and frontend developer focused on building clean, user-friendly
             websites. I work mainly with HTML, CSS, JavaScript, and Git, and I'm always learning new 
              tools to improve my craft.I am a passionate web developer who loves creating responsive and
          attractive websites using HTML, CSS,  JavaScript, and modern web technologies.

          
        </p>
    </section>


    
    <section id="projects" class="projects">
        <h2>My Projects</h2>
         <div class="project-container">
        <div class="project-box">
            <h3>Food Website</h3>
            <img src="images/online.webp">
            <p>Online food ordering website</p>
        </div>

        <div class="project-box">
            <h3>E-Commerce Website</h3>
            <img src="images/e-com.webp">
            <p>Shopping website </p>
        </div>

        <div class="project-box">
            <h3>Portfolio Website</h3>
            <img src="images/1port.jpg">
            <p>Personal portfolio website</p>
        </div>
        </div>
    </section>

    <section id="contact" class="contact">
    <h2>Contact Me</h2>
    <form action="save.php" method="POST">
        Your Name: <br>
        <input type="text" name="name" required><br><br>
        
        Your Email: <br>
        <input type="email" name="email" required><br><br>
        
        Message: <br>
        <textarea name="message" rows="4" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Send Message">
    </form>
</section>
    

      <footer class="footer" id="contact">
    <div class="footer-content">
                     <div class="footer-left">
                       <h3>R.K. Jaswanthi</h3>
                       <p>Building responsive websites with HTML, CSS & JavaScript</p>
                     </div>

             <div class="footer-links">
                <h4>Quick Links</h4>
                        <ul>
                            <li><a  class="active" href="#home">Home</a></li>
                             <li><a href="#about">About</a></li>
                             <li><a href="#projects">Projects</a></li>
                              <li><a href="#contact">Contact</a></li>
                         </ul>
    </div>

    <div class="footer-socials">
           <h4>Connect</h4>
                <div class="social-icons">
                     <a href="https://github.com/yourusername" target="_blank">
                        <i class="fab fa-github"></i></a>
                     <a href="https://linkedin.com/in/yourusername" target="_blank">
                        <i class="fab fa-linkedin"></i></a>
                     <a href="mailto:yourmail@gmail.com">
                        <i class="fas fa-envelope"></i></a>
                      <a href="https://twitter.com/yourusername" target="_blank">
                        <i class="fab fa-x-twitter"></i></a>
                </div>
     </div>
  </div>

           <div class="footer-bottom">
              <p>&copy; 2026 R.K. Jaswanthi | Designed & coded by me</p>
  </div>
</footer>
 <script src="script.js">
    
 </script>
</body>
</html>