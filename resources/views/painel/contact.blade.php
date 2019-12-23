@extends('adminlte::page')

@section('content')

	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard - Ver contatos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
				  <thead>
				    <tr>
				      <th scope="col">E-mail</th>
				      <th scope="col">Tipo de imóvel</th>
				      <th scope="col">Mêtros</th>
				      <th scope="col">Qnt.Comôdos</th>
				      <th scope="col">Apagar</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($consulta as $row)
				    <tr>
				    
				      <th scope="row">{{$row->mail}}</th>
				      <td>{{$row->type}}</td>
				      <td>{{$row->meters}}</td>
				      <td>{{$row->quant}}</td>
				      <td><button class="btn" type="submit">Apagar</button></td>
				    </tr>
				   @endforeach
				  </tbody>
				</table>

				{!! $consulta->links() !!}


                </div>
            </div>
        </div>
    </div>

@endsection
