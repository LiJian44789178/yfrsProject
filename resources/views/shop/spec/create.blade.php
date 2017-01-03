@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Spec
        </h1>
    </section>
    <div class="content">

        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['url' => 'specs']) !!}

                    @include('shop.spec.spec_fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
