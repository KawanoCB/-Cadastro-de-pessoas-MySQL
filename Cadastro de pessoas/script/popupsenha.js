function autenticarsenhas() {
    // Create arrays of property names
    var aProps = document.getElementById('senha').value;
    var bProps = document.getElementById('senha2').value;

    // Verifica caso os campos estejam com menos de 3 caracteres
    if (document.getElementById("senha").value.length < 3) {
        //alert('Por favor, preencha a senha!');
        document.getElementById("senha").focus();
        //return false

        if (document.getElementById("senha2").value.length < 3) {
            alert('Por favor, preencha a senha!');
            document.getElementById("senha2").focus();
            //return false
            preventDefault();

        }
    }

    if (document.getElementById("senha").value != document.getElementById("senha2").value) {
        //return false
        alert("Senhas incorretas!");
        preventDefault();
    }

    // If number of properties is different,
    // objects are not equivalent
    if (aProps.length != bProps.length) {
        //return false;
        preventDefault();
        alert("Senhas incorretas!");

        for (var i = 0; i < aProps.length; i++) {
            var propName = aProps[i];

            // If values of same property are not equal,
            // objects are not equivalent
            if (a[propName] !== b[propName]) {
                //return false;
                preventDefault();
                alert("Senhas incorretas!");
            }
        }

    }

    // If we made it this far, objects
    // are considered equivalent
    //return true;
    //alert(senha.value);
    //alert(senha2.value);
    //alert("Senhas corretas!");
}
