@extends('backend.layouts.app')

@section('title', 'Registration')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'registration.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.registration.partials.form', ['header' => 'Create a registration'])
            {{ Form::close() }}
        </div>
    </section>
@stop