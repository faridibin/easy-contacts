@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ config('easy-forms.form_name', 'Contact') }}</div>

                <div class="card-body">
                    @if (session('sent'))
                        <div class="alert alert-success" role="alert">
                            {{ session('sent') }}
                        </div>
                    @endif

                    @include('easy-forms::partials.contact-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
