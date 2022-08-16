// $(function() {
//     var myAuto = document.getElementById('myaudio');
//     myAuto.play();
// })
// let music
window.onload = function(){
    console.log("window onload")
    setInterval("toggleSound()",10);
    // setTimeout(toggleSound(),100);
}

// var words = document.getElementsByTagName("section");
// console.log(words)
// words.addEventListener('click',console.log(333))

// words.addEventListener('click',function(){
//   $( "#hide" ).fadeOut( 4000  )
// });

function toggleSound() {
//     console.log("ha");
        music = document.getElementById("vd");//獲取ID  
        console.log();

        if (music.play) { //判讀是否播放  
           music.paused=false;
           music.play(); //沒有就播放 
        } 
        // else(music.play) {
        //     music.paused=true;
        //     music.paused();
        // }   
}
// document.getElementById("vd").src = "";



// myAudio = new Audio('someSound.ogg');
// myAudio.loop = true;
// myAudio.play();

// var myAudio = new Audio('Harry_Potter(cut).mp3'); 
// myAudio.addEventListener('ended', function() {
//     this.currentTime = 0;
//     this.play();
// }, false);
// myAudio.play();


// myAudio = new Audio('Harry_Potter(cut).mp3'); 
//     if (typeof myAudio.loop == 'boolean')
//     {
//         myAudio.loop = true;
//     }
//     else
//     {
//         myAudio.addEventListener('ended', function() {
//             this.currentTime = 0;
//             this.play();
//         }, false);
//     }
// myAudio.play();

// var audio = new Audio("Harry_Potter(cut).mp3");

// audio.addEventListener('canplaythrough', function() {
//     this.currentTime = this.duration - 10;
//     this.loop = true;
//     this.play();
// });



let timeoutID;

function setOutput(outputContent) {
  document.querySelector('#output').textContent = outputContent;
}

function delayedMessage() {
  setOutput('');
  vd = setTimeout(setOutput, 18*1000);
}

function clearMessage() {
  clearTimeout(vd);
}

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});


// const mainMenu = document.querySelector('.mainMenu');
// const closeMenu = document.querySelector('.closeMenu');
// const openMenu = document.querySelector('.openMenu');
// const menu_items = document.querySelectorAll('nav .mainMenu li a');




// openMenu.addEventListener('click',show);
// closeMenu.addEventListener('click',close);

// // close menu when you click on a menu item 
// menu_items.forEach(item => {
//     item.addEventListener('click',function(){
//         close();
//     })
// })

// function show(){
//     mainMenu.style.display = 'flex';
//     mainMenu.style.top = '0';
// }
// function close(){
//     mainMenu.style.top = '-100%';
// }

// $(document).ready(function(){
//   $("button").click(function(){
//     $("#section").fadeToggle(4000);
//   });
// });

// $("button").click(function(){
//   $("section").hide(1000);
// });

// $(document).ready(function () {
//   $("section").click(function () {
//       $("section").fadeToggle(3000);
      
//   });
// });

// $("#section").animate({
//   height:"hide",
// });

// $("#showDiv").hide("slow","swing",function () {
//   alert("section")
// });

// $("#hide").click(function(){
//     var xz = $(this).prop("checked");})

// $(document).ready(function(){
//   $("button").click(function(){
//     // $("#div2").fadeOut("slow");
//     $("#hide").fadeOut(3000);
//   });
// });



// $("#words").click(function() {
//   console.log('123')
  // $( "#hide" ).fadeOut( "slow", function() {
    
  // });
// });