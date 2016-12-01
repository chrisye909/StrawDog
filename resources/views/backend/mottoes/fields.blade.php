<!-- Motto Field -->
<div class="form-group @if($errors->has('content')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        <label for="content">Motto:</label>
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        @include('layouts.error_block',['field' => 'content'])
    </div>
</div>

<!-- Source Field -->
<div class="form-group @if($errors->has('source')) has-error @endif">
    <div class="col-sm-offset-3 col-sm-6">
        <label for="source">Source:</label>
        {!! Form::text('source', null, ['class' => 'form-control']) !!}
        @include('layouts.error_block',['field' => 'source'])
    </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-6">
        <button class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
        <a href="{!! route('backend.mottoes.index') !!}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
    </div>
</div>