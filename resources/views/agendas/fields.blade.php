<!-- Thumbnail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumbnail', 'Thumbnail:') !!}
    <br>
    {!! Form::file('thumbnail', null, ['class' => 'form-control','maxlength' => 255,'required']) !!}
</div>

<!-- Tittle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tittle', 'Tittle:') !!}
    {!! Form::text('tittle', null, ['class' => 'form-control','maxlength' => 255,'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-12">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control','maxlength' => 255,'id' => 'my-editor','required']) !!}
</div>

<!-- Location Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('location', 'Lokasi:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Quota Field -->
<div class="form-group col-sm-3">
    {!! Form::label('quota', 'Kuota:') !!}
    {!! Form::number('quota', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Gift Field -->
<div class="form-group col-sm-3">
    {!! Form::label('gift', 'Aksesoris:') !!}
    {!! Form::text('gift', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Date Start Field -->
<div class="form-group col-sm-3">
    {!! Form::label('date_start', 'Date Start:') !!}
    <input type="text" name="date_start" class="form-control" id="date_start" required>

</div>

<!-- Date End Field -->
<div class="form-group col-sm-3">
    {!! Form::label('date_end', 'Date End:') !!}
    <input type="text" name="date_end" class="form-control" id="date_end" required>
</div>


<!-- Link Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('link', 'Link Pendaftaran:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','required']) !!}
</div>