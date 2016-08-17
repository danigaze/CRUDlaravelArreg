
    <div class="form-group">
        {!! form::label('nombre', 'nombre', ['for' => 'nombre'] ) !!}
        {!! form::text('nombre', $producto->nombre  , ['class' => 'form-control', 'id' => 'nombre', 'placeholder' => 'escribe el nombre del producto...']  ) !!}
    </div>

    <div class="form-group">
        {!! form::label('clasificacion', 'clasificacion', ['for' => 'clasificacion'] ) !!}
        {!! Form::select('clasificacion',[
      'producto'      => $producto->clasificacion ,
      'basico'        => 'basico',
      'emergencias'   => 'emergencias',
      'no perecedero' => 'no perecedero',
      'perecedero'    => 'perecedero'],
      null,['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! form::label('marca', 'marca', ['for' => 'marca'] ) !!}
        {!! Form::select('marca',[
      'producto'  => $producto->marca ,
      'Ariel'     => 'Ariel',
      'Diana'     => 'Diana',
      'Familia'   => 'Familia',
      'Mamaines'  => 'Mamaines',
      'Pantene'   => 'Pantene',
      'Protex'    => 'Protex',
      'Recreo'    => 'Recreo',
      'Rexona'    => 'Rexona',
      'Tutifruty' => 'Tutifruty'],
      null,['class' => 'form-control', 'required' => 'required']) !!}

    </div>

