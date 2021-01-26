@extends('layouts.main')

@section('title',$title)

@section('content')
  @if( in_array('left',$check)&&in_array('top',$check) )
     <table class="mul_table">
       <th class="blankhead"></th>
       @for($a=2;$a<=$root_number;$a++)
         <th class="headmulv2">{{ $a }}</th>
       @endfor
       @for ($i=1;$i<=12;$i++) 
         <tr> <th class="headmulv2">{{ $i }}</th>
            @for ($j=2;$j<=$root_number;$j++) 
            <td  class="mul_td">{{ $i*$j }}</td>
            @endfor
         </tr>
       @endfor
    </table>

  @elseif( in_array('top',$check) )
     <table class="mul_table">
       @for($a=2;$a<=$root_number;$a++)
         <th class="headmulv2">{{ $a }}</th>
       @endfor
       @for ($i=1;$i<=12;$i++) 
         <tr> 
            @for ($j=2;$j<=$root_number;$j++) 
            <td  class="mul_td">{{ $i*$j }}</td>
            @endfor
         </tr>
       @endfor
    </table>

  @elseif( in_array('left',$check) )
     <table class="mul_table">
       @for ($i=1;$i<=12;$i++) 
         <tr> <th class="headmulv2">{{ $i }}</th>
            @for ($j=2;$j<=$root_number;$j++) 
            <td  class="mul_td">{{ $i*$j }}</td>
            @endfor
         </tr>
       @endfor
    </table>

  @else 
    <table class="mul_table">
       @for ($i=1;$i<=12;$i++) 
         <tr> 
            @for ($j=2;$j<=$root_number;$j++) 
            <td  class="mul_td">{{ $i*$j }}</td>
            @endfor
         </tr>
       @endfor
    </table>
  @endif
@endsection