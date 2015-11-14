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
                <li>
                    <a class="booking-item" href="#">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <h4>В. Търново</h4>
                                &darr;
                                <h4>Пловдив</h4>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="booking-item-features booking-item-features-sign clearfix">
                                            <li rel="tooltip" data-placement="top" title="Пасажери"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 6</span>
                                            </li>
                                        </ul>
                                        <ul class="booking-item-features booking-item-features-small clearfix">
                                            <li rel="tooltip" data-placement="top" title="Възможност за багаж"><i class="fa fa-briefcase"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Климатик"><i class="im im-air"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Радио"><i class="im im-fm"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <span class="booking-item-price">5</span>
                                <span>лв./п.</span><br />
                                <span class="btn btn-primary">Избери</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="gap"></div>
</div>
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
                        <input class="i-check" type="checkbox" checked/>Добави</label>
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
                            В. Търново
                        </div><i class="fa fa-arrow-right booking-item-payment-date-separator"></i>
                        <div class="booking-item-payment-date">
                            Пловдив
                        </div>
                    </li>
                    <li>
                        <h5>Споделен превоз (2 пасажера)</h5>
                        <ul class="booking-item-payment-price">
                            <li>
                                <p class="booking-item-payment-price-title">Сума за превоза</p>
                                <p class="booking-item-payment-price-amount">7лв.</p>
                            </li>
                            <li>
                                <p class="booking-item-payment-price-title">Такси</p>
                                <p class="booking-item-payment-price-amount">2лв.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="booking-item-payment-total">Общо: <span>9лв.</span>
                </p>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>
@stop