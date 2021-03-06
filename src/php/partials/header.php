<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">


    <link href="style.css" rel="stylesheet">
</head>
<title>Homepage</title>

</head>

<body>
    <header>
        <div class=container>
            <h1 class="title"><a href="index.php">Alex Mayer</a></h1>
            <nav class="title__navigation">
                <ul id="normal_nav">
                    <li>
                        <a href="index.php">Start</a>
                    </li>
                    <li>
                        <a href="__">Leistungen</a>
                    </li>
                    <li>
                        <a href="__">Blog</a>
                    </li>
                    <li>
                        <a href="about.php">Über mich</a>
                    </li>
                    <li>
                        <a href="__">Kontakt</a>
                    </li>
                </ul>

                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner">

                        </span>
                    </span>
                </button>

                <ul class="hideme burgermenu">
                    <li>
                        <a href="index.php">Start</a>
                    </li>
                    <li>
                        <a href="__">Leistungen</a>
                    </li>
                    <li>
                        <a href="__">Blog</a>
                    </li>
                    <li>
                        <a href="about.php">Über mich</a>
                    </li>
                    <li>
                        <a href="__">Kontakt</a>
                    </li>
                </ul>

                <script>
                    let hamburger = document.querySelector(".hamburger");
                    let burgermenu = document.querySelector(".burgermenu");

                    hamburger.addEventListener("click", function() {
                        hamburger.classList.toggle("is-active");
                        burgermenu.classList.toggle("hideme");


                    })
                </script>

            </nav>
        </div>



        <div class="keyboard <?php echo"$titleimage" ?>">
            <p class="keyboard__inspirationalQuote">
                <span>Glänzende Ideen</span> <span> für leuchtende</span><span> Augen</span>
            </p>
            <div class="keyboard__button">
                <button onclick="">
                    Angebot einholen
                </button>
            </div>
        </div>
    </header>