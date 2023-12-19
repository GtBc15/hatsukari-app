<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Message extends Component
{
    //編集部分
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    //編集不要
    public function render()
    {
        return view('components.message');
    }
}
