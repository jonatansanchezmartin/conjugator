<?php

echo 123;

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8"/>

        <link rel="stylesheet" type="text/css" href="./styles.css"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Raleway:ital@0;1&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Public+Sans:ital,wght@0,100..900;1,100..900&family=Raleway:ital@0;1&family=Vollkorn:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

        <title>
            Bring the bacon
        </title>

        <meta 
            name= "Bring the bacon" 
            content= "Personal finance for young professionals."
        >

        <link 
            rel="icon" 
            href="./media/bringTheBacon.png" 
            type="image/x-icon" 
            sizes="any"
        >
    
    </head>
    
    <body>

        <div class="container">
            
            <nav>

                <div id="logo">
                <a href="#">
                    <img 
                        src="media/bringTheBacon.png" 
                        alt="Logo"
                        id="imageBacon" 
                        >
                </a>
                 </div>

                <ul class="menu">

                    <li>
                        <a href="#"><b>Home</b></a>
                    </li>

                    <li>
                        <a href="#"><b>About</b></a>
                    </li>

                    <li>
                        <a href="#"><b>Log in</b></a>
                    </li>

                    <li>
                        <button class="botonNegro"><a href="#"><b>Register</b></a></button>
                    </li>

                </ul>



            </nav>
        

            <header>

                <div class="fila1">

                    <h1>
                        Struggling with saving and personal finance?
                    </h1>

                    <div id="pfila1"></div>
                        <p>
                            Bring The Bacon is here for those young professionals that want to
                            win the money game.<br/><br/> 
                            
                            Our platform breaks down tricky financial topics in 
                            a friendly and approachable way.
                        </p>
                    </div>

                    <button class="botonNegro2">
                        <a href="#"><b>Learn more</b></a>
                    </button>

                </div>

                <div>
                    <img src="media/supermarket.jpg" id="super">
                </div>

            </header>

            <section class="fila2">

                <div class="col1Fila2">

                    <h2>
                        You know about money but still...
                    </h2>

                    <p>
                        You feel it is not enough because you are not living the life you want to have. 
                    </p>

                </div>

                <div class="col2Fila2">
                    <img src="media/coffee.jpg" id="cafe">
                </div>

            </section>


            <section class="fila3">

                <div class="col2Fila2">
                    <img src="media/papa.jpg" id="cafe">
                </div>

                <div class="col1Fila2">

                    <h2>
                        Engage with Real-Life Scenarios
                    </h2>

                    <p>
                        Immerse yourself in interactive scenarios that mirror real-life financial situations about:
                        <ul>
                            <li><p>Spending.</p></li>
                            <li><p>Saving.</p></li>
                            <li><p>Investing.</p></li>
                        </ul> 
                    </p>

                </div>

            </section>

            <section class="fila2">

                <div class="col1Fila2">

                    <h2>
                        Empowering others
                    </h2>

                    <p>
                        Driven by a passion to empower others on their financial journeys, our founders are committed to creating a supportive community where every post-college graduate can thrive financially.
                    </p>

                </div>

                <div class="col2Fila2">
                    <img src="media/apartment.jpg" id="cafe">
                </div>

            </section>

            <section>

            </section>

            <section>

            </section>
        </div>
    </body>

</html>