<?php

// echo "tekstas";

header("Location: index.php"); 
if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    echo "sveikas atvykes admin". ($_COOKIE['prisijungti']); 
} else {
    echo "Labas"; 
}


?>