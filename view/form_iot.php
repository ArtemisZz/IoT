<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!--Header-->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img id="navbrand" alt="iot logo" style="width: 40px;"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Cloud-IoT-Core-Logo.svg/1200px-Cloud-IoT-Core-Logo.svg.png"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../public/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Navbar-->
</header>
<!--Header-->
<!--Main-->
<main role="main">
    <div class="container">
        <?php
        if ($error != null) {
            echo '<div><div class="alert alert-danger" role="alert">Something is not right—check it out!</div></div>';
        }
        ?>

        <!--Form-->
        <div class="m-4">
            <h1>Form IoT (Internet of Things) </h1>
            <form method="post" action="../controller/form_validation.php">
                <div class="form-group">
                    <label for="moduleNameInput">Module Name</label>
                    <input type="text" class="form-control" id="moduleNameInput" aria-describedby="nameHelp"
                           placeholder="Enter name of the module" name="moduleNameInput">
                </div>
                <div class="form-group">
                    <label for="numberInput">Number</label>
                    <input type="text" class="form-control" id="numberInput" placeholder="Number" name="numberInput">
                </div>
                <div class="form-group">
                    <label for="priceInput">Price</label>
                    <input type="number" class="form-control" id="priceInput" placeholder="Price" name="priceInput">
                </div>
                <div class="form-group">
                    <label for="descriptionInput">Description</label>
                    <textarea class="form-control" id="descriptionInput" placeholder="Description"
                              name="descriptionInput"></textarea>
                </div>
                <div class="form-group">
                    <label for="typeInput">Type</label>
                    <input type="text" class="form-control" id="typeInput" placeholder="Type" name="typeInput">
                </div>
                <div class="form-group selection-form">
                    <label for="temperature">Temperature</label>
                    <div class="row" id="temperature">
                        <div class="col">
                            From
                            <select name="teperatureFrom" class="custom-select">
                                <option value="-35">-35</option>
                                <option value="-30">-30</option>
                                <option value="-25">-25</option>
                                <option value="-20">-20</option>
                                <option value="-15">-15</option>
                                <option value="-10">-10</option>
                            </select>
                        </div>

                        <div class="col">
                            To
                            <select name="teperatureTo" class="custom-select">
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                                <option value="35">35</option>
                                <option value="40">40</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="operatingTimeInput">Operating Time</label>
                    <input type="text" class="form-control" id="operatingTimeInput" placeholder="Operating Time"
                           name="operatingTimeInput">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!--Form-->
    </div>
</main>
<!--Main-->

<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>