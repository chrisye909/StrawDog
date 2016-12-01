<!-- Title Field -->
<div class="form-group @if($errors->has('title')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @include('layouts.error_block',['field' => 'title'])
    </div>
</div>

<!-- Keywords Field -->
<div class="form-group @if($errors->has('keywords')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        {!! Form::label('keywords', 'Keywords:') !!}
        {!! Form::text('keywords', null, ['class' => 'form-control']) !!}
        @include('layouts.error_block',['field' => 'keywords'])
    </div>
</div>

<!-- Summary Field -->
<div class="form-group @if($errors->has('summary')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        {!! Form::label('summary', 'Summary:') !!}
        {!! Form::text('summary', null, ['class' => 'form-control']) !!}
        @include('layouts.error_block',['field' => 'summary'])
    </div>
</div>

<!-- Text Field -->
<div class="form-group @if($errors->has('text')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        {!! Form::label('text', 'Text:') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control', 'rows' => '20']) !!}
        @include('layouts.error_block',['field' => 'text'])
    </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        <button class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <a href="{!! route('backend.articles.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
    </div>
</div>