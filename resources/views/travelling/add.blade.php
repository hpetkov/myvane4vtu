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
            <form action="{{ url('travel') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <h4>За пътуването</h4>
                </div>
                <div class="col-md-4">
                        <div class="form-group form-group-lg">
                            <label>Дата на тръгване</label>
                            <input name="travel_date" type="text" class="date-pick form-control">
                        </div>
                    <div class="form-group form-group-lg">
                        <label>Цена/пасажер</label>

                        <div class="input-group">
                            <input name="price" type="text" class="form-control"
                                   placeholder='Сумата, която изисквате от всеки пасажер'>

                            <div class="input-group-addon">лв.</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <label>Тръгва от</label>
                        <input name="from_city" type="text" placeholder="Град/село, от което тръгвате"
                               class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <label>Пристига в</label>
                        <input name="to_city" type="text" placeholder="Град/село, до което ще пътувате"
                               class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                <div class="form-group form-group-lg">
                            <label>Пасажери</label>
                            <input name="max_persons" type="number" class="form-control">
                        </div>
                        </div>
                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <label>Допълнителна информация</label>
                        <input name="information" type="text" class="form-control" style='width: 100%;'>
                    </div>
                </div>


                <div class="col-md-12">
                    <h4>За превозното средство</h4>
                </div>
                <br/>

                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <div class="checkbox-inline checkbox-switch">
                            <label>
                                <input name="bags" value="1" class="i-check" type="checkbox"/>Място за багаж
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <div class="checkbox-inline checkbox-switch">
                            <label>
                                <input name="airconditioner"  value="1"  class="i-check" type="checkbox"/>Климатик
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-group-lg">
                        <div class="checkbox-inline checkbox-switch">
                            <label>
                                <input name="radio" value="1" class="i-check" type="checkbox"/>Радио
                            </label>
                        </div>
                    </div>
                </div>
                <div class='gap'></div>
                <div class='col-md-12'>
                    <div class="checkbox checkbox-stroke">
                        <label>
                            <input class="i-check" type="checkbox"/>Прочетох и съм съгласен с <a href="{{url('pages/terms')}}">Общите условия</a> на
                            сайта</label>
                    </div>
                    <input type="submit" value="Изпрати" class="btn btn-primary"/>
                </div>

            </form>
        </div>
        <div class="gap"></div>
    </div>
@stop