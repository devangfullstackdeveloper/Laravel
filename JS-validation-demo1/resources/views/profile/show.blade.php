@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                   
                    {{ Form::open(['route' => ['profile.store'], 'class'=>'form-horizontal','id'=>'profileform'] )  }} 

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           {{ Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('email', null,['class'=>'form-control']) }}
                                {!! $errors->first('email','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>   

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           {{ Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::password('password',['class'=>'form-control']) }}
                                {!! $errors->first('password','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           {{ Form::label('name', 'User Name', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('name', null,['class'=>'form-control']) }}
                                {!! $errors->first('name','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>

                         
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           {{ Form::label('gender', 'Gender', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::select('gender', [''=>'Select', 'Male'=>'Male','Female'=>'Female'] , null,['class'=>'form-control']) }}
                                {!! $errors->first('gender','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                           {{ Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('address', null,['class'=>'form-control']) }}
                                {!! $errors->first('address','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                           {{ Form::label('phone', 'Phone', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                {{ Form::text('phone', null,['class'=>'form-control']) }}
                                {!! $errors->first('phone','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('terms') ? ' has-error' : '' }}">
                           {{ Form::label('terms', 'Terms And condition', ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-1">
                                {{ Form::checkbox('terms', null,null,['class'=>'form-control']) }}
                                {!! $errors->first('terms','<span class="has-error" >:message</span>') !!}
                                    
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ Form::submit('Update',['class'=>'btn btn-primary']) }} 
                            </div>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer')

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
 {!! JsValidator::formRequest('App\Http\Requests\ProfileRequest','#profileform'); !!}

@endpush