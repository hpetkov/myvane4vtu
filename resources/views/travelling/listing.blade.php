@extends('layout')

@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{url("/")}}">Начало</a>
        </li>
        <li class="active">Пътувания</li>
    </ul>
    <h3 class="booking-title">Пътувания</h3>
    <div class="row">
        <div class="col-md-3">
            <aside class="booking-filters text-white">
                <h3>Търсене</h3>
                <ul class="list booking-filters-list">
                    <li>
                        <h5 class="booking-filters-title">Пасажери</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />2 пасажера
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />3 пасажера</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />4 пасажера</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check" type="checkbox" />4+ пасажера</label>
                        </div>
                    </li>
                    <li>
                        <h5 class="booking-filters-title">Цена </h5>
                        <input type="text" id="price-slider">
                    </li>
                    <li>
                        <button type="submit" class="btn btn-primary btn-lg">Филтрирай</button>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="col-md-9">
            <div class="nav-drop booking-sort">
                <h5 class="booking-sort-title"><a href="#">Сортиране по: Цена (ниска към висока)<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></a></h5>
                <ul class="nav-drop-menu">
                    <li><a href="#">Цена (висока към ниска)</a>
                    </li>
                </ul>
            </div>
            <ul class="booking-list">
                @foreach($travels as $travel)
                <li>
                    <a class="booking-item" href="{{url("travelling/pay", $travel->id)}}">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <h4>{{$travel->from_city}}</h4>
                                &darr;
                                <h4>{{$travel->to_city}}</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="booking-item-features booking-item-features-sign clearfix">
                                            <li rel="tooltip" data-placement="top" title="Пасажери"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x {{$travel->max_persons}}</span>
                                            </li>
                                        </ul>
                                        <ul class="booking-item-features booking-item-features-small clearfix">
                                            @if($travel->bags == true)
                                            <li rel="tooltip" data-placement="top" title="Възможност за багаж"><i class="fa fa-briefcase"></i>
                                            </li>
                                            @endif
                                            @if($travel->airconditioner == true)
                                            <li rel="tooltip" data-placement="top" title="Климатик"><i class="im im-air"></i>
                                            </li>
                                            @endif
                                            @if($travel->radio == true)
                                            <li rel="tooltip" data-placement="top" title="Радио"><i class="im im-fm"></i>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <span class="booking-item-price">{{$travel->price}}</span>
                                <span>лв./п.</span><br />
                                <span class="btn btn-primary">Избери</span>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="gap"></div>
</div>

@stop