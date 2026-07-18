var atag = document.getElementById('a_tag');

atag.addEventListener('click', function(e){

    e.preventDefault();

// alert('sdkfjsdjfksd')

console.log('4754754589')
});


var testinput = document.getElementById('test_input');
    
     testinput.addEventListener('keyup', function(){

        if( testinput.value.length > 10 ){
            alert(' Your text is too big');

        }

     });


// Conditions in JS"Javascript"

// var number = 77;
// var another_number = 130;

// if( number < 100 && another_number < 100){

//     alert('Number is less than hundered');
// }else{
//     alert(' You are Clear');
// }