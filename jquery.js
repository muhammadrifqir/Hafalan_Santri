const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const form = document.getElementById('form');

form.addEventListener('submit', e =>{
    e.preventDefault();

    validateInputs();
});

const setError = ('eLement, message') => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('error');
    inputControl.classList.remove('succes');
}

const isvalidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]])\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    
    if(usernameValue === '') {
        setError(username, 'Username is required');
    }
    
    else {
        setSucces(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    }
    
    else {
        setSucces(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    }

    else if (passwordValue.length <8 ) {
        setError(password, 'Password must be at least 8 character.')
    }
    
    else {
        setSucces(password);
    }
}

