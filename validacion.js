document.getElementById("loginForm").addEventListener("submit", function(event) {
    const user = document.getElementById("user").value;
    const password = document.getElementById("password").value;
    const edad = document.getElementById("edad").value;
    let errores = [];

    if (user === "") {
        errores.push("El campo de usuario es obligatorio.");
    }
    if (password === "") {
        errores.push("El campo de contraseña es obligatorio.");
    }
    if (edad === "") {
        errores.push("El campo de edad es obligatorio.");
    } else if (isNaN(edad)) {
        errores.push("La edad debe ser un número.");
    } else if (parseInt(edad) < 18) {
        errores.push("Debes ser mayor de edad (18 años o más).");
    }

    if (errores.length > 0) {
        alert(errores.join("\n"));
        event.preventDefault();
    }
});
