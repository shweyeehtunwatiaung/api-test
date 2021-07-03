@include('header')

@php
 $name= "John";
 $fruits = ['Jun','Feb', 'March','April'];
@endphp

<h3>{{$name}}</h3>


@foreach($fruits as $fruit)
 <p> {{$fruit}} </p>
@endforeach


@if(count($fruits) == 1)
  Single Fruit
@elseif( count($fruits) > 1 )
  More than one Fruit
@else
  No fruit
@endif