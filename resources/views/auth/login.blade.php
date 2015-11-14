@extends('auth')

@section('content')
    <div class="full-page">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-img" style="background-image:url({{ asset('img/people_on_the_beach_1280x852.jpg') }});"></div>
            <div class="bg-holder-content full text-white">
                <div class="full-center">
                    <div class="container">
                        <div class="row row-wrap" data-gutter="60">
                            <div class="col-md-4">
                                <div class="visible-lg">
                                    <h3 class="mb15">MyVane - споделено пътуване</h3>
                                    <p>Евтин и лесен начин за пътуване.
                                    Може да пътувате с други хора на дълеки и близки разстояния като се разберете за време и място на срещата и да разделите разходите.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mb15">Влизане</h3>
                                <form action="{{ url('auth/login/test') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>Имейл</label>
                                        <input name="email" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Парола</label>
                                        <input name="password" class="form-control" type="password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Влез" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mb15">Нов MyVane?</h3>
                                <form action="{{ url('auth/register') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>Име</label>
                                        <input name="first_name" class="form-control" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                        <label>Фамилия</label>
                                        <input name="last_name" class="form-control" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                        <label>Имейл</label>
                                        <input name="email" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Парола</label>
                                        <input name="password" class="form-control" type="password" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Потвърждаване на парола</label>
                                        <input name="password_confirmation" class="form-control" type="password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Регистрация за MyVane" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('errors.errors')
            </div>
        </div>
    </div>
@stop