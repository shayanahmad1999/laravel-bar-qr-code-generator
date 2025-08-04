@extends('layouts.app')
  
@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h4>Laravel 12 Toastr JS Notifications Example</h4></div>
    <div class="card-body">
        Welcome to It Stuff Solutions -itstuffsolutiotions.io 
         
        <form method="POST" action="{{route('toast.store')}}" class="mt-3">
            @csrf
            <button type="submit" class="btn btn-primary">check notifications</button>
        </form>
    </div>
</div>
@endsection