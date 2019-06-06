function validate(){  
    const name = document.querySelector('#name').value;
    const surname = document.querySelector('#surname').value;
    const email = document.querySelector('#email').value;
    const emailCheck = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const text = document.querySelector('#text').value;
    let test = emailCheck.test(email);

    if(name === '' || surname === '' || text === '' || test === false || email === ''){
        alert("Niepoprawnie wprowadzone dane!");
        event.preventDefault();
        event.stopPropagation();
    } else {
        alert("Formularz został wysłany!");
    }
}

const button = document.querySelector('#submit');
if(button){
    button.onclick = validate;
}
