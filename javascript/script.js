//Contact form submission handling

document.getElementById('contact').addEventListener('submit', sendForm);
var responseMessage = document.getElementById('response-message');




function sendForm(event) {
    
    event.preventDefault();

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var params = "name="+name+"&email="+email+"&phone="+phone+"&subject="+subject+"&message="+message;

    var xhr = new XMLHttpRequest();

    xhr.open('POST', 'form-processing.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onprogress = function() {
        responseParagraph.innerHTML = "Sending...";
    }

    xhr.onload = function() {
        if(this.status == 200) {
            responseMessage.innerHTML = this.responseText;
            document.getElementById('contact').reset();
        }
        
    }

    xhr.send(params);
    
}





