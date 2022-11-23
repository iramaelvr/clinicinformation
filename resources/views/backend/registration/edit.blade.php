@extends('backend.layouts.app')

@section('title', 'Registration')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($registration, ['route' =>['registration.update', $registration->username],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.registration.partials.form', ['header' => 'Edit Registration <span class="text-primary">('.str_limit($registration->name, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop