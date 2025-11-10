@extends('layout')
@section('content')
@if(session()->has('message'))
    {{session()->get('message')}}
@endif
<form action="{{--route('useraction.destroy')--}}" method="POST">
@csrf
    <legend>Adicionar Ação do usuário</legend>
    <div class="mb-3">
        <label for="user">Escolha um usuário:</label>
        <input type="text" class="form-select" aria-label="Default select example" name="user" placeholder="{{$userActions->user_id}}">
    </div>
     <div class="mb-3">
    <label for="action">Escolha uma Ação:</label>
        <input type="text" class="form-select" aria-label="Default select example" name="action" placeholder="{{$userActions->action_id}}">
    </div>
     <!-- <div class="mb-3">
        <label for="disableTextInput" class="form-label">Quantidade</label>
        <input type="number" id="disableTextInput" name="quantity" class="form-control" value="">
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Data</label>
        <input type="date" id="disableTextInput" name="date" class="form-control" value="">
    </div> -->
   
        
    
    <button type="submit" class="btn btn-primary">Salvar</button>
   
    </form>
    @endsection