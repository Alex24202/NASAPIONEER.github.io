<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exoplanet Quiz</title>
    <link rel="stylesheet" href="estiloPR.css">
</head>
<body>

    <h1>Exoplanet Quiz</h1>

 
    <div class="card" id="user-name">
        <h2>Enter your name </h2>
        <input type="text" id="name" placeholder="Your name here">
    </div>

    <div class="container">
 
        <div class="card" id="pregunta1">
            <h2>Mission 1</h2>
            <p>1) Do you know which of them is an exoplanet?</p>
            <label><input type="radio" name="pregunta1" value="a"> a) Proxima Centauri</label><br>
            <label><input type="radio" name="pregunta1" value="b"> b) K2-35</label><br>
            <label><input type="radio" name="pregunta1" value="c"> c) TRAPPIST-1e</label><br>
        </div>


        <div class="card" id="pregunta2">
            <h2>Mission 2</h2>
            <p>2) What is the "habitable zone" or "Goldilocks zone" around a star?</p>
            <label><input type="radio" name="pregunta2" value="a"> a) A region where planets are too close to the star, making them too hot for life.</label><br>
            <label><input type="radio" name="pregunta2" value="b"> b) The area around a star where the conditions are just right for liquid water to exist.</label><br>
            <label><input type="radio" name="pregunta2" value="c"> c) A zone where all planets have abundant oxygen and support human life.</label><br>
        </div>

        <div class="card" id="pregunta3">
            <h2>Mission 3</h2>
            <p>3) Do you like Astronomy?</p>
            <label><input type="radio" name="pregunta3" value="yes"> Yes</label><br>
            <label><input type="radio" name="pregunta3" value="no"> No</label><br>
        </div>

        <div class="card" id="pregunta4">
            <h2>Mission 4</h2>
            <p>4) What are the conditions for life in an exoplanet?</p>
            <label><input type="radio" name="pregunta4" value="a"> a) It needs to be in the habitable zone. Besides, liquid water is necessary for the biological process.</label><br>
            <label><input type="radio" name="pregunta4" value="b"> b) The exoplanet must have an atmosphere composed primarily of helium and hydrogen to support life.</label><br>
            <label><input type="radio" name="pregunta4" value="c"> c) The planet should be as far as possible from its star to avoid overheating and support liquid water.</label><br>
        </div>

        <div class="card" id="pregunta5">
            <h2>Mission 5</h2>
            <p>5) What type of star orbits Proxima Centauri b?</p>
            <label><input type="radio" name="pregunta5" value="a"> a) A white dwarf</label><br>
            <label><input type="radio" name="pregunta5" value="b"> b) A red dwarf</label><br>
            <label><input type="radio" name="pregunta5" value="c"> c) A red giant</label><br>
        </div>

        <div class="card" id="pregunta6">
            <h2>Mission 6</h2>
            <p>6)How long does it take Proxima Centauri b to complete one orbit around its star?</p>
            <label><input type="radio" name="pregunta6" value="a"> a) 11.2 days</label><br>
            <label><input type="radio" name="pregunta6" value="b"> b) 365 days</label><br>
            <label><input type="radio" name="pregunta6" value="c"> c) 24 hours</label><br>
        </div>

        <div class="card" id="pregunta7">
            <h2>Mission 7</h2>
            <p>7) What is the closest exoplanet to Earth?</p>
            <label><input type="radio" name="pregunta7" value="a"> a) Star of Bernard b</label><br>
            <label><input type="radio" name="pregunta7" value="b"> b) Proxima Centauri b</label><br>
            <label><input type="radio" name="pregunta7" value="c"> c) Epsilon Eridani b</label><br>
            <label><input type="radio" name="pregunta7" value="d"> d) Ross 128 b</label><br>
        </div>

        <div class="card" id="pregunta8">
            <h2>Mission 8</h2>
            <p>8) What are the methods used to detect exoplanets?</p>
            <label><input type="radio" name="pregunta8" value="a"> a) Direct Imaging</label><br>
            <label><input type="radio" name="pregunta8" value="b"> b) Radial Velocity</label><br>
            <label><input type="radio" name="pregunta8" value="c"> c) Transit Method</label><br>
            <label><input type="radio" name="pregunta8" value="d"> d) All of the above</label><br>
        </div>

    </div>

    <button onclick="calificar()">Submit Quiz</button>


    <div class="card" id="result" style="display: none;">
        
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

        <p id="prize"></p> 
    </div>


   




    </div>

    <script>
        function calificar() {
            var nombre = document.getElementById('name').value;
            if (!nombre) {
                alert('Please enter your name before submitting the quiz.');
                return;
            }

            var correctAnswers = 0;
            

            if (document.querySelector('input[name="pregunta1"]:checked')?.value === 'c') correctAnswers++;
            if (document.querySelector('input[name="pregunta2"]:checked')?.value === 'b') correctAnswers++;
            if (document.querySelector('input[name="pregunta3"]:checked')?.value === 'yes') correctAnswers++;
            if (document.querySelector('input[name="pregunta4"]:checked')?.value === 'a') correctAnswers++;
            if (document.querySelector('input[name="pregunta5"]:checked')?.value === 'b') correctAnswers++;
            if (document.querySelector('input[name="pregunta6"]:checked')?.value === 'a') correctAnswers++;
            if (document.querySelector('input[name="pregunta7"]:checked')?.value === 'b') correctAnswers++;
            if (document.querySelector('input[name="pregunta8"]:checked')?.value === 'd') correctAnswers++;


            document.getElementById('result-message').innerText = `Thank you, ${nombre}! You got ${correctAnswers} correct answers.`;
            document.getElementById('result').style.display = 'block';

            if (correctAnswers === 6 ) {
                document.getElementById('prize').innerText = "Congratulations! You've won a special prize! 🎉";

            } else {
                document.getElementById('prize').innerText = "Keep trying to get all the answers!";
            }
        }
    </script>
</body>
</html>

