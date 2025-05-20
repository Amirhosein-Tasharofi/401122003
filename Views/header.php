<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebProgramming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/WebProgramming/style.css"> -->
</head>

<style>
    *{
    margin: 0;
    padding: 0;
    font-family: poppins;
    box-sizing: border-box;
    color: white;
}

body{
    background-color: #080710;
    height: 100vh;
    /* display: flex;
    justify-content: center;
    align-items: center; */
}

/* Navbar */

.container-fluid{
    justify-content: center;
}

.navbar-collapse{
    justify-content: center;
}

/* Form */

.lnfoform{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
}

.container{
    margin-top: 120px;
    width: 400px;
    position: relative;
}

.form{
    height: 100%;
    width: 100%;
    padding: 50px 35px 35px 35px;
    border-radius: 10px;
    border: 2px solid rgba(255, 255, 255, 0.13);
    background-color: rgba(255, 255, 255, 0.13);
    backdrop-filter: blur(10px);
    box-shadow: 0 0 20px black;
}

.heading__form{
    text-align: center;
    font-size: 32px;
    font-weight: 500;
}

.input__Username{
    margin-top: 30px;
}

label{
    display: block;
    margin-bottom: 10px;
    font-family: poppins;
    font-size: 16px;
    font-weight: 500;
}

input{
    display: block;
    height: 50px;
    width: 100%;
    padding: 0 10px;
    font-weight: 300;
    margin-bottom: 25px;
    font-family: poppins;
    font-size: 14px;
    background-color: rgba(255, 255, 255, 0.07);
    border: none;
    border-radius: 4px;
}

input::placeholder{
    font-size: 14px;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.8);
}

.Button{
    width: 100%;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 500;
    color: black;
    border-radius: 4px;
    border: none;
    margin-top: 25px;
}

.cyrcle {
    height: 185px;
    width: 185px;
    background-color: aquamarine;
    border-radius: 50%;
    position: absolute;
    z-index: -1;
}

.cyrcle1{
    top: -20%;
    left: -25%;
    background: linear-gradient(45deg, rgb(0, 153, 255), blue);
}

.cyrcle2{
    right: -12%;
    bottom: -18%;
    background: linear-gradient(45deg, rgb(255, 30, 0), rgb(255, 200, 0));
}
    </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/infs">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/about">About US</a>
                </li>            
                </ul>
            </div>
        </div>
    </nav>