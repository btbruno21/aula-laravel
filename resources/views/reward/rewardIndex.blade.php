@extends('layout')
@section('content')
<div class="text-center my-3">
  <a href="{{ route('reward.create') }}" class="btn btn-primary btn-sm mb-3 py-2 px-3 fs-6">Criar recompensas</a>
</div>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Pontos Necessários</th>
      <th scope="col">Editar</th>
      <th scope="col">Mostrar</th>
    </tr>
  <tbody>
    @foreach($reward as $rew)
    <tr>
      <th scope="row">{{ $rew->id }}</th>
      <td>{{ $rew->name }}</td>
      <td>{{ $rew->description  }}</td>
      <td>{{ $rew->required_points  }}</td>
      <td><a href="{{route('reward.edit', $rew->id)}}"><button type="button" class="btn btn-success">Editar</button></a></td>
      <td><a href="{{route('reward.show', $rew->id)}}"><button type="button" class="btn btn-success">Mostrar</button></a></td>
    </tr>
    @endforeach
  </tbody>
  </thead>
</table>
@endsection