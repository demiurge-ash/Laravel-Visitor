<?php

namespace Tests\TestClasses\XMLExample;

use robertogallea\LaravelVisitor\Models\Visitor;

class XMLVisitor extends Visitor
{
    private $xml = '';

    public function visitBook(Book $book)
    {
        $this->xml .= '<book title="' . $book->getTitle() . '" ' .
            'author="' . $book->getAuthor() . '" ' .
            'format="' . $book->getFormat() . '" ' .
            'pages="' . $book->getPages() . '"></book>' . PHP_EOL;
    }

    public function VisitDVD(DVD $dvd)
    {
        $this->xml .= '<dvd title="' . $dvd->getTitle() . '" ' .
            'format="' . $dvd->getFormat() . '" ' .
            'duration="' . $dvd->getHour() . ':' . $dvd->getMinutes() . '"></dvd>' . PHP_EOL;
    }

    public function visitMagazine(Magazine $magazine)
    {
        $this->xml .= '<magazine title="' . $magazine->getTitle() . '" ' .
            'issue="' . $magazine->getMonth() . ' ' . $magazine->getYear() . '"></magazine>' . PHP_EOL;
    }

    public function getResult()
    {
        return $this->xml;
    }
}