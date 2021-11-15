function validation() {
    let form = document.getElementById("form_1");
    let email = document.getElementById("email").value;
    let text = document.getElementById("text");
    let checkbox = document.getElementById("MyCheckbox");
    const submitButton = document.getElementById("arrow");
    let pattern = new RegExp('[a-z0-9]+@[a-z]+\.[a-z]{2,3}');

    if (email.match(pattern)) { // Email has to match a certain pattern (this includes user@localhost for example (No TLD(top-level domain))
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "";
        submitButton.disabled = false;
            if (checkbox.checked === true) { // Checks if checkbox is checked
                form.classList.add("valid");
                form.classList.remove("invalid");
                text.innerHTML = "";
                submitButton.disabled = false;
            } else {
                form.classList.remove("valid");
                form.classList.add("invalid");
                text.innerHTML = "*please accept our terms of service.";
                text.style.color = "#6A707B";
                submitButton.disabled = true;
        }
    } else {
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "*please enter a valid email address.";
        text.style.color = "#6A707B";
        submitButton.disabled = true;
    }


}


document.addEventListener("DOMContentLoaded", function() {
    required();
}); // Listens for input on form from page load.

function required() { // Specifies that the form has to be filled out to submit
    let form = document.getElementById("form_1");
    let email = document.getElementById("email").value;
    let text = document.getElementById("text");
    const submitButton = document.getElementById("arrow");
    if(email == ""){
        form.classList.remove("valid");
        form.classList.add("invalid");
        text.innerHTML = "*email address is required.";
        text.style.color = "#6A707B";
        submitButton.disabled = true;
    }else {
        form.classList.add("valid");
        form.classList.remove("invalid");
        text.innerHTML = "";
        submitButton.disabled = false;
    }
}

function thankYou(){ // Hides forms and changes to thank you screen
    let form = document.getElementById("form_1");
    let line = document.getElementById("line");
    let socials = document.getElementById("socials");
    let rules = document.getElementById("rules");
    let heading = document.getElementById("heading_1");
    let sub_head = document.getElementById("subheading_1");
    const submitButton = document.getElementById("arrow");

    trophy.style.display = 'block';
    heading_1.innerHTML = "Thanks for subscribing!";
    sub_head.innerHTML = "You have successfully subscribed to our email listing.<br> Check your email for the discount code.";
    form.style.display = 'none';
    rules.style.display = 'none';
    line.style.marginTop = '539px';
    socials.style.top = '590px';
}
