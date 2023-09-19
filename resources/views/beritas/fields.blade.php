<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!} <br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255,'required']) !!}
</div>

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Judul:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','minlength' => 10,'maxlength' => 50,'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc', 'Deskripsi:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control','minlength' => 10, 'id' => 'my-editor','required']) !!}
</div>