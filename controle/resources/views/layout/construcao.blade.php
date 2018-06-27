@extends('layout.layout')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
  <div class="container construcao">
    <h1 class="display-3">Em Construção</h1>
    <img src="{{URL::asset('resources/assets/img/')}}/em-construcao.png" alt=""/>
    <p>A funcionalidade ainda não está disponível.</p>
    <p>Assim que possível ela será disponibilizada.</p>
  </div>
</div>
@endsection