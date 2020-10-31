<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Route;
    use Sympfony\Component\HttpFoundation\Response;
    use Sensio\Bundle\FrameworkExtrBundle\Configuration\Method;

    class ArticleController {
        /**
         * @Route ("/")
         * @Method({"Get"})
        */
        public function index(){
            return new Response('<html><body>Hello</body><html>');
        }
    }