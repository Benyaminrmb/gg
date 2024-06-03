<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $result = Gemini::client(env())
        ->geminiPro()
        ->generateContent('Hello')->text();

}
);
