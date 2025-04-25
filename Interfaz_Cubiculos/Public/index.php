//punto de entrada (router)
<?php
// Iniciar sesión
session_start();

// Autocargar clases (opcional) - para proyectos pequeños
function autoload($clase) {
    if (file_exists('controllers/' . $clase . '.php')) {
        require_once 'controllers/' . $clase . '.php';
    } elseif (file_exists('models/' . $clase . '.php')) {
        require_once 'models/' . $clase . '.php';
    }
}
spl_autoload_register('autoload');

// Incluir el enrutador
require_once 'routes/web.php';
