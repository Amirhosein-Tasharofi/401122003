<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebProgramming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<style>

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/Information.php">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/WebProgramming/Contact_Us.php">Contact Us</a>
                </li>            
                </ul>
            </div>
        </div>
    </nav>
    <div class="lnfoform">
        <div class="container">
            <div class="form">
                <form action="Process_Form.php" method="POST">
                    <h2 class="heading__form">Send Information Form</h2>
                    <div class="input__Username">
                        <label for="name">First Name</label>
                        <input type="text" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="input__Lastname">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                    </div>
                    <button type="submit" class="Button">Submit</button>
                </form>
            </div>
            <div class="cyrcle cyrcle1"></div>
            <div class="cyrcle cyrcle2"></div>
        </div> 
    </div>
</body>
</html>