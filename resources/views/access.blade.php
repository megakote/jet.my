@extends('layouts.app')

@section('content')
    <div class="vc-wrap">
        <div  class="container">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('order.access.add') }}" method="post">
                        <div class="row col-md-8" style="margin:0 auto;">
                            <div class="col-md-12">
                                <div class="col-md-12 my-5 h2_marg" style="text-align:center" >
                                    <h1 class="edit-link-page">Покупка доступа</h1>
                                </div>
                                <select class="form-control custom-select" name="id">
                                    @foreach($access_list as $access)
                                        <option {{ ($access->id == $accessItem->id) ? "selected" : "" }}
                                                value="{{ $access->id }}"
                                                data-price="{{ $access->price }}"
                                        >{{ $access->name }}</option>
                                    @endforeach
                                </select>
                                @auth

                                @else
                                    <div class="row form-group text-center">
                                        <div class="col-lg-4">
                                            <input type="text" name="name" class="form-control" value="" placeholder="Имя*" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" name="tel" class="form-control" value="" placeholder="Телефон*" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="email" name="email" class="form-control" value="" placeholder="E-mail*" required>
                                        </div>
                                    </div>
                                @endauth
                                <div class="col-md-12 my-1 text-center">
                                    <button class="btn btn-default btn-courses" name="admission_submit">Отправить заявку</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
