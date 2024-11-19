@extends('layouts.user')

{{-- Pembuka Head --}}
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
 <style>
    body{
        background: #5F9EA0;
    }
     .btn-purple{
        background: #5F9EA0;
        width: 100%;
        color: #fff;
     }

     .btn-purple:hover{
        background: #5F9EA0;
        width: 100%;
        color: #fff;
        font-weight: 500;

     }
 </style>
@endsection

@section('title', 'Register')

@section('content')
       
     <div class="container">
       <div class="row justify-content-center">
        <div class="col-lg-5">
           <h2 class="text-center text-black mb-0 mt-5">Rehub</h2>
           <p class="text-center text-black mb-5">E-Report Hub</p>
           <div class="card mt-5">
            <div class="card-body">
                <h2 class="text-center mb-5">create Account</h2>
                <form action="#" method="post">
                     @csrf
                     <div class="form-group">
                        <input type="number" name="nik" placeholder="NIK"class="form-control">
                     </div>

                     
                     <div class="form-group">
                        <input type="text" name="nik" placeholder="full Name"class="form-control">
                     </div>


                    
                     <div class="form-group">
                        <input type="text" name="nik" placeholder="User Name"class="form-control">
                     </div>


                     <div class="form-group">
                        <input type="number" name="nik" placeholder="Telp"class="form-control">
                     </div>


                    
                     <div class="form-group">
                        <input type="password" name="nik" placeholder="Password"class="form-control">
                     </div>

                     <button type="submit" class="btn btn-purple">Register</button>
                    <a href="{{ route('ereporthub.index') }}" class="btn btn-secondary mt-3">Back</a>
                </form>
          
            </div>
           </div>
           @if(Session::has('pesan'))
           <div class="alert alert-denger mt-2">
            {{ Session::get('pesan') }}
           </div>
           @endif 
        </div>
       </div>
     </div>

@endsection





