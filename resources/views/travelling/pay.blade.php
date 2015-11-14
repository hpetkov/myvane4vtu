@extends('layout')

@section('content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{url("/")}}">Начало</a>
        </li>
        <li class="active">Пътувания</li>
    </ul>
    <h3 class="booking-title">Заплащане на превоз</h3>
    <div class="row">
        <div class="col-md-4">
            <img class="pp-img" src="{{asset('img/paypal.png')}}" alt="Image Alternative text" title="Image Title" />
            <p>ВАЖНО: Ще бъдете пренасочени към сайта на PayPal, за да извършите плащането.</p><a class="btn btn-primary">Плати чрез Paypal</a>	
        </div>

        <div class="col-md-4">
            <h4>Кредитна/Дебитна карта</h4>
            <ul class="card-select">
                <li>
                    <img class="card-select-img" src="{{asset('img/payment/visa-curved-64px.png')}}" alt="Image Alternative text" title="Image Title" />
                    <div class="card-select-data">
                        <p class="card-select-number">XXXX XXXX XXXX 1456</p>
                        <input class="form-control card-select-cvc" type="text" placeholder="CVC" />
                    </div>
                </li>
                <li>
                    <img class="card-select-img" src="{{asset('img/payment/maestro-curved-64px.png')}}" alt="Image Alternative text" title="Image Title" />
                    <div class="card-select-data">
                        <p class="card-select-number">XXXX XXXX XXXX 6698</p>
                        <input class="form-control card-select-cvc" type="text" placeholder="CVC" />
                    </div>
                </li>
            </ul>
            <div class="gap gap-small"></div>
            <h4>Добави нова карта</h4>
            <form class="cc-form">
                <div class="clearfix">
                    <div class="form-group form-group-cc-number">
                        <label>Номер на картата</label>
                        <input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" /><span class="cc-card-icon"></span>
                    </div>
                    <div class="form-group form-group-cc-cvc">
                        <label>CVC</label>
                        <input class="form-control" placeholder="xxxx" type="text" />
                    </div>
                </div>
                <div class="clearfix">
                    <div class="form-group form-group-cc-name">
                        <label>Картодържател</label>
                        <input class="form-control" type="text" />
                    </div>
                    <div class="form-group form-group-cc-date">
                        <label>Валидна до</label>
                        <input class="form-control" placeholder="mm/yy" type="text" />
                    </div>
                </div>
                <div class="checkbox checkbox-small">
                    <label>
                        <input class="i-check" type="checkbox" checked/>Регистрирай картата</label>
                </div>
                <input class="btn btn-primary" type="submit" value="Продължи с плащането" />
            </form>
        </div>

        <div class="col-md-4">
            <div class="booking-item-payment">
                <header class="clearfix">
                    <h5>СПОДЕЛЕН ПРЕВОЗ<h5>
                            </header>
                            <ul class="booking-item-payment-details">
                                <li>
                                    <div class="booking-item-payment-date">
                                        {{$travel->from_city}}
                                    </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                                    <div class="booking-item-payment-date">
                                        {{$travel->to_city}}
                                    </div>
                                </li>
                                <li>
                                    <h5>Споделен превоз ({{$travel->max_persons}} пасажера)</h5>
                                    <ul class="booking-item-payment-price">
                                        <li>
                                            <p class="booking-item-payment-price-title">Сума за превоза</p>
                                            <p class="booking-item-payment-price-amount">{{$travel->price}}лв.</p>
                                        </li>
                                        <li>
                                            <p class="booking-item-payment-price-title">Такси</p>
                                            <p class="booking-item-payment-price-amount">2.00лв.
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p class="booking-item-payment-total">Общо: <span>{{$travel->price + 2}}лв.</span>
                            </p>
                            </div>
                            </div>
                            </div>
                            <div class="gap"></div>
                            </div>
                            @stop