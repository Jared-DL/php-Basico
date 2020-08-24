<?php
include_once ('clases.php') ;
include_once ('variables.php') ;

echo "<h2> A continuación se ven los libritos que ya he leido <br /></h2>";
foreach ( $books as $key => $value) {
    if ( ( ($books[$key]->title != "")) && (($books[$key]->iReadIt == true)) ){
        echo "<h3>" . $books[$key]->title . "</h3>"  ;
        echo "<p>" . "Autor: " . $books[$key]->author . "</p>" ;
        echo "<p>" . "Opinión previa a leer el libro: " . $books[$key]->comentBeforeReading . "</p>"; 
        echo "<p>" . "Opinión despues de leer el libro: " . $books[$key]->comentAfterReading . "</p>" ;
        echo "<p>" . "Idioma del libro: " . $books[$key]->returnLanguage() . "</p>" ;
    }
}

echo "<h2>  A continuación se ven los libritos que quiero leer <br /></h2>";
foreach ( $books as $key => $value) {
    if ( ( ($books[$key]->title != "")) && (($books[$key]->iReadIt == false)) ){
        echo "<h3>" . $books[$key]->title . "</h3>"  ;
        echo "<p>" . "Autor: " . $books[$key]->author . "</p>" ;
        echo "<p>" . "Opinión previa a leer el libro: " . $books[$key]->comentBeforeReading . "</p>"; 
        echo "<p>" . "Opinión despues de leer el libro: " . $books[$key]->comentAfterReading . "</p>" ;
        echo "<p>" . "Idioma del libro: " . $books[$key]->returnLanguage() . "</p>" ;
    }
}