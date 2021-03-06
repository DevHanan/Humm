@extends('dashboard.layouts.app')
@section('title'){!! __('back.Edit Specialization') !!}@endsection
@section('header')@endsection
@section('breadcrumb')
    @include('dashboard.layouts.partials._breadcrumb',['level'=>'specializations'])
@endsection
@section('content')
    <section id="column-selectors">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4 class="card-title">@yield('title')</h4>
                    </div> -->
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            {!! Form::model($specialization,['method'=>'put','route'=>['system.specializations.update',$specialization->id],'class'=>'form']  ) !!}
                            @csrf()
                            <div class="row">
                                @include('dashboard.specializations.partials._form')
                                @component('dashboard.layouts.partials.buttons._save_button',[])
                                @endcomponent
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js-validation')
    <script type="text/javascript" src="{{ asset('specialization/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\SpecializationRequest', '.form'); !!}
@endsection
