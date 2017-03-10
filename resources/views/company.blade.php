@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="panel-title">Компания</span>
                </div>

                <div class="panel-body">
                	<form method="POST" action="{{ route('company.update', [ 'id' => 1 ]) }}">
                		{{ method_field('PUT') }}
                		{{ csrf_field() }}
                		<div class="form-group col-md-6">
                            <label for="name" class="control-label">Наименование</label>
               				<input id="name"  class="form-control" type="text" name="name" value="{{ $company->name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address" class="control-label">Адрес</label>
               				<input id="address"  class="form-control" type="text" name="address" value="{{ $company->requisites->address }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone" class="control-label">Телефон</label>
               				<input id="phone"  class="form-control" type="text" name="phone" value="{{ $company->requisites->phone }}">
                        </div>
                        <div class="form-group col-md-12">
          					<button type="submit" class="btn btn-success">Сохранить</button>
          				</div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
