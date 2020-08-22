<?php
Class Book{
    public $title;
    public $author;
    public $iReadIt;
    public $comentBeforeReading;
    public $comentAfterReading;
    public $language ;

    public function __construct($title , $author , $language , $iReadIt , $comentBeforeReading , $comentAfterReading){
        $this->title=$title ;
        $this->author=$author ;
        $this->iReadIt=$iReadIt ;
        $this->language = $language ;
        $this->comentBeforeReading=$comentBeforeReading ;
        $this->comentAfterReading=$comentAfterReading ;
        
    }
}

