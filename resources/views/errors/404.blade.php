@extends('layouts.app')
@section('content')

  <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">{{trans('label.page_not_found')}}</h1>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{asset('/dashboard')}}">{{trans('label.back_home')}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

<style>
  
</style>
@endsection