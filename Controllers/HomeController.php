<?php
    namespace Controllers;

    use \Core\Controller;
    use \Models\Example;

    class HomeController extends Controller 
    {
        public function index() 
        {

            $data = array(
                'nome' => 'nome teste',
                'email' => 'starcraft@email.com'
            );

            $example = new Example();
            $teste =  $example->create($data);
            echo $teste;
            // $this->loadTemplate("home", $data);

        }

        public function dota() 
        {

            echo "DOTA";

        }
    }
?>