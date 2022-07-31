//We test JS import
//alert("test");



var Counter=document.getElementById("demo");
// Set the date we're counting down to
var countDownDate = new Date("Jul 20, 2022 19:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  Counter.innerHTML = days + " Days " + hours + " Hours "
  + minutes + " Minutes " + seconds + " Seconds ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
  Counter.innerHTML = "You're Late";
  }
}, 1000);


//Algorithm for choosing the winner

//We create a constant that is associated to the buttom  
const winner = document.querySelector("#winner");

var MyModal = new bootstrap.Modal(document.getElementById('mod'), {
  keyboard: false
})
winner.addEventListener('click', function(){
   // alert("test");
   setTimeout(function(){ 
   MyModal.show();
},5000)
});



/*
//Declaring the cards 
const cards = document.querySelector("#cards");



//Then if we click to the buttom we execute a function 
//document.addEventListener(event, function)
winner.addEventListener('click', function(){
   // alert("test");
//We wait some time 



setTimeout(function(){ 
    //Then we display them 
   cards.style.display='block';

},1000);  
});


*/




//Waiting some time


//Declaring the cards  :we can use modal directly

//const cards = document.querySelector("#cards");

//Then if we click to the buttom we execute a function 
//document.addEventListener(event, function)


/*
winner.addEventListener('click', function(){
   // alert("test");
//We wait some time 



setTimeout(function(){ 
    //Then we display them 
MyModal.show();
},500);  
});

//Delete data-as-toggle in index.php in modal


*/

//Loader Pourcentage 

//All that process will run only if we click on winner
winner.addEventListener('click', function loader(_success) {

    var obj = document.querySelector('.preloader'),
    inner = document.querySelector('.preloader_inner'),
    page = document.querySelector('.page');
   
        obj.classList.add('show');
    page.classList.remove('show');
    var w = 0,
        t = setInterval(function() {
            w = w + 1;
            inner.textContent = w+'%';
            if (w === 100){
                //If we reached 100% , we print hte modal
                MyModal.show();

                obj.classList.remove('show');
                page.classList.add('show');
                clearInterval(t);
                w = 0;
obj.style.display="none";
                if (_success){
                    return _success();
                }
            }
        }, 20);
});





/*====================================
*     LOADER
======================================*/
/*
function loader(_success) {
    var obj = document.querySelector('.preloader'),
    inner = document.querySelector('.preloader_inner'),
    page = document.querySelector('.page');
    obj.classList.add('show');
    page.classList.remove('show');
    var w = 0,
        t = setInterval(function() {
            w = w + 1;
            inner.textContent = w+'%';
            if (w === 100){
                //If we reached 100% , we print hte modal
                MyModal.show();

                obj.classList.remove('show');
                page.classList.add('show');
                clearInterval(t);
                w = 0;
                if (_success){
                    return _success();
                }
            }
        }, 20);
}
*/


