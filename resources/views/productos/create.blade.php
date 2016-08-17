@extends('layout')

@section('content')
    <div class="container">
        @if($errors->has())
            <div class="alert alert-warning" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif </br>

            {!! Form::open([ 'method' => 'POST', 'novalidate']) !!}

    <div class="form-group">
        <label class="col-md-4 control-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" >
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Clasificación</label>
        <select name="clasificacion" class="form-control" >
            <option value="" disabled selected>Elige una clasificación...</option>
            <option value="basico">basico</option>
            <option value="emergencias">emergencias</option>
            <option value="no perecedero">no perecedero</option>
            <option value="perecedero">perecedero</option>


        </select>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label">Marca</label>
        <select name="marca" class="form-control" >
            <option value="" disabled selected>Elige una marca...</option>
            <option value="Ariel">Ariel</option>
            <option value="Diana">Diana</option>
            <option value="Familia">Familia</option>
            <option value="Mamaines">Mamaines</option>
            <option value="Pantene">Pantene</option>
            <option value="Protex">Protex</option>
            <option value="Recreo">Recreo</option>
            <option value="Rexona">Rexona</option>
            <option value="Tutifruty">Tutifruty</option>

        </select>
    </div>

     <button type="submit" class="btn btn-success btn-block">Guardar</button>

    {!! Form::close() !!}
    </div>

@endsection

