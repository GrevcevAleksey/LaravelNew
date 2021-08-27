@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam earum, 
        doloremque maxime minus, consequatur voluptatum corrupti 
        dolorum natus doloribus, numquam velit!
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam earum, 
        doloremque maxime minus, consequatur voluptatum corrupti 
        dolorum natus doloribus, numquam velit!
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione veniam earum, 
        doloremque maxime minus, consequatur voluptatum corrupti 
        dolorum natus doloribus, numquam velit!
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection