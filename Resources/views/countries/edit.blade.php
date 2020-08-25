@extends('layouts.admin.master')

@section('title') {{ _t('edit') . ' ' . _t('user') }} @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') {{_t('country')}} @endslot
        @slot('li_1') {{ _t('home') }} @endslot
        @slot('li_2') {{_t('edit_country')}}  @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ _t('edit_country') }}</h4>

                    @include('common-components.forms.alert-error')

                    {!! Form::model($country, ['route' => ['countries.update', $country->id],'method'=>'PATCH', 'class' => 'outer-repeater', 'enctype' => 'multipart/form-data']) !!}
                    <div data-repeater-list="outer-group" class="outer">
                        @include('country::countries._form')
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit"
                                    class="btn btn-primary"> {{_t('update')}}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
