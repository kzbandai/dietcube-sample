<?php

namespace SampleProject\Controller;

use Dietcube\Controller;

class HelloController extends Controller
{
    public function index()
    {
//        $hello_service = $this->get('service.hello');

        return $this->render('hello/hello_world', [
            'message' => 'Hello, World !',
        ]);
    }
}
