<!DOCTYPE html>
<html lang="en">

<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Fake API</title>

<x-css></x-css>

<body>

    <x-navbar></x-navbar>

    <!-- home page start  -->
    <section>
        <div class="container-lg">
            <div class="row min-vh-100 align-items-center align-content-center">
                <div class="col-md-6 ">
                    <div class="text-center">
                        <img src="{{ asset('img/intro.svg') }}" class="" width="500px" height="500px"
                            alt="image">
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
            <h3 class="fs-4">Get tired of Lorem ipsum data?!</h3>
            <h3 class="fs-4">Didn't you find any free e-commerce API?!</h3>
            <p class="fw-light fs-4 mt-4">fakeStoreApi is a free online REST API that you can use whenever you need
                Pseudo-real data for your e-commerce or shopping website without running any server-side code. It's
                awesome for teaching purposes, sample codes, tests, etc.</p>
        </div>
        <div class="row mt-5">
            <h2 style="color: blueviolet;">Example Code</h2>
            <div class="d-flex justify-content-between">
                <div class="card w-100 h-100 mt-2 bg-light">
                    <div class="card-body w-75">
                        <pre>
                        <code class="fs-5" style="color: limegreen;">
                            "fetch('http://localhost:8000/api/bird/1')
                                .then(res=&gt;res.json())
                                .then(json=&gt;console.log(json))"
                        </code>
                       </pre>
                    </div>
                </div>
            </div>
            <button id="tryIt" class="ms-3 w-25 btn mt-3 text-white fw-medium"
            style="background-color: limegreen;">Try
            it</button>


            <div class="d-flex justify-content-between">
                <div id="result" class="card w-100 h-100 mt-2 bg-light" style="display: none;">
                    <div class="card-body w-75">
                        <pre>
                            <code class="fs-6" style="color: limegreen;">
                                {
                                    "id": 1,
                                    "BirdMyanmarName": "ငှက်စိမ်းရင်ဝါ",
                                    "BirdEnglishName": "Orange-bellied Leafbird",
                                    "Description": "မြန်မာလိုတော့ ငှက်စိမ်းရင်ဝါလို့ ခေါ်ကြတယ်။ အစိမ်းရောင် အမွှေးအတောင်တွေပိုင်ဆိုင်ထားတဲ့ ငှက်လေး တကောင်ပဲ ဖြစ်ပါတယ်။ ကျနော်တို့တွေ စိတ်ထဲ စွဲနေတာက အစိမ်းရောင် ငှက်ဆိုရင် အနီးစပ်ဆုံး ကြက်တူရွေးကို မြင်မိကြမှာပါ။  \nမြန်မာနိုင်ငံမှာဆိုရင်တော့ ကျနော်က သူ့ကို ကလော ဗျူးပွိုင့်သွားတဲ့လမ်းမှာ မှတ်တမ်းတင်ဖူးပါတယ်။​ အသံဆူဆူညံညံ အော်တတ်ပီး ချစ်စရာ အစိမ်းရောင် ငှက်လေး တမျိုး ဖြစ်ပါတယ်။",
                                    "ImagePath": "img/1_Orange-belliedLeafbird.jpg",
                                    "created_at": "2024-05-22T08:35:40.000000Z",
                                    "updated_at": "2024-05-22T08:35:40.000000Z"
                                }
                            </code>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- example section end -->

    <!-- resources section  start -->
    <div class="container-lg mt-5 mb-5">
        <div class="row align-items-center align-content-center">
            <h2 style="color: blueviolet;">Resources</h2>
            <p class="fw-light fs-5 mt-2">There are 4 main resources need in shopping prototypes</p>
            <ul class="list-unstyled fs-5 mt-2 text-primary">
                <li class="d-flex justify-content-between m-2">
                    <a href="" class="text-decoration-none">Products</a>
                    <span class="text-dark">20 products</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <a href="" class="text-decoration-none">Carts</a>
                    <span class="text-dark">20 products</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <a href="" class="text-decoration-none">Users</a>
                    <span class="text-dark">10 Users</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <a href="" class="text-decoration-none">Login Token</a>
                    <span class="btn fw-medium text-white" style="background-color: blueviolet;">New!</span>
                </li>
            </ul>
            <a href="" class="btn w-25 text-white fw-medium" style="background-color: limegreen;">View Detail
                on Docs</a>
        </div>
    </div>
    <!-- resources section end  -->

    <!-- route section start -->
    <div class="container-lg mt-5 mb-5">
        <div class="row">
            <h2 style="color: blueviolet;">Routes</h2>
            <p class="fw-light fs-5 mt-2">All HTTP methods are supported</p>
            <ul class="list-unstyled fs-6 mt-2">
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/products</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/products/1</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/products/categories</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/products/category/jewelery</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/carts?userId=1</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>GET</span>
                    <a href="">/products?limit=5</a>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>POST</span>
                    <span>/products</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>PUT</span>
                    <span>/products/1</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>PATCH</span>
                    <span>/products/1</span>
                </li>
                <li class="d-flex justify-content-between m-2">
                    <span>DELETE</span>
                    <span>/products/1</span>
                </li>
            </ul>
            <a href="" class="btn w-25 p-2 text-white fw-medium" style="background-color: limegreen;">View Detail on Docs</a>
        </div>
    </div>
    <!-- route section end  -->

    <x-footer></x-footer>

    <x-cdn></x-cdn>

    <script>
        $("#tryIt").click(function() {
            Notiflix.Loading.pulse();
            setTimeout(function() {
                Notiflix.Loading.remove();
            }, 2000);
            $("#result").show();
        });
    </script>

</body>

</html>
