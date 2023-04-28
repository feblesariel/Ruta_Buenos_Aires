window.addEventListener("load", function () {

    let form = document.querySelector('#contactForm');
    let formName = document.querySelector('#name');
    let formEmail = document.querySelector('#email');
    let formPhone = document.querySelector('#phone');
    let formMessage = document.querySelector('#message');
    let errorMessege = document.querySelector('#errorMessege');

    form.addEventListener("submit", function (e) {

        if (formName.value == "" || formEmail.value == "" || formPhone.value == "" || formMessage.value == ""){
            e.preventDefault();
            errorMessege.innerHTML = "*Você deve preencher todos os campos.";
        }
    });
})
