<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jay Kumar - IT Professional</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Welcome to My Portfolio</h1>
        <nav>
            <ul>
                <li><a href="#about">About Me</a></li>
                <li><a href="#projects">My Projects</a></li>
                <li><a href="#contact">Contact Me</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="about" class="section">
    <div class="container">
        <h2>About Me</h2>
        <img src="profile.jpg" alt="Jay Kumar's Profile Picture" class="profile-pic">
        <p>Results-driven IT professional with over 3 years of experience in IT support, systems integration, and project coordination...</p>
        <h3>Core Skills</h3>
        <ul>
            <li>Project Management & Implementation</li>
            <li>Technical Expertise: PHP, HTML, CSS, JavaScript, Node.js</li>
            <li>Support & Troubleshooting</li>
            <li>Soft Skills: Communication, Team Leadership, Problem-Solving</li>
        </ul>
    </div>
</section>

<section id="projects" class="section">
    <div class="container">
        <h2>My Projects</h2>
        <div class="project">
            <h3>CRM System Integration for Canadian Urban Transit Association</h3>
            <p><strong>Role:</strong> System Integration Project Lead</p>
            <p><strong>Technologies Used:</strong> WordPress, PHP, MySQL, API Integration</p>
            <p>Spearheaded CRM database management, led the implementation of WordPress sites, and successfully integrated APIs...</p>
        </div>
        <!-- Add more projects here -->
    </div>
</section>

<section id="contact" class="section">
    <div class="container">
        <h2>Contact Me</h2>
        <form action="contact-form.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2025 Jay Kumar. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
