function showContent(option) {
    //var contentDiv = document.getElementById('content');
    var titleDiv = document.getElementById('title');

    // Determinar el título según la opción seleccionada
    var title;
    switch(option) {
        case 'home':
            title = 'Home';
            break;
        case 'tractoristas':
            title = 'Tractoristas';
            break;
        case 'tractores':
            title = 'Tractores';
            break;
        case 'programacion':
            title = 'Programación';
            break;
        case 'resumen':
            title = 'Resumen';
            break;
        default:
            title = 'BIENVENIDO'
    }
    // Actualizar el título centrado
    titleDiv.innerHTML = '<h1>' + title + '</h1>';
}

function confirmLogout() {
    if (confirm("¿Estás seguro de que quieres cerrar sesión?")) {
        window.location.href = "index.php";
    }
}


const registroForm = document.getElementById('registroForm');

registroForm.addEventListener('submit', function(event){
    event.preventDefault();
    window.location.href='index.php';
});

document.getElementById('registroButton').addEventListener('click', function(event){
    event.preventDefault();

    // Mostrar cuadro de diálogo de confirmación
    if (confirm('¿Estás seguro de que quieres registrar a este usuario?')) {
        // Si el usuario hace clic en "Aceptar", enviar el formulario
        registroForm.submit();
    } else {
        // Si el usuario hace clic en "Cancelar", no hacer nada
    }
});
