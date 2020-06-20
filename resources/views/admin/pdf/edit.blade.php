@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($pdf, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.pdf.update', $pdf->id))) !!}

<div class="form-group">
    {!! Form::label('headline', 'শিরোনাম', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('headline', old('headline',$pdf->headline), array('class'=>'form-control')) !!}
        <p class="help-block">কিছু বইয়ের (পি ডি এফ) শিরোনাম</p>
    </div>
</div><div class="form-group">
    {!! Form::label('pdf_file', 'পি ডি এফ', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('pdf_file') !!}
        <p class="help-block">কিছু বইয়ের (পি ডি এফ) আপলোড করুন</p>
    </div>
</div><div class="form-group">
    {!! Form::label('articles', 'কিছু বইয়ের (পি ডি এফ)  বিস্তারিত', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('articles', old('articles',$pdf->articles), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.pdf.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection