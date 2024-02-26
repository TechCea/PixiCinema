let movies = ['movie_1', 'movie_2', 'movie_3', 'movie_4', 'movie_5', 'movie_6', 'movie_7', 'movie_8', 'movie_9', 'movie_10', 'movie_11', 'movie_12', 'movie_13'];
let alta = ['movie_14', 'movie_15', 'movie_16', 'movie_17', 'movie_18', 'movie_20', 'movie_21', 'movie_22', 'movie_23', 'movie_24'];
let assitiu = ['movie_25', 'movie_26','movie_27','movie_28','movie_29','movie_30','movie_31','movie_32', 'movie_33'];


let continueWatch = document.querySelector('#continue');
let emAlta = document.querySelector('#emAlta');
let pqAssistiu = document.querySelector('#pqAssistiu');


function imgCarrouselJPEG(arrayImgs, elementHtml){
    for(let i = 0; i < arrayImgs.length ; i++){
        elementHtml.innerHTML += `
            <div class="item">
                <img class="box-movie" src="img/peliculas/${arrayImgs[i]}.jpg"/>
            </div>`;
    }

}


imgCarrouselJPEG(movies, continueWatch);
imgCarrouselJPEG(alta, emAlta);
imgCarrouselJPEG(assitiu, pqAssistiu);



$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
