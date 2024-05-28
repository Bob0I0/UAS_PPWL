@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-header">
            <div class="float-start">
                Donatur Information
            </div>

            <div class="float-end">
                <a href="{{ route('donaturs.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                <div class="col-md-6" style="line-height: 35px;">
                    {{ $donatur->name }}
                </div>
            </div>

            <div class="row">
                <label for="amount" class="col-md-4 col-form-label text-md-end text-start"><strong>Amount:</strong></label>

                <div class="col-md-6" style="line-height: 35px;">
                    {{ $donatur->amount }}
                </div>
            </div>

            <div class="row">
                <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                <div class="col-md-6" style="line-height: 35px;">
                    {{ $donatur->description }}
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection