<!-- Tittle Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- thumbnail Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('thumbnail', 'thumbnail:') !!}
    {!! Form::file('thumbnail', null, ['class' => 'form-control']) !!}
</div>
