@extends('layouts.main')

@section('title',$title)

@section('content')
  <form action="{{ route('mulv2-result') }}" method="post">
    @csrf 
    <table class="white_table">
    <label>
      <tr>
        <td class="point">N <span>::</span> </td>
        <td><select name="root_number" class="mul_select">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
        </td>
      </tr>
      <tr>
        <td class="point">Option <span>::</span> </td>
        <td><input type="checkbox" name="header[]" value="top">Top Header 
            <input type="checkbox" name="header[]" value="left">Left Header
        </td>
      </tr>
    </label>
    </table>
    <br />
    <button type="submit">Submit</button>
  </form>
@endsection
