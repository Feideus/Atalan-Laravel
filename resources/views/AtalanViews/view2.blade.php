@extends('Master')

@section('Header')

<button><a href="#" style="text-decoration: none;">Add a User</a></button>

@stop

@section('Content')
<table style="border: 1px solid black; position:relative; left: 20%;">
@foreach($data as $info)
  <?php $idvar = 1;?>
  <tr style="border: 1px solid grey; padding: 5px;">
@foreach($info as $info2)
  <td style="border: 1px solid grey; padding : 5px; margin: 5px;"> {{ $info2 }} </td>
@endforeach
  <td style="border: 1px solid grey; padding : 5px; margin: 5px;"><input id=<?php echo $idvar?> type="submit" onclick= <?php echo  "window.location.href='/addUser/' ".$idvar ?> value="Modifier"></input></td>
  </tr>
  <?php $idvar = $idvar+1;?>
@endforeach
</table>

@stop

