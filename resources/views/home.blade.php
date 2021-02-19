
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                  <div class="card">
                        <div class="card-header"><center>{{ __('Información de la Acción Formativa') }}</center></div>
                              <div class="card-body">
                                    <aplica></aplica>
                              </div>
            </div>
      </div>
</div>
   
@endsection
