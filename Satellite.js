//  ----------- ELEMENT MUSIQUE 1 -----------------

const zik1 = document.getElementById('Son1');
const btn1 = document.getElementById('btn1');

//  ----------- ELEMENT MUSIQUE 1 -----------------


//  ----------- ELEMENT MUSIQUE 2 -----------------

const zik2 = document.getElementById('Son2');
const btn2 = document.getElementById('btn2');

//  ----------- ELEMENT MUSIQUE 2 -----------------


//  ----------- ELEMENT MUSIQUE 3 -----------------

const zik3 = document.getElementById('Son3');
const btn3 = document.getElementById('btn3');

//  ----------- ELEMENT MUSIQUE 3 ----------------- 


//  ----------- ELEMENT BWAAAAAAAZZZ ---------------

const picture = document.images.pic

//  ----------- ELEMENT BWAAAAAAAZZZ ---------------


// ------------ ELEMENT PIED DE PAGE ---------------

const pied = document.querySelector('.pied');

// ------------ ELEMENT PIED DE PAGE ---------------



//  ----------- ELEMENT MUSIQUE 1 -----------------

btn1.addEventListener("click", () => {

    
    
    if (zik1.paused) {
        
        zik1.play();
        btn1.src = 'Pause Blanc.png';
        
    } else {
        
        zik1.pause();
        btn1.src = 'Logo Play Blanc.png';
        
    }
    
    
    ziak = () =>{
    
        btn1.src = 'Logo Play Blanc.png';

    }

    setTimeout(ziak, 36000)


    
})



//  ----------- ELEMENT MUSIQUE 1 -----------------




//  ----------- ELEMENT MUSIQUE 2 -----------------

btn2.addEventListener('click', () => {

    if (zik2.paused) {

        zik2.play();
        btn2.src = 'Pause Blanc.png';
        
    } else {

        zik2.pause();
        btn2.src = 'Logo Play Blanc.png';
        
    }


    ziakDeux = () =>{
    
        btn2.src = 'Logo Play Blanc.png';

    }

    setTimeout(ziakDeux, 48000)




})

//  ----------- ELEMENT MUSIQUE 2 -----------------
//  ----------- ELEMENT MUSIQUE 3 -----------------

btn3.addEventListener('click', () => {

    if (zik3.paused) {

        zik3.play();
        btn3.src = "Pause Blanc.png";
        
    } else {

        zik3.pause();
        btn3.src = 'Logo Play Blanc.png';
        
    }

    ziakTrois = () =>{
    
        btn3.src = 'Logo Play Blanc.png';

    }

    setTimeout(ziakTrois, 47000)

})

//  ----------- ELEMENT MUSIQUE 3 -----------------


pied.addEventListener("mousemove", () => {


   

})

picture.addEventListener("mousemove", () => {


    picture.classList.add('aramdan')


})

// Faire en sorte que le bouton "play" redevienne play à la
// quand la musique se finit