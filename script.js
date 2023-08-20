document.getElementById("userForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const age = document.getElementById("age").value;

    const userData = {
        name: name,
        age: age
    };

    fetch("http://localhost/gituno/register.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(userData)
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("message").textContent = "Usuario registrado: " + data.name + ", " + data.age + " años.";
    })
    .catch(error => {
        document.getElementById("message").textContent = "Error al registrar el usuario.";
    });
});
