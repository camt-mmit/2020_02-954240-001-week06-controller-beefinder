@extends('layouts.main')

@section('title',$title)

@section('content')
   <table class="white_table">
      <tr> 
        <td class="point">Type <span>::</span></td> 
        <td class="area_input">{{ $typeName }}<td>
      </tr>
      <tr>
        <td class="point">Widht <span>::</span></td> 
        <td class="area_input">{{ $width }}</td>
      </tr>
      <tr>
        <td class="point">Height <span>::</span></td> 
        <td class="area_input">{{ $height }}</td>
      </tr>
      <tr>
        <td class="point">Area <span>::</span></td> 
        <td class="area_input">{{ $area }}</td>
      </tr>
   </table>
@endsection