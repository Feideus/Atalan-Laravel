@extends('Master')

@section('Header')

<nav style="position: fixed;">
<button onclick="window.location.href='/addUser'" style=" margin: 5px;background-color:#C4FDD4;" >Add a User</button><br/>
</nav>
@stop

@section('Content')
<table style="border: 1px solid black; position:relative; left: 20%;">
<tr style="border: 1px solid #F5F5DC; padding: 5px;">
  <td  style="border: 1px solid grey; padding : 5px; margin: 5px; background-color: #F5F5DC;"><p>Name</p></td>
  <td style="border: 1px solid grey; padding : 5px; margin: 5px;background-color: #F5F5DC;"><p>Family name</p></td>
  <td style="border: 1px solid grey; padding : 5px; margin: 5px;background-color: #F5F5DC;"><p>Email</p></td>
  <td style="border: 1px solid grey; padding : 5px; margin: 5px; background-color: #F5F5DC;"><p>Password</p></td>
  <td style="border: 1px solid grey; padding : 5px; margin: 5px; background-color: #F5F5DC;"><p>Type</p></td>
  <td style="border: 1px solid grey; padding : 5px; margin: 5px; background-color: #F5F5DC;"><p>id</p></td>
</tr>
<?php $idvar = 1;?>
@foreach($data as $info)
  <tr style="border: 1px solid grey; padding: 5px;">
@foreach($info as $info2)
  <td style="border: 1px solid grey; padding : 5px; margin: 5px;"> {{ $info2 }} </td>

@endforeach
@if($info['id'])
   <td style="border: 1px solid grey; padding : 5px; margin: 5px;"><button id=<?php echo $idvar;?> onclick=<?php echo "window.location.href='/editUser/".$info['id']."'"; $idvar= $idvar+1;?> style="background-color:#C4F4FD;">Modify</button></td>
							    <td style="border: 1px solid grey; padding : 5px; margin: 5px;"><button id=<?php echo $idvar;?> onclick=<?php echo "window.location.href='/deleteUser/".$info['id']."'"; $idvar= $idvar+1;?> style="background-color:#F799A7;">Delete</button></td>
    
@endif
  </tr>
@endforeach
</table>

@stop
							       @section('Footer')
																												       <div style=" position: fixed; top:90%; left:65%;"><p>Created by Erwan Ulrich, better known as Feideus</p></div>
@stop
