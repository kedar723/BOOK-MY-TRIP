


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India Blogger</title>
    <link rel="stylesheet" href="dss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <img class="logo" src="dsc1.png" alt="logo">
    <nav>
        <ul class="nav_link">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul> 
    </nav> 
    <br/>
    <header>
        <h1 class="head">Welcome to Easy Trip Planners!!!</h1>
    </header>
    <div class="parallax"> 
        
    </div>
    <p class="recent">Upcoming tours:- </p>
    <div style="height: 500px;"></div>
    <section>
        <div class="container">
            <div class="flex">
                <span><strong>Kashmir Escape</strong></span>
                <br>
                <br/>
                <p>5 days and 4 nights</p>
                <p>Loadging,food and travelling included</p>
                <br>
                
                <!--<a href="1.html" target="_blank"><input class="button" type="submit" value="Read More"></a>-->
                <form method="post" action="form.php">
                    <input class="button" name="book" id="book" type="submit" value="Book ticket">
                </form>
            </div>
            <br/>
            <div class="flex">
                <span><strong>Leh Ladakh</strong></span><br>
                <br/>
                <p>5 days and 4 nights</p>
                <p>Loadging,food and travelling included</p>
                <br>
                
                <form method="post" action="form.php">
                    <input class="button" name="book" id="book" type="submit" value="Book ticket">
                </form>
            </div>

        </div>
    </section>
    <footer>
        <div class="foo">
            <h1 id="contact">Get In Touch</h1>
            <br/><br/>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Phone: +91 8888866666</p>
            <p>Email: example@email.com</p>
        </div>
        <div class="ter">
            <form>
                <div>
                    <label>Name: </label>
                    <br>
                    <input type="text" id="username" name="username" minlength="3" maxlength="20">
                </div><br/>
                <div>
                    <label>Email: </label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="Enter your email address..">
                </div><br/>
                <div>
                    <label>Message: </label>
                    <br>
                    <textarea></textarea>
                </div>
                
                
            </form>
            <input class="btn" type="button" value="Send">
        </div>
    </footer>

</body>
</html>


