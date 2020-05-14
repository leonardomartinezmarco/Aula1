@extends('layouts.app')

@section('content')
<body>
    <div class="container">        
        <h1 class="text-center my-5">Nova categoria</h1>

    <form action="/categorias/cadastrar" method="POST">
        @csrf

        <div class="form-row">

            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Nome" name="name">
            </div>

            <div class="form-group col-md-12">
                <textarea class="form-control" name="description" placeholder="Descrição" cols="5" rows="5"></textarea>
            </div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Criar categoria</button>
        </div>
    </form>

    </div>
</body>
@endsection