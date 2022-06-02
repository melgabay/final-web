<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Assistant">
    <!-- BOOTSRAP -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/object_page.css">
    <link rel="stylesheet" href="css/template.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <title>TripDream</title>
</head>


<body>
    <!-- <header>
        <a href="index.html"><img src="./images/logo.png" alt="logo"></a>
        <section class="prof-pic">
            <a href="#" class="user_pic"></a>
            <span>Hello Dana</span>
        </section>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Homepage</a></li>

                    <li class="nav-item"><a class="nav-link" href="form.php">Create New Trip</a></li>

                    <li class="nav-item"><a class="nav-link active" href="list_page.php">My Trips</a></li>
                </ul>

            </div>

        </div>

    </nav> -->
    <!-- <div class="h1_template">

         <h1>South America</h1>
    </div> -->
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
    
            <li class="nav-item"><a class="nav-link " href="form.php">Create New Trip</a></li>

            <li class="nav-item"><a class="nav-link active" href="list_page.php">My Trips</a></li>

          </ul>
      </nav>
        <section class="prof-pic">
            <a href="#" class="user_pic"></a>
            <span>Hello Dana</span>
        </section>
    </header>

    <main class="main-form">
        <div id="trip_details">
            <section class="trip_details_section">
                <span>Dates:</span>
                <button class="edit_button"></button>
                <input type="date" name="begin" placeholder="dd-mm-yyyy" value="2021-07-22" min="1997-01-01"
                    max="2030-12-31" disabled>
                <input type="date" name="end" placeholder="dd-mm-yyyy" value="2021-11-22" min="1997-01-01"
                    max="2030-12-31" disabled>
            </section>
            <section class="trip_details_section">
                <span>Ages:</span>
                <button class="edit_button"></button>
                <select name="Ages" disabled>
                    <option value="">18-25</option>
                    <option value="26-35">26-35</option>
                    <option value="46-60">36-45</option>
                    <option value="46-60">46-60</option>
                    <option value="60+">60+</option>
                </select>
            </section>
            <section class="trip_details_section">
                <span>Character</span>
                <button class="edit_button"></button>
                <select name="Character" disabled>
                    <option value="">Chill</option>
                    <option value="Sunbathing">Sunbathing</option>
                    <option value="Tracks">Tracks</option>
                    <option value="Nature">Nature</option>
                    <option value="Field">Field</option>
                    <option value="Shopping">Shopping</option>
                </select>
            </section>
            <section class="trip_details_section">
                <span>Total</span>
                <span>20,000 &nbsp;&#8362;</span>
            </section>
        </div>
        <h2 id="object_page_h2">Path:</h2>
        <div id="trip_destnations">
            <div class="destnation">
                <div class="des_img">
                    <img src="images/Vector 3.png">
                    <img src="images/dest1.png">
                    <img src="images/dots.png">
                    <img src="images/bus.png">
                </div>
                <div class="area_list">
                    <h3>Argentina</h3>
                    <img src="images/Vector 4.png">
                    <button class="edit_button"></button>
                    <span>Areas:</span>
                    <ol>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="Buenos Aires"
                                    checked>
                                <label class="form-check-label o-page">Buenos Aires</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="Ushuaia"
                                    checked>
                                <label class="form-check-label">Ushuaia</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="Bariloche"
                                    checked>
                                <label class="form-check-label">Bariloche</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="El Calafate"
                                    checked>
                                <label class="form-check-label">El Calafate</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="El Chalten"
                                    checked>
                                <label class="form-check-label">El Chalten</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest1_ares[]" value="Mendoza"
                                    checked>
                                <label class="form-check-label">Mendoza</label>
                            </div>
                        </li>
                    </ol>

                    <section>
                        <p>Total:7000 &nbsp;&#8362;</p>
                    </section>
                </div>
            </div>
            <div class="destnation">
                <div class="des_img">
                    <img src="images/Vector 3.png">
                    <img src="images/dest2.png">
                    <img src="images/dots.png">
                    <img src="images/airplane.png">
                </div>
                <div class="area_list">
                    <h3>Chile</h3>
                    <img src="images/Vector 4.png">
                    <button class="edit_button"></button>
                    <span>Areas:</span>
                    <ol>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest2_ares[]" value="Santiago"
                                    checked>
                                <label class="form-check-label">Santiago</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest2_ares[]" value="Pucon"
                                    checked>
                                <label class="form-check-label">Pucon</label>
                            </div>
                        </li>
                    </ol>
                    <section>
                        <p>Total:3000 &nbsp;&#8362;</p>
                    </section>
                </div>
            </div>
            <div class="destnation">
                <div class="des_img">
                    <img src="images/Vector 3.png">
                    <img src="images/dest3.png">
                    <img src="images/dots.png">
                    <img src="images/bus.png">
                </div>
                <div class="area_list">
                    <h3>Brazil</h3>
                    <img src="images/Vector 4.png">
                    <button class="edit_button"></button>
                    <span>Areas:</span>
                    <ol>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest3_ares[]"
                                    value="Rio De Janeiro" checked>
                                <label class="form-check-label">Rio De Janeiro</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest3_ares[]" value="Iguazo"
                                    checked>
                                <label class="form-check-label">Iguazo</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest3_ares[]"
                                    value="Florianopolis" checked>
                                <label class="form-check-label">Florianopolis</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest3_ares[]" value="Olinda"
                                    checked>
                                <label class="form-check-label">Olinda</label>
                            </div>
                        </li>
                    </ol>
                    <section>
                        <p>Total:6000 &nbsp;&#8362;</p>
                    </section>
                </div>
            </div>
            <div class="destnation">
                <div class="des_img">
                    <img src="images/Vector 3.png" id="last_vector">
                    <img src="images/dest4.png">
                    <img src="images/dots.png">
                </div>
                <div class="area_list">
                    <h3>Peru</h3>
                    <img src="images/Vector 4.png">
                    <button class="edit_button"></button>
                    <span>Areas:</span>
                    <ol>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest4_ares[]" value="Cusco"
                                    checked>
                                <label class="form-check-label">Cusco</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest4_ares[]" value="Lima"
                                    checked>
                                <label class="form-check-label">Lima</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest4_ares[]" value="Machu Picchu"
                                    checked>
                                <label class="form-check-label">Machu Picchu</label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input o-page" type="checkbox" name="dest4_ares[]" value="Huaraz"
                                    checked>
                                <label class="form-check-label">Huaraz</label>
                            </div>
                        </li>
                    </ol>
                    <section>
                        <p>Total:4000 &nbsp;&#8362;</p>
                    </section>
                </div>
            </div>
        </div>

        <div class="login-container">
            <button type="submit" class="btn btn-outline-dark">
                Save
            </button>
        </div>

    </main>
</body>

</html>