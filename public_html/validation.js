let form = document.getElementById('form');
let username = document.getElementById('formName');
let email = document.getElementById('formEmail');

let password = document.getElementById('formPassword');
let birthdate= document.getElementById('formbirthdate');
let hobbies = document.getElementById('formHobbies');
let words = document.getElementById('formWords');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    checkInputs();

});

function checkInputs() {

    let usernameValue = username.value
    console.log(usernameValue)
    let emailValue = email.value.trim();
    let paswordValue = password.value.trim();
    let birthdateValue = birthdate.value
    let hobbiesValue = hobbies.value
    let wordsValue = words.value

    if (usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank')
    }else if (!isLatin(usernameValue)) {
        setErrorFor(username, 'Must contain only Latin letters');
    }else {
        setSuccessFor(username);
    }


    if(emailValue === '') {
        setErrorFor(email, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Not a valid email');
    } else {
        setSuccessFor(email);
    }
    if(paswordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
    }else if(paswordValue < 6) {
        setErrorFor(password, 'Password must be 6char at least');
    }else if(!isPassContains(paswordValue)) {
        setErrorFor(password, 'Must contains numbers and letters');
    }
    else {
        setSuccessFor(password);
    }

 }

 function setErrorFor(input, message) {
    console.log(input, message)

    let formControl = input.parentElement;
    console.log(formControl);
    let small = formControl.querySelector('small')
     small.innerText = message;
     formControl.className = 'form__item error';




 }

 function setSuccessFor(input, message) {
    let formControl = input.parentElement;
    // let scsMsg = formControl.querySelector('small');
     formControl.className = 'form__item success';
 }

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isLatin(username) {
    return /[a-zA-Z]/.test(username);
}
function isPassContains(password) {
    return /^[0-9a-zA-Z]+$/.test(password);
}
// function checkDate() {
//     let inputDate = new Date(birthdate);
//     if (+date.getFullYear()-150>(+inputDate.getFullYear())) {
//         return
//     }else if (+date.getFullYear()=== +inputDate.getFullYear())&&(+date.getMonth()===inputDate.getMonth())&&(+date.getDate()===(inputDate.getDate()-1)
//
//     //small = 'you cant be borned yesterday';
// }


// function checkDate(){
//     output.innerText=" ";
//     let inputDate=new Date(birthdate.value);
//     if(+date.getFullYear()-150>(+inputDate.getFullYear())) {
//         // output.innerText="Wrong date(>150)";
//         return;
//     }
//
//     if(+date.getFullYear()===(+inputDate.getFullYear())&&
//         +date.getMonth()===(+inputDate.getMonth())&&
//         +date.getDate()===(+inputDate.getDate()) ){
//         output.innerText="Wrong date (it cant be today)";
//         return;
//     }
//     addToObject();
//
// }