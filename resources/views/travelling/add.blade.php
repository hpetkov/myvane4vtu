@extends('layout')

@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{url("/")}}">Начало</a>
        </li>
        <li class="active">Пътувания</li>
    </ul>
    <h3 class="booking-title">Добави пътуване</h3>
    <div class="row">
        <div class="col-md-4">
            <h4>За пътуването</h4>
            <form>
                <div class="form-group form-group-lg">
                    <label>Дата на тръгване</label>
                    <input type="text" class="date-pick form-control">
                </div>
            </form>
        </div>
    </div>
    <div class="gap"></div>
</div>
@stop