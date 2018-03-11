<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});


Route::get('add/{a}/{b}', 'akashakram\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'akashakram\calculator\CalculatorController@subtract');