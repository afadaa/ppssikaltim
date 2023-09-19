<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    <br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255,'required']) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-12">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>