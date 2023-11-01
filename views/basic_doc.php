<?php

require_once("html_doc.php");

class BasicDoc extends HtmlDoc
{
    public $data;

    public function __construct($myData)
    {
        $this->data = $myData;
    }

    protected function showHeadContent()
    {
        $this->showTitle();
        $this->showCssLinks();
    }

    private function showTitle()
    {
        // echo van het element title
        echo '<title>Laura\'s website</title>';
    }
    private function showCssLinks()
    {
        echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/stylesheet.css">';
    }
    //========================================

    protected function showBodyContent()
    {
        $this->showHeader();
        $this->showMenu();
        $this->showContent($data);
        $this->showFooter();
    }

    private function showHeader()
    {
        echo '<h1 class="headers">';
        $this->showHeaderContent();
        echo '</h1>';
    }

    protected function showHeaderContent()
    {
        //deze functie ga ik 'overriden' in about en home. De code die hier komt wordt alleen uitgevoerd
        //als het in home en about niet goed gaat. Dit is de 'default.' 
        echo 'showheadercontent in basic_doc';
    }


    private function showMenu()
    {
        echo "<nav>";
        echo "<ul class='menu'>";
        foreach ($this->data['menu'] as $key => $page) {
            $this->showMenuItem($key, $page);
        }
        echo '</ul>' . PHP_EOL . '</nav>' . PHP_EOL;
    }

    private function showMenuItem($linkName, $buttonText)
    {
        echo '<li><a href="index.php?page=' . $linkName . '">' . $buttonText . '</a></li>';
    }


    protected function showContent($data)
    {
        //deze functie ga ik 'overriden' 
        //default neerzetten
        echo 'showcontent is basicdoc';
    }


    private function showFooter()
    {
        echo '<footer class="footers">
        <p>&copy; 2023 Laura Bokkers</p>
        </footer>';
    }
}