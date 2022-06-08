<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">

    <!-- boostrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- bootsrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>



    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
    <link rel="stylesheet" href="css/template.css">
    <!-- <link rel="stylesheet" href="css/form.css"> -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>-->
    <script defer="" src="js/list_page.js"></script>
    <script defer="" src="js/script.js"></script>


    <!-- calendar -->
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <!-- calendar -->

    <title>TripDream</title>
</head>


<body>

    <header>
        <a href="index.html"><img src="./images/logo.png" alt="logo"></a>
       

        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container-fluid">
    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
    
                    <span class="navbar-toggler-icon"></span>
    
                </button>
    
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Homepage</a></li>
    
                        <li class="nav-item"><a class="nav-link active" href="form.php">Create New Trip</a></li>
    
                        <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>
    
                    </ul>
    
                </div>
    
            </div>
        </nav> -->
      
      <nav>
          <ul>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Homepage</a></li>
    
            <li class="nav-item"><a class="nav-link active" href="form.php">Create New Trip</a></li>

            <li class="nav-item"><a class="nav-link " href="list_page.php">My Trips</a></li>

          </ul>
      </nav>
        <section class="prof-pic">
            <a href="#" class="user_pic"></a>
            <span>Hello Dana</span>
        </section>
    </header>

   

    <main class="main-form">

        <form action="get_params_login.php" method="GET" class="form-page-form">
            <div class="first-dest">

                <h2 class="object_page_h2">Choose destination:</h2>

                <div class="continent">
                    <div class="col-md-3">
                        <img src="images/Looks_One_Icon_1.png" alt="nb1">
                        <label for="inputState" class="form-label">Choose continent:</label>
                        <select id="inputState" class="form-select" required>
                            <option value="">...</option>
                            <option value="South America">South America</option>
                            <option value="North America">North America</option>
                            <option value="Europe">Europe</option>
                            <option value="Asia">Asia</option>
                            <option value="Australia">Australia</option>
                            <option value="Africa">Africa</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <img src="images/Looks_Two_Icon_1.png" alt="nb1">
                        <label for="inputState" class="form-label">Choose Country:</label>
                        <select id="inputState" class="form-select" required>
                            <option value="">...</option>
                            <option value="Bresilia">Bresilia</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Urugay">Urugay</option>
                            <option value="Perou">Perou</option>
                            <option value="Mexique">Mexique</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <img src="images/Looks_3_Icon_1.png" alt="nb1">
                        <label for="inputState" class="form-label">Choose Town:</label>
                        <select id="inputState" class="form-select" required>
                            <option value="">...</option>
                            <!-- IF THE COUNTRY CHOOSE IS BRASILIA -->
                            <option value="Brasilia">Brasilia</option>
                            <option value="Rio de Janero">Rio de Janero</option>
                            <option value="Sao Paulo">Sao Paulo</option>
                            <option value="Salvador da Bahia">Salvador da Bahia</option>
                            <option value="Manaus">Manaus</option>
                        </select>
                    </div>

                </div>

                <div class="anotherD">
                    <h5 class="another-destinatation"> Choose another destination (optionaly):</h4>
                        <div class="continent">
                            <div class="col-md-3">
                                <img src="images/Looks_One_Icon_1.png" alt="nb1">
                                <label for="inputState" class="form-label">Choose continent:</label>
                                <select id="inputState" class="form-select" required>
                                    <option value="">...</option>
                                    <option value="South America">South America</option>
                                    <option value="North America">North America</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Africa">Africa</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <img src="images/Looks_Two_Icon_1.png" alt="nb1">
                                <label for="inputState" class="form-label">Choose Country:</label>
                                <select id="inputState" class="form-select" required>
                                    <option value="">...</option>
                                    <option value="Bresilia">Bresilia</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Urugay">Urugay</option>
                                    <option value="Perou">Perou</option>
                                    <option value="Mexique">Mexique</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <img src="images/Looks_3_Icon_1.png" alt="nb1">
                                <label for="inputState" class="form-label">Choose Town:</label>
                                <select id="inputState" class="form-select" required>
                                    <option value="">...</option>
                                    <!-- IF THE COUNTRY CHOOSE IS BRASILIA -->
                                    <option value="Brasilia">Brasilia</option>
                                    <option value="Rio de Janero">Rio de Janero</option>
                                    <option value="Sao Paulo">Sao Paulo</option>
                                    <option value="Salvador da Bahia">Salvador da Bahia</option>
                                    <option value="Manaus">Manaus</option>
                                </select>
                            </div>

                        </div>
                </div>

                <div class="budget">
                    <h2> Enter a budget:</h2>
                </div>


                    <!-- <div class="choose-budget"> -->
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="inputPassword2" placeholder="0 $" min="0">
                        </div>
                    <!-- </div> -->

                <div class="choose-date">

                    <div class="dater-1">
                        <h2> Start Date:</h2>
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                    </div>


                    <div class="dater">
                        <h2> End Date:</h2>
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                    </div>
                </div>

                <div class="typeoftyoul">
                    <h2> Type of trip:</h2>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="interests[]" value="Play Quidditch">
                        <label class="form-check-label" for="flexCheckDefault">Nature</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="interests[]" value="Play Quidditch">
                        <label class="form-check-label" for="flexCheckDefault">Beach</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="interests[]" value="Play Quidditch">
                        <label class="form-check-label" for="flexCheckDefault">Sport</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="interests[]" value="Play Quidditch">
                        <label class="form-check-label" for="flexCheckDefault">Quiet</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="interests[]" value="Play Quidditch">
                        <label class="form-check-label" for="flexCheckDefault">Party</label>
                    </div>
                </div>

                <div class="middle-age">
                    <h2> Select the age:</h2>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Yes and proud!">
                        <label class="form-check-label">18-25</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Yes and proud!">
                        <label class="form-check-label">25-35</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Yes and proud!">
                        <label class="form-check-label">35-45</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Yes and proud!">
                        <label class="form-check-label">45-60</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Yes and proud!">
                        <label class="form-check-label">60 +</label>
                    </div>

                </div>
                <div class="login-container">
                    <button type="submit" class="btn btn-outline-dark">
                        Search
                    </button>
                </div>
        </form>
    </main>
</body>

</html>