


let form  = document.getElementById('form1');
form.addEventListener('submit', logSubmit)


function logSubmit(event) {

let firstName  = form.firstname.value
let lastName  = form.lastname.value
let contact  = form.contact.value
let email  = form.email.value
let gender  = form.gender.value


console.log("Form Submittted, enjoy!!!")
console.log('Hi ' , firstName, ' ', lastName, ' ',email, ' ',gender)

  event.preventDefault()
 }

