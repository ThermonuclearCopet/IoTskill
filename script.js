document.getElementById("register-button").addEventListener("click", function(event) {
    var name = document.getElementById("name").value;
    var nickname = document.getElementById("nickname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    console.log(name)

    fetch('register_user.php', {
        method: 'POST',
        body: JSON.stringify({ name: name, nickname: nickname, email: email, password: password }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);

    })
    .catch(error => console.error('Помилка:', error));
});
