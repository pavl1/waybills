@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <waybills-list></waybills-list>
        </div>
    </div>
</div>
@endsection

@section('print')
<print></print>
@endsection
