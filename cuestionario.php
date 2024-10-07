<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MISIONES - Cuestionario Exoplanetas</title>
    <link rel="stylesheet" href="estilo-cuestionario.css">
</head>
<body>

    <div class="contenedor">
        <h1>Welcome to the missions</h1>
        <p>Get ready to improve your knowledge! Complete the missions and rise in rank.</p>
        <p>If you do not visit the 3D representation now is the moment, <a href="https://eyes.nasa.gov/apps/exo/#/spacecraft/sc_kepler_space_telescope">click here</a></p>

        <!-- Nombre del usuario -->
        <div class="card active" id="nombreCard">
            <h2>Input your name to start:</h2>
            <input type="text" id="nombre" placeholder="Escribe tu nombre" required>
            <button class="submit-btn" id="startQuizBtn">Start Quiz</button>
        </div>

        <!-- Preguntas del cuestionario -->
        <form id="formCuestionario" style="display:none;">
            <div class="cards-container">
                <!-- Pregunta 1 -->
                <div class="card" id="pregunta1">
                    <h2>Mission 1</h2>
                    <p>1) Do you know which of them is an exoplanet?</p>
                    <label><input type="radio" name="pregunta1" value="a"> a) Proxima Centauri</label><br>
                    <label><input type="radio" name="pregunta1" value="b"> b) K2-35</label><br>
                    <label><input type="radio" name="pregunta1" value="c"> c) TRAPPIST-1e</label><br>
                </div>

                <!-- Pregunta 2 -->
                <div class="card" id="pregunta2" style="display:none;">
                    <h2>Mission 2</h2>
                    <p>2) What is the "habitable zone" or "Goldilocks zone" around a star?</p>
                    <label><input type="radio" name="pregunta2" value="a"> a) A region where planets are too close to the star, making them too hot for life.</label><br>
                    <label><input type="radio" name="pregunta2" value="b"> b) The area around a star where the conditions are just right for liquid water to exist.</label><br>
                    <label><input type="radio" name="pregunta2" value="c"> c) A zone where all planets have abundant oxygen and support human life.</label><br>
                </div>

                 <!-- Pregunta 3 -->
                 <div class="card">
                    <h2>Mission 3</h2>
                    <p>3) Do you like Astronomy? </p>
                    <label><input type="radio" name="pregunta3" value="si" required> Yes</label><br>
                    <label><input type="radio" name="pregunta3" value="no"> No</label><br>
                </div>

                <!-- Pregunta 4 -->
                <div class="card">
                    <h2>Mission 4</h2>
                    <p>4) What are the conditions for life in an exoplanet? </p>
                    <label><input type="radio" name="pregunta4" value="a" required> a) It needs to be in the habitable zone. Besides, liquid water is necessary for the biological process. </label><br>
                    <label><input type="radio" name="pregunta4" value="b"> b) The exoplanet must have an atmosphere composed primarily of helium and hydrogen to support 
                    life. </label><br>
                    <label><input type="radio" name="pregunta4" value="c"> c) The planet should be as far as possible from its star to avoid overheating and support liquid water.</label><br>
                </div>

                <!-- Pregunta 5 -->
                <div class="card">
                    <h2>Mission 5</h2>
                    <p>5) This will be a free question. What is the most interesting thing about exoplanets for you? </p>
                    <textarea name="pregunta5" rows="4" placeholder="Whirte your answer here..." required></textarea>
                </div>

                <!-- Pregunta 6 -->
                <div class="card">
                    <h2>Mission 6</h2>
                    <p>6) What type of star orbits Proxima Centauri b? </p>
                    <label><input type="radio" name="pregunta6a" value="a" required> a) A white dwarf </label><br>
                    <label><input type="radio" name="pregunta6a" value="b"> b)  A red dwarf </label><br>
                    <label><input type="radio" name="pregunta6a" value="c"> c) A red giant </label><br>
                </div>
                <div class="card">
                    <h2>Mission 7</h2>
                    <p>How long does it take Proxima Centauri b to complete one orbit around its star? </p>
                    <label><input type="radio" name="pregunta6b" value="a" required> a) 11.2 days</label><br>
                    <label><input type="radio" name="pregunta6b" value="b"> b) 365 days</label><br>
                    <label><input type="radio" name="pregunta6b" value="c"> c) 24 hours</label><br>
                </div>
                <!-- Pregunta 7 -->
                <div class="card">
                    <h2>Mission 8</h2>
                    <p>7) Why is the “habitable zone” important in the search for exoplanets?</p>
                    <textarea name="pregunta7" rows="4" placeholder="Write your answer here..." required></textarea>
                </div>

                <!-- Pregunta 8 -->
                <div class="card">
                    <h2>Mission 9</h2>
                    <p>8) What is the closest exoplanet to Earth? </p>
                    <label><input type="radio" name="pregunta8" value="a" required> a) Star of Bernard b</label><br>
                    <label><input type="radio" name="pregunta8" value="b"> b) Proxima Centauri b</label><br>
                    <label><input type="radio" name="pregunta8" value="c"> c) Epsilon Eridani b</label><br>
                    <label><input type="radio" name="pregunta8" value="d"> d) Ross 128 b</label><br>
                </div>

                <!-- Pregunta 9 -->
                <div class="card">
                    <h2>Mission 10</h2>
                    <p>9) Which mission or telescope has been most successful in detecting exoplanets?</p>
                    <textarea name="pregunta9" rows="4" placeholder="Write your answer here..." required></textarea>
                </div>


                <!-- Pregunta 10 -->
                <div class="card" id="pregunta10">
                    <h2>Mission 11</h2>
                    <p>10) Name 3 characteristics that make an exoplanet similar to Earth:</p>
                    <textarea name="pregunta10" rows="4" placeholder="Write your answer here..." required></textarea>
                </div>
            </div>

                <!-- Botón para enviar -->
            <button type="submit" class="submit-btn" id="submitQuizBtn" style="display:none;">Submit Quiz</button>
            
        </form>

        <!-- Resultado final -->
        <div id="resultadoFinal" style="display: none;">
            <h2>Congratulations <span id="userNameDisplay"></span>!</h2>
            <p>You have completed the missions successfully!</p>
            <img id="resultadoImagen" src="credenciales.php" alt="Resultado">
        </div>

        <!-- Botón para volver a la página principal -->
        <div id="homeLink" style="display: none;">
            <a href="NASA.html">HOME</a>
        </div>
    </div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const startQuizBtn = document.getElementById("startQuizBtn");
    const nombreInput = document.getElementById("nombre");
    const nombreCard = document.getElementById("nombreCard");
    const formCuestionario = document.getElementById("formCuestionario");
    const submitQuizBtn = document.getElementById("submitQuizBtn");
    const cards = document.querySelectorAll(".card");
    const resultadoFinal = document.getElementById("resultadoFinal");
    const userNameDisplay = document.getElementById("userNameDisplay");
    const homeLink = document.getElementById("homeLink");
    let currentCardIndex = 0;

    // Función para mostrar una tarjeta específica
    function mostrarTarjeta(index) {
        // Ocultar todas las tarjetas
        cards.forEach((card) => {
            card.style.display = 'none';
        });

        // Mostrar la tarjeta actual si existe
        if (cards[index]) {
            cards[index].style.display = 'block';
        }

        // Mostrar botón de submit si es la última tarjeta
        if (index === cards.length - 1) {
            submitQuizBtn.style.display = 'block';
        } else {
            submitQuizBtn.style.display = 'none';
        }
    }

    // Función para manejar el inicio del quiz
    startQuizBtn.addEventListener("click", function () {
        const nombreUsuario = nombreInput.value.trim();

        // Validar si el usuario ingresó su nombre
        if (!nombreUsuario) {
            alert("Por favor, ingresa tu nombre para comenzar el cuestionario.");
            return;
        }

        // Ocultar la tarjeta del nombre y mostrar el formulario de preguntas
        nombreCard.style.display = "none";
        formCuestionario.style.display = "block";

        // Mostrar la primera pregunta
        mostrarTarjeta(currentCardIndex);
    });

    // Evento para el envío del quiz
    formCuestionario.addEventListener("submit", function (event) {
        event.preventDefault();

        const nombreUsuario = nombreInput.value.trim();
        userNameDisplay.textContent = nombreUsuario;

        // Ocultar las preguntas y mostrar el resultado
        formCuestionario.style.display = "none";
        resultadoFinal.style.display = "block";
        homeLink.style.display = "block";
    });

    // Función para manejar el avance a la siguiente tarjeta
    submitQuizBtn.addEventListener("click", function () {
        if (currentCardIndex < cards.length - 1) {
            currentCardIndex++;
            mostrarTarjeta(currentCardIndex);
        }
    });

});
</script>

</body>
</html>
