<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    <br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255, 'required']) !!}
</div>


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status',['Aktif' => 'Aktif','Tidak Aktif' => 'Tidak Aktif'], null, ['class' => 'form-control', 'placeholder'=>'Pilih Status', 'disablePlaceholder' => true, 'required']) !!}
</div>