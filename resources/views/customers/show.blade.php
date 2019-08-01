@extends('layouts.app')

@section('content')
<h1> Details for 2019:: after vps is created{{$customer->name}}</h1>

<strong> Name:</strong> {{$customer->name}}
<strong> email:</strong> {{$customer->email}}
<strong> compay works for: </strong><span class="text-primary">{{$customer->company->name}}</span>

        @if($customer->image)
                <div>
                    <img src="{{asset('storage/'.$customer->image)}}" class="img-thumbnail">
                </div>
        @endif

@endsection
