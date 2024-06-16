// notiflix
$("#tryIt").click(function() {
    Notiflix.Loading.pulse();
    setTimeout(function() {
        Notiflix.Loading.remove();
    }, 2000);
    $("#result").show();
});