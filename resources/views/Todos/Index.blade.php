@extends('layouts.app')
@section('title','Post')
@section('scripts')
    <script src="{{ asset('/js/index.js') }}" type="text/javascript"></script>
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('todos.create')}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    <div class="text-center d-none" id="loading" name="loading">
        <div class="spinner-border m-5" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <table class="table table-bordered table-responsive-lg" id="table_todos" name="table_todos">
        
    </table>
@endsection