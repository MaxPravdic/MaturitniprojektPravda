<?php
session_start(); // Spustí session

// Zruší všechny session proměnné
session_unset(); 

// Zruší session
session_destroy(); 

// Přesměruje uživatele na stránku rezervace
header("Location: rezervace.php"); 
exit();
?>
