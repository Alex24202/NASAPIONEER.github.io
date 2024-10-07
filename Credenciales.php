<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credencial del Usuario</title>
    <link rel="stylesheet" href="credenciales.css">

</head>
<body>
    <h1>Generar Credencial</h1>
    <div class="card-container">
        <!-- Contenedor para el nombre del usuario -->
        <div class="user-name" id="userName">Nombre Usuario</div>

        <!-- Contenedor para la foto -->
        <div class="photo-container" id="photoContainer">
            <!-- La imagen cargada por el usuario aparecerá aquí -->
        </div>

        <!-- SVG de la credencial -->
        <img src="9.svg" alt="Credencial" style="width: 100%; height: auto;">
    </div>

    <!-- Campo para ingresar el nombre -->
    <input type="text" id="nameInput" placeholder="Escribe tu nombre">
    <button onclick="updateName()">Actualizar Nombre</button>

    <!-- Campo para subir la foto -->
    <input type="file" id="photoInput" accept="image/*">
    <button onclick="uploadPhoto()">Subir Foto</button>

    <script>
        // Función para actualizar el nombre
        function updateName() {
            const nameInput = document.getElementById('nameInput').value;
            const name = document.getElementById('userName');
            name.textContent = nameInput;
        }

        // Función para cargar la foto
        function uploadPhoto() {
            const fileInput = document.getElementById('photoInput');
            const photoContainer = document.getElementById('photoContainer');

            const file = fileInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    photoContainer.innerHTML = '';
                    photoContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>