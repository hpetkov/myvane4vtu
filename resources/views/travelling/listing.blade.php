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
                        <h5 class="booking-filters-title">Price </h5>
                        <input type="text" id="price-slider">
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
                            <div class="col-md-3">
                                <div class="booking-item-car-img">
                                    <img src="img/Volkswagen-Polo-BlueGT.png" alt="Image Alternative text" title="Image Title" />
                                    <p class="booking-item-car-title">Volkswagen Polo</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <ul class="booking-item-features booking-item-features-sign clearfix">
                                            <li rel="tooltip" data-placement="top" title="Passengers"><i class="fa fa-male"></i><span class="booking-item-feature-sign">x 6</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Doors"><i class="im im-car-doors"></i><span class="booking-item-feature-sign">x 4</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Baggage Quantity"><i class="fa fa-briefcase"></i><span class="booking-item-feature-sign">x 2</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Automatic Transmission"><i class="im im-shift-auto"></i><span class="booking-item-feature-sign">auto</span>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Electric Vehicle"><i class="im im-electric"></i>
                                            </li>
                                        </ul>
                                        <ul class="booking-item-features booking-item-features-small clearfix">
                                            <li rel="tooltip" data-placement="top" title="Air Conditioning"><i class="im im-air"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="FM Radio"><i class="im im-fm"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Stereo CD/MP3"><i class="im im-stereo"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Tilt Steering Wheel"><i class="im im-car-wheel"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="booking-item-features booking-item-features-dark">
                                            <li rel="tooltip" data-placement="top" title="Terminal Pickup"><i class="fa fa-plane"></i>
                                            </li>
                                            <li rel="tooltip" data-placement="top" title="Car with Driver"><i class="im im-driver"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"><span class="booking-item-price">$93</span><span>/day</span>
                                <p class="booking-item-flight-class">Economy</p><span class="btn btn-primary">Select</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <p><small>108 rental cars in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                    </p>
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li><a href="#">6</a>
                        </li>
                        <li><a href="#">7</a>
                        </li>
                        <li class="dots">...</li>
                        <li><a href="#">43</a>
                        </li>
                        <li class="next"><a href="#">Следваща страница</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
</div>
@stop