// // Functions

// function add_two_numbers(num1, num2){

//    return parseInt(num1) + parseInt(num2); // " ParseINT " Used to 
// }

// var result = add_two_numbers(90, 789);
// alert(result);

// // Loops

// for ( var i = 1; i > 10; i++) {
  
//     console.log(i);
// };

// DOM Manipulation 

var tinput = document.getElementById('text_input'); 
var output_span = document.getElementById('output');

tinput.addEventListener('keyup', function(){

    output_span.innerHTML = tinput.value;
    // console.log(tinput.value);

});

var a_tag = document.getElementById('click_me');

a_tag.addEventListener('click', function(){
document.body.classList.toggle('dark');

});