@extends('layout')
@section('content')
@if(session()->has('message'))
{{session()->get('message')}}
@endif
<form action="{{route('useraction.destroy', $userActions->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <legend>Mostrar ação do usuário</legend>
    <div class="mb-3">
        <label for="user">Escolha um usuário:</label>
        <select class="form-select" aria-label="Default select example" name="user">
            <option value="{{$user_id->id}}">{{$user_id->name}}</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="action">Escolha uma Ação:</label>
        <select class="form-select" aria-label="Default select example" name="action">
            <option value="{{$action_id->id}}">{{$action_id->title}}</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Quantidade</label>
        <input type="number" id="disableTextInput" name="quantity" class="form-control" value="{{$userActions->quantity}}" readonly>
    </div>
    <div class="mb-3">
        <label for="disableTextInput" class="form-label">Data</label>
        <input type="text" id="disableTextInput" name="quantity" class="form-control" value="{{ \Carbon\Carbon::parse($userActions->date)->format('d/m/Y') }}" readonly>
    </div>
    <button type="submit" class="btn btn-danger">Excluir</button>
</form>
@endsection