<!DOCTYPE html>
<html lang="en">

<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fake API</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <!-- nav bar start -->
    <nav id="navbar" class="navbar navbar-expand-lg mt-4">
        <div class="container">
            <a class="navbar-brand" href="#" style="color: blueviolet;">
                <h5>Fake API</h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
                    <a class="nav-link text-dark" href="#">Docs</a>
                    <a class="nav-link text-dark" href="#">GitHub</a>
                    <a class="nav-link text-dark" href="#">Buy me a coffee</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav bar end  -->

    <!-- home page start  -->
    <section>
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 ">
                    <div class="text-center">
                        <img src="{{ asset('img/intro.svg') }}" class="" width="500px" height="500px" alt="image">
                    </div>
                </div>
                <div class="col-md-6 order-md-first">
                    <div class="">
                        <h2 style="color:blueviolet">Fake API</h2>
                        <p class="fw-light fs-4">Fake rest API for your e-commerce or shopping website prototype</p>
                        <a href=""><button class="btn text-white fw-medium"
                                style="background-color: blueviolet;">View on Github <i
                                    class="ms-1 fa-brands fa-github"></i> </button></a>
                        <a href=""><button class="ms-1 btn text-white fw-medium"
                                style="background-color:limegreen;">Read Docs <i
                                    class="ms-1 fa-solid fa-book"></i></button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- home page end -->

    <!-- example section start -->
    <div class="container-lg py-4">
        <div class="row text-center">
            <h3>Get tired of Lorem ipsum data?!</h3>
            <h3>Didn't you find any free e-commerce API?!</h3>
            <p class="fw-light fs-4 mt-4">fakeStoreApi is a free online REST API that you can use whenever you need
                Pseudo-real data for your e-commerce or shopping website without running any server-side code. It's
                awesome for teaching purposes, sample codes, tests, etc.</p>
        </div>
        <div class="row mt-5">
            <h2 style="color: blueviolet;">Example Code</h2>
            <div class="d-flex justify-content-between">
                <div class="card w-100 h-100 mt-2 bg-light">
                    <div class="card-body w-75">
                        <p class="card-text ms-3 fw-semibold">fetch('https://fakeapi.com/products/1')<br>
                            .then(res=>res.json()) <br> .then(json=>console.log(json))
                        </p>
                    </div>
                </div>
            </div>
            <button class="ms-3 w-25 btn mt-3 text-white fw-medium" style="background-color: limegreen;">Try it</button>
        </div>
    </div>
    <!-- example section end -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
