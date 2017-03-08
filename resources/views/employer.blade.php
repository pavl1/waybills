@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                    <span class="panel-title">Работники</span>
                    <button style="margin-left: 1em" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal">
                        <span class="glyphicon glyphicon-plus text-success" aria-hidden="true"></span>
                    </button>
                </div>

                <div class="panel-body">
                    <employers-list></employers-list>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
