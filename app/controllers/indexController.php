<?php

use Phalcon\Mvc\Controller;
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;

class IndexController extends Controller {

    public function indexAction()
    {
        $form = new Form();

        $form->add(new Text("name", [
                "maxlength" => 30,
                "placeholder" => "Type your name"
            ])
        );

        $form->add(
            new Text(
                "telephone"
            )
        );

        $form->add(
            new Select(
                "telephoneType",
                [
                    "H" => "Home",
                    "C" => "Cell",
                ]
            )
        );

        $this->view->form = $form;
    }
}