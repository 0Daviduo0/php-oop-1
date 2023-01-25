<?php

class Movie {

    public $length;
    public $title;
    public $releaseYear;
    public $genre;
    public $description;
    public $streamingPlatform;
    public $originaLanguage;

    public function __construct($length, $title, $releaseYear, $genre, $description, $streamingPlatform, $originaLanguage){

        $this->length = $length;
        $this->title = $title;
        $this->releaseYear = $releaseYear;
        $this->genre = $genre;
        $this->description = $description;
        $this->streamingPlatform = $streamingPlatform;
        $this->originaLanguage = $originaLanguage;

    }

        public function completeTitleInfo() {

            return $this->title . " (" . $this->releaseYear . ")" . " - " . $this->genre;
    
        }
    
        public function lengthAndLang() {
    
            return $this->length . " · "  . $this->originaLanguage . " · " . $this->streamingPlatform;
    
        }
    
        public function description() {
    
            return $this->description;
    
        }

   
}

$movie1 = new Movie(
    "3h 10m",
    "Avatar - La via dell'acqua",
    "2022",
    "Action",
    "Jake Sully vive con la sua nuova famiglia sul pianeta Pandora. Ma quando una 
    vecchia, familiare minaccia torna ad affacciarsi per terminare quel che era 
    stato iniziato un tempo, Jake dovrà nuovamente collaborare con Meytiri e 
    l'esercito dei Na'vi per proteggere il loro incredibile pianeta. Jake e Naytiri 
    saranno pertanto costretti a lasciare la loro casa ed esplorare varie regioni di Pandora.",
    "Cinema",
    "English"
);

$movie2 = new Movie(
    "1h 40m",
    "Il gatto con gli stivali 2 - L'ultimo desiderio",
    "2022",
    "Animation",
    "Il Gatto con gli Stivali scopre che la sua passione per l'avventura è stata pagata a 
    caro prezzo: ben otto delle sue nove vite sono andate bruciate. Dovrà così 
    intraprendere una nuova epica avventura alla ricerca del mitico Ultimo Desiderio, 
    che gli permetterà di recuperare le sue nove vite.",
    "Cinema",
    "English"
);

echo "Movies";
echo "<br><br>";
echo $movie1 -> completeTitleInfo() ;
echo "<br>";
echo $movie1 -> lengthAndLang();
echo "<br>";
echo $movie1 -> description();
echo "<br><br>";
echo "-------------------------------------";
echo "<br><br>";
echo $movie2 -> completeTitleInfo();
echo "<br>";
echo $movie2 -> lengthAndLang();
echo "<br>";
echo $movie2 -> description();
echo "<br><br>";






