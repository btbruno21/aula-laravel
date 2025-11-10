@extends('layout')
@section('content')
@if(session()->has('message'))
    {{session()->get('message')}}
@endif
@if($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('action.destroy',$action->id)}}" method="POST">
@csrf
@method('DELETE')
    <legend>Monstrando a Ação</legend>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Titulo</label>
        <input type="text" id="disableTextInput" name="title" class="form-control" value="{{$action->title}}" readonly>
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Descrição</label>
        <input type="text" id="disableTextInput" name="description" class="form-control" value="{{$action->description}}" readonly>
    </div>
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Categoria</label>
        <input type="text" id="disableTextInput" name="category" class="form-control" value="{{$category_id->name}}" readonly>
    </div>
     
     <div class="mb-3">
        <label for="disableTextInput" class="form-label">Pontos</label>
        <input type="text" id="disableTextInput" name="points" class="form-control" value="{{$action->points}}" readonly>
    </div>
   
        
    
    <button type="submit" class="btn btn-danger">Deletar</button>
   
    </form>
    @endsection