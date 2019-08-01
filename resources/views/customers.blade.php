@extends('layouts.app')

@section('content')
<h1> customers list</h1>



@if(session()->has('message'))
<div class="alert alert-info">{{session()->get('message')}}</div>
@endif
<form action="customers" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Enter a name:</label>
    <input type="text" name="name" id="" value="{{old('name')}}" class="form-control" placeholder="enter your name">
      <small id="helpId" class="text-muted">enter your offical name above</small>
    </div>

    <div class="form-group">
      <label for="">Email:</label>
    <input type="email" name="email" id="" class="form-control" value="{{old('email') }}" >
      <small id="helpId" class="text-muted">Enter your valid email</small>
    </div>
    <div class="form-group">
            <select name="active" id="active">
                <label for="active">choose your status</label>
                <option value="" disabled>choose status</option>
                <option value="1" >Active</option>
                <option value="0" >Inactive</option>
            </select>
        </div>

        <div class="form-group">
                <select name="company_id" id="company_id">
                        <label for="active">choose your company</label>
                               <option value="" disabled>choose status</option>
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}" >{{$company->name}}</option>
                            @endforeach
                 
                </select>
            </div>

    <p class="text-success">{{$errors->first('name')}}</p>
    <p class="text-success">{{$errors->first('email')}}</p>
    

    <div class="form-group d-flex flex-column py-2">
      <label for="image"> choose picture</label>
      <input type="file" name="image">
      <p class="text-alert">{{$errors->first('image')}}</p>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
</form>





<hr>
<div class="row">
    <div class="col-6">
        <ul>
            @foreach ($customers as $customer)
                <li ><a href="{{route('customers.show',$customer->id)}}"> {{$customer->name}} </a>  <span class="text-muted mx-2">  ({{$customer->active }})  </span>  </li> 
            @endforeach
        </ul>
        
    </div>
       <div class="row col-12">
         {{$customers->links()}}
       </div>
</div>
@endsection
