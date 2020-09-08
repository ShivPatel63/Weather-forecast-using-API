<!DOCTYPE html>
<html>
<head>

	<title>Weather Forecast</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css" />
    <style>
	body 
	{
  	background-image: url('d.jpg');
  	background-repeat: no-repeat;
  	background-size: cover;
	}
	</style>
	<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #3CB371;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.navbar a.active {
  background-color: #4682B4;
  color: white;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>

</head>

<body>
	
	<section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    What's the weather like?
                </h1>
            </div>
        </div>
    </section>
    {
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-4 is-4">
					<center>
					<form method="GET" action="get.php">
					<span class="title">Type City and Country</span>
					<br>
					<br>
					<input type="text" name="q" required placeholder="City Name">
					<input type="submit" name="submit">
					</form>
					</center>
	             </div>
            </div>
        </div>
    </section>
	<section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-offset-4 is-4">
                    <div class="box">
                        <article class="media">
                            <div class="media-left">
                                <figure class="image is-50x50">
                                    <img src="http://openweathermap.org/img/w/10d.png" alt="Image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <span class="title">Las Vegas</span>
                                        <br>
                                        <span class="subtitle">29° F</span>
                                        <br> thunderstorm with heavy rain
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    }
  <footer>
    <div class="navbar">
  <a href="main.php" class="active">Home</a>
  <a href="signup.php">Sign UP</a>
  <a href="login.php">Log in</a>

</div>
</footer>
</body>
</html>