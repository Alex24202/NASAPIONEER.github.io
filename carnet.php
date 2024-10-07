<?php
// Asegurarse de que la biblioteca GD está habilitada en el servidor
if (!extension_loaded('gd')) {
    die("GD Library is not available");
}

// Recoger el texto del formulario
$user_text = isset($_POST['user_text']) ? $_POST['user_text'] : '';

// Ruta de la imagen base (asegúrate de tener esta imagen en tu servidor)
$image_path = 'base_image.jpg';

// Crear una imagen desde el archivo existente
$image = imagecreatefromjpeg($image_path);

// Definir el color del texto (en este caso, blanco)
$white = imagecolorallocate($image, 255, 255, 255);

// Definir la fuente (si usas una fuente TrueType, asegúrate de tener la ruta correcta)
$font_path = 'arial.ttf';  // Cambia esta ruta por la de tu fuente TTF
$font_size = 20;

// Obtener las dimensiones de la imagen
$image_width = imagesx($image);
$image_height = imagesy($image);

// Calcular la posición del texto para centrarlo
$text_box = imagettfbbox($font_size, 0, $font_path, $user_text);
$text_width = $text_box[2] - $text_box[0];
$text_height = $text_box[7] - $text_box[1];
$x = ($image_width - $text_width) / 2;
$y = ($image_height - $text_height) / 2;

// Agregar el texto a la imagen
imagettftext($image, $font_size, 0, $x, $y, $white, $font_path, $user_text);

// Enviar la imagen generada al navegador
header('Content-Type: image/jpeg');
imagejpeg($image);

// Limpiar memoria
imagedestroy($image);
?>
