@extends('layouts.admin.master')

@section('title') {{_t('country')}} @endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ theme_url('assets/libs/toastr/toastr.min.css')}}">
@endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('title') {{_t('country')}} @endslot
        @slot('li_1') {{ _t('home') }} @endslot
        @slot('li_2') {{_t('country')}}  @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text"
                                           class="form-control"
                                           id="search-box"
                                           placeholder="{{_t('search')}}"
                                           @if ($search = request()->get('filter')['search'])
                                           value="{{ $search  }}"
                                           @endif
                                           onkeypress="return search(event, '{{ route('countries.index') }}')"
                                    />
                                    <i class="bx bx-search-alt search-icon"
                                       onclick="return redirectWithSearch('{{ 'countries' }}')"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap">
                            <thead class="thead-light">
                            <tr>
                                <th>{{ _t('code') }}</th>
                                <th>{{ _t('name') }}</th>
                                <th>{{_t('flag')}}</th>
                                <th class="text-center">{{ _t('action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{{ $country->id }}</td>
                                    <td>{{ $country->name }}</td>
                                    <td><h1> {{ $country->flag }} </h1></td>
                                    <td class="text-center">
                                        {!! Form::open([
                                               'method' => 'PATCH',
                                               'route' => ['countries.update', $country->id],
                                               'style'=>'display:inline',
                                               'onsubmit' => 'return confirm("'. _t('message_confirm_update').'");'
                                       ]) !!}
                                        <button type="submit" class="btn btn-light">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input"
                                                       {{$country->active ? "checked" : ""}} id="customSwitch{{$country->id}}"
                                                       onchange="changeActive()">
                                                <label class="custom-control-label"
                                                       for="customSwitch{{$country->id}}">{{$country->active ? _t('hide') : _t('show')}}</label>
                                            </div>
                                        </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="pagination pagination-rounded justify-content-end mb-2">
                        {{ $countries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    @include('common-components.functions.search')
    @include('common-components.functions.toastr')

@endsection
