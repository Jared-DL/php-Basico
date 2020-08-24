<?php
Class Book{
    public $title;
    public $author;
    public $iReadIt;
    public $comentBeforeReading;
    public $comentAfterReading;
    protected $language ;

    public function __construct($title , $author , $language , $iReadIt , $comentBeforeReading , $comentAfterReading){
        $this->title=$title ;
        $this->author=$author ;
        $this->iReadIt=$iReadIt ;
        $this->language = $language ;
        $this->comentBeforeReading=$comentBeforeReading ;
        $this->comentAfterReading=$comentAfterReading ;
    }

    //estas funciones solamente sirven para llamar los valores, que son declaros como "Protected" puse de cada uno porsiacaso :v
    public function returnTitle(){
        return $this->title ;
    }
    public function returnAuthor(){
        return $this->author ;
    }
    public function returnIReadIt(){
        return $this->iReadIt ;
    }
    public function returnComentBeforeReading(){
        return $this->comentBeforeReading ;
    }
    public function returnComentAfterReading(){
        return $this->comentAfterReading ;
    }
    public function returnLanguage(){
        return $this->language ;
    }
}

