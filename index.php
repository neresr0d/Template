<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigo Neres</title>
</head>

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: "Special Elite", system-ui;
        min-width: 100vh;



    }

    html {
        height: 100%;
    }

    .main {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        flex-grow: 1;
        left: 4rem;
    }

    #corpo {
        background-image: url('/template/imgs/o_código_da_vinci.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        height: 100vh;

    }



    h1 {
        color: black;
    }

    img {
        width: 60px;
        height: 60px;
    }

    .cont-superior {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
        margin: 10px;

    }

    .cont-superior h1 {}

    p {
        text-align: center;
        padding: 10px;

    }

    h2 {
        text-align: center;
    }

    .aa {

        justify-content: center;
        flex-direction: column;
        display: flex;
        background-color: green;
        border-radius: 20px;
        width: 60px;
        height: 50px;
        padding: 8px;
        margin: auto;

    }

    .aa a {
        text-align: center;
    }
</style>

<body>
    <main class="template">
        <div id="corpo">
            <div class="cont-superior">

                <nav>
                    Sobre mim
                </nav>
                <div>
                    <h1>Rodrigo Pereira Neres</h1>
                </div>

                <div>
                    <img src="/template/imgs/o_código_da_vinci.jpg" alt="">
                </div>

            </div>

            <div>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, possimus. <br>Repudiandae laudantium fugit explicabo repellat necessitatibus veritatis, consectetur ad eius, aperiam minima vero ullam incidunt voluptates reiciendis laboriosam sequi molestiae?</p>
            </div>

            <div>
                <div>
                    <h2>Formas de contato</h2>

                </div>

                <div class="aa">
                    <a href="https://github.com/neresr0d?tab=repositories" target="_blank" rel="noopener noreferrer">GitHub</a>
                </div>
            </div>

        </div>
    </main>
</body>

</html>