;document.readyState = function(){
    var rules = {
            'firstname': /[a-zA-Z]{4,}/ig,
            'lastname': /[a-zA-Z]{4,}/ig,
            'email': /.+@.+\..+/i,
            'password': /[a-zA-Z0-9]{6,}/ig
        },
        message = {
            'firstname': 'Не менее 4 символов',
            'lastname': 'Не менее 4 символов',
            'email':'Введите корректный email',
            'password':'Не менее 6 символов',
            'passwordConfirm':'Пароли не совпадают'
        };
    var formBtn = document.querySelector("form button"),
        formInputs = document.querySelectorAll("form input"),
        errorSpans = document.querySelectorAll(".error-msg");

    formBtn.onclick = function(ev) {
        var formValid = [],
            messages = {};

        formInputs.forEach(function(input){
            let regEx = new RegExp (rules[input.name]),
                valid = false,
                fieldValue = input.value,
                fieldNotEmpty = fieldValue != '' && typeof fieldValue != 'undefined';

            input.classList.remove('error');
            errorSpans.forEach(function(span){
                span.innerText = '';
            });

            if (input.name != 'passwordConfirm') {
                valid = fieldNotEmpty ? regEx.test(fieldValue): false;
            } else {
                let confirm = document.querySelector("input[name='password']").value == document.querySelector("input[name='passwordConfirm']").value;
                valid = fieldNotEmpty ? confirm : false;
            }
            
            formValid.push(valid);
            if (!valid) {
                messages[input.name] = message[input.name];
            }
        });

        if (formValid.indexOf(false) != -1) {
            ev.preventDefault();
            Object.keys(messages).map(function(name){
                let input = document.querySelector("form input[name="+name+"]"),
                    errorMessage = input.nextElementSibling;
                input.classList.add('error');
                errorMessage.innerText = messages[name];
            });
        }
    };
}();