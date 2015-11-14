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
                                    <h3 class="mb15">àüÿàÿü MyVane</h3>
                                    <p>Est nisl facilisis consectetur eget fermentum rutrum suscipit penatibus ultrices eu bibendum mi volutpat mattis cum facilisis nunc platea tincidunt vehicula laoreet montes parturient urna magnis eu etiam eget integer</p>
                                    <p>Nullam consectetur fames erat scelerisque ac conubia orci mauris facilisi</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mb15">Login</h3>
                                <form action="{{ url('auth/login/test') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>Email</label>
                                        <input name="email" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <input name="password" class="form-control" type="password" placeholder="my secret password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Sign in" />
                                </form>
                            </div>
                            <div class="col-md-4">
                                <h3 class="mb15">New To Traveler?</h3>
                                <form action="{{ url('auth/register') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                        <label>First Name</label>
                                        <input name="first_name" class="form-control" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                        <label>Last Name</label>
                                        <input name="last_name" class="form-control" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                        <label>Email</label>
                                        <input name="email" class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" required/>
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <input name="password" class="form-control" type="password" />
                                    </div>
                                    <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                        <label>Password</label>
                                        <input name="password_confirmation" class="form-control" type="password" />
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Sign up for MyVane" />
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