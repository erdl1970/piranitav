@extends('layouts.app')

@section('title', 'Pirañita Acuario')

@section('body-class','product-page')

@section('content')
    <div class="header header-filter"
         style="background-image: url('{{asset('img/530206.jpg')}}');">
    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section">
                <h2 class="title text-center">Registrar nueva categoría</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                <form method="post" action="{{url('/admin/categories')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre de la categoría</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            </div>
                        </div>

                    </div>
                    <textarea class="form-control" placeholder="Descripción de la categoría" rows="5"
                              name="description">{{ old('description') }}</textarea>

                    <button class="btn btn-warning">Registrar categoría</button>
                    <a href="{{url('/admin/categories')}}" class="btn btn-info">Cancelar</a>


                </form>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection