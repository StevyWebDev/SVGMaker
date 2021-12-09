<?php

namespace Controller;

use http\Client\Response;
use Model\Circle;
use Model\Point;
use Model\Rectangle;
use Model\Size;
use Model\SVG;

class Home extends Controller
{
    public function index() {

        return $this->render('home/index', [
            'title' => 'Accueil',
        ]);
    }

    public function createSvg() {
        if(
            !isset($_POST['shapeName']) &&
            !isset($_POST['x']) &&
            !isset($_POST['y']) &&
            !isset($_POST['shapeWidth']) &&
            !isset($_POST['shapeHeight']) &&
            !isset($_POST['fill']) &&
            !isset($_POST['stroke']) &&
            !isset($_POST['strokeWidth']) &&
            empty($_POST['shapeName']) &&
            empty($_POST['x']) &&
            empty($_POST['y']) &&
            empty($_POST['shapeWidth']) &&
            empty($_POST['shapeHeight']) &&
            empty($_POST['fill']) &&
            empty($_POST['stroke']) &&
            empty($_POST['strokeWidth'])
        ) {
            return $this->redirectToRoot();
        }

        $shapeName = htmlentities($_POST['shapeName']);
        $x = htmlentities($_POST['x']);
        $y = htmlentities($_POST['y']);
        $shapeWidth = htmlentities($_POST['shapeWidth']);
        $shapeHeight = htmlentities($_POST['shapeHeight']);
        $fill = htmlentities($_POST['fill']);
        $stroke = htmlentities($_POST['stroke']);
        $strokeWidth = htmlentities($_POST['strokeWidth']);

        $rec = new Rectangle();
        $rec->setFill($fill);
        $rec->setStroke($stroke);
        $rec->setStrokeWidth($strokeWidth);

        $size = new Size();
        $size->setHeight($shapeHeight);
        $size->setWidth($shapeWidth);

        $point = new Point();
        $point->setX($x);
        $point->setY($y);

        $arrayShape = [];

        array_push($arrayShape, [
            'nameShape' => $rec->getShape(),
            'fill' => $rec->getFill(),
            'stroke' => $rec->getStroke(),
            'strokeWidth' => $rec->getStrokeWidth(),
            'height' => $size->getHeight(),
            'width' => $size->getWidth(),
            'x' => $point->getX(),
            'y' => $point->getY()
        ]);

        $svg = new SVG($arrayShape);

        return $this->render('home/showSvg', [
            'listSvg' => $svg->getShape()
        ]);
    }
}