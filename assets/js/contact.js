const form = document.getElementById('form-contact');
const fullname = document.getElementById('fullname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const message = document.getElementById('message');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    checkInputs();
});


function checkInputs() {
    // get the value from the inputs
    const fullNameValue = fullname.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const messageValue = message.value.trim();

    if (fullNameValue === '') {
        // show the error message
        // add error class
        setErrorFor(fullname, 'Bạn phải điền tên đầy đủ');
    } else {
        // add success class
        setSuccessFor(fullname);
    }

    if (emailValue === '') {
        setErrorFor(email, 'Email không được để trống');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Email không đúng');
    } else {
        setSuccessFor(email);
    }

    if (phoneValue === '') {
        // show the error message
        // add error class
        setErrorFor(phone, 'Bạn phải điền số điện thoại');
    } else {
        // add success class
        setSuccessFor(phone);
    }

    if (messageValue === '') {
        // show the error message
        // add error class
        setErrorFor(message, 'Bạn phải điền nội dung');
    } else {
        // add success class
        setSuccessFor(message);
    }
}

function setErrorFor(input, message) {
    const formGroup = input.parentElement; // .contactPage__contact-group
    const errorMessage = formGroup.querySelector('.contactPage__contact-message');

    // add error message
    errorMessage.innerText = message;

    // add error class
    formGroup.className = 'contactPage__contact-group error';

}

function setSuccessFor(input) {
    const formGroup = input.parentElement;

    // add success class
    formGroup.className = 'contactPage__contact-group success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
