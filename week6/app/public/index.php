<?php

	class Page {

	    private $page = null;
	    private $title;
	    private $year;
        private $copyright;
        
        public function get(){
	        echo $this->page;
	    }

	    public function setYear($year){
	        $this->year = $year;
	    }

	    public function setTitle($title){
	        $this->title = $title;
	    }

	    public function setCopyright($copyright){
	        $this->copyright = $copyright;
		}

	    private function addHeader(){
	        $this->page = $this->page . "<h1 > Title: $this->title </h1>";
	    }

        private function addFooter(){
	        $this->page = $this->page . "<br> <h2>Copyright by</h2> " . $this->copyright . " <br>";
	    }
	    public function addContent($content){
	        $this->addHeader();
	        $this->page = $this->page . $content. "<br>";
	        $this->addFooter();
	    }
	}

    $page = new Page();
    $page->setTitle("Welcome to this website");
	$page->setYear("2020");
	$page->setCopyright("ABCDEF");
	$page->addContent("PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                        PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                         PHP 7 is the latest stable release.<br>
                         PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                        PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                         PHP 7 is the latest stable release.<br>
                         PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                        PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                         PHP 7 is the latest stable release.<br>
                         PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
                        PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
                         PHP 7 is the latest stable release.<br>");
	$page->get();

?>

