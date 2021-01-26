@extends('layouts.main')

@section('title',$title)

@section('content')
   <form action="" method="post">
      @csrf 
      <label>
         Price <input type="number" name="price" step="0.25" required />
      </label>
      <br />
      <br />
      <label>
         Member Type <select name="memberType" required>
                     <option value="">-- Please select --</option>
                     @foreach($memberTypes as $code => $memberType)
                        <option value="{{  $code  }}">{{ $memberType['name'] }}</option>
                     @endforeach
                     </select>
      <br />
      <br />
      <button type="submit">Submit</button>
    </form>
@endsection