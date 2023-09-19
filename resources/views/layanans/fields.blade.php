<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    <br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255, 'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control','id' => 'my-editor', 'required']) !!}
</div>

<!-- Categories Field -->
<div class="form-group col-sm-12">
    {!! Form::label('categories', 'Kategori:') !!}
    {!! Form::select('categories', ['Profil' => 'Profile', 'About' => 'About', 'Layanan'=>'Service'], null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>