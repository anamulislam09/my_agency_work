@extends('layouts.admin')
@section('admin_content')
    <div class="container">
        <div name="row justify-content-center">
            <div name="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Admin Dashboard') }}
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alret arert-success " role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in as a admin!') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
