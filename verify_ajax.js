const form = {
    username: document.getElementById('username'),
    submit: document.getElementById('submit'),
    messages: document.getElementById('form-messages')
};

form.submit.addEventListener('click', () => {
    const request = new XMLHttpRequest();
    console.log(request);

    request.onload = () => {
        let responseObject = null;

        try {
            console.log(request.responseText);
            responseObject = JSON.parse(request.responseText);
        } 
        catch (e) {
            console.error('Could not parse JSON!');
            console.log(responseObject);
        }

        if (responseObject) {
            handleResponse(responseObject);
        }
    };

    const requestData = `username=${form.username.value}`;
    console.log(requestData);
    request.open('POST', 'info.php', true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(requestData);
});

function handleResponse (responseObject) {

    if (responseObject.ok) {
        form.messages.style.color = "#00cc00";
        form.messages.innerHTML = "Verified";
    } else {    
        form.messages.style.color = "#cc2900";
        form.messages.innerHTML = "Error";
    }
}