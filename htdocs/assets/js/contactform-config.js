//--- controls contact form submission

const contactForm = document.getElementById("contactForm");
const nameInput = document.getElementById("contactNameInput");
const emailInput = document.getElementById("contactEmailInput");
const messageInput = document.getElementById("contactMessageInput");
const recaptcha = document.getElementById("recaptcha");
const sendBtn = document.getElementById("contactSendButton");

$(document).ready(function() {
    $(contactForm).submit(function(event) {
        event.preventDefault();

        let name = nameInput.value;
        let email = emailInput.value;
        let message = messageInput.value;
        let recaptchaValue = grecaptcha.getResponse();

        if(name !== "" && email !== "" && message !== "") {
            if(recaptchaValue !== "") {

                let formData = {
                    name: name,
                    email: email,
                    message: message,
                    recaptcha: recaptchaValue
                };

                $(sendBtn).html("Sending....");
                $.ajax({
                    url: 'core/handle_contact.php',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
        
                    success: function(response) {
                        if (response.alert && response.alertType) {
                            console.log(response.alert);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    },
                    complete: function() {
                        $(sendBtn).html("SEND <i class='fa-regular fa-paper-plane ml-2'></i>");
                        console.log("completed");
                    }
                });
            }
            else {
                show_alert("Please check-in reCaptcha", "info");
            }
        }
        else {
            show_alert("Please fill-up all fields", "info");
        }
    });
});

function show_alert(alertMessage, alertType = "default") {
    if(alertType === "success"){
        alertMessage = "<div class='p-3 w-full bg-[rgba(22,_163,_74,_0.2)] border-l-[7px] border-[rgb(22,_163,_74)] rounded mt-1 text-sm'><i class='fa-solid fa-circle-check text-[rgb(22,_163,_74)] mr-2 text-base'></i>" + alertMessage + "</div>"
    }
    else if (alertType === "info") {
        alertMessage = "<div class='p-3 w-full bg-[rgba(249,_115,_22,_0.2)] border-l-[7px] border-[rgb(249,_115,_22)] rounded mt-1 text-sm'><i class='fa-solid fa-triangle-exclamation text-[rgb(249,_115,_22)] mr-2 text-base'></i>" + alertMessage + "</div>"
    }
    else if (alertType === "danger") {
        alertMessage = "<div class='p-3 w-full bg-[rgba(255,_29,_72,_0.2)] border-l-[7px] border-[rgb(255,_29,_72)] rounded mt-1 text-sm'><i class='fa-solid fa-circle-exclamation text-[rgb(255,_29,_72)] mr-2 text-base'></i>" + alertMessage + "</div>"
    }

    $('#contactAlert').html(alertMessage).fadeIn();

    setTimeout(function() {
        $("#contactAlert").fadeOut();
    }, 9000);
}