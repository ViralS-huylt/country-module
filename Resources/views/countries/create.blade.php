@extends('layouts.admin.master')

@section('title') Quốc gia @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') {{_t('country')}} @endslot
        @slot('li_1') {{ _t('home') }} @endslot
        @slot('li_2') {{_t('create_country')}}  @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{_t('create_country')}}</h4>

                    @include('common-components.forms.alert-error')

                    {!! Form::open(['route' => 'countries.store','method'=>'POST', 'class' => 'outer-repeater', 'enctype' => 'multipart/form-data']) !!}
                    <div data-repeater-list="outer-group" class="outer">
                        @include('country::countries._form')
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit"
                                    class="btn btn-primary">{{_t('create')}}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
