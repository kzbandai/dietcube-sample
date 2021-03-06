<?php

namespace SampleProject\Controller;

use Dietcube\Controller;
use SampleProject\Service\OmikujiService;

class HelloController extends Controller
{
    public function index()
    {
        /** @var OmikujiService $omikuji_service */
        $omikuji_service = $this->get('service.omikuji');
        $today = (new \DateTime())->format('d');

        return $this->render('hello/hello_world', [
            'message' => 'あなたの今日の運勢は' . $omikuji_service->getResult($today) . 'です。',
        ]);
    }

    public function birthday($month, $day)
    {
        /** @var OmikujiService $omikuji_service */
        $omikuji_service = $this->get('service.omikuji');

        return $this->render('hello/hello_world', [
            'message' => "あなたの誕生日、${month}月${day}日の運勢は" . $omikuji_service->getResult($month + $day) . 'です。',
        ]);
    }
}
