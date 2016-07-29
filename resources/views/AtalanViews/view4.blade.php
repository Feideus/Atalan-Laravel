@extends('Master')

@section('Header')
<div style="border: 1px solid black; text-align: center; position: relative; width: 80%; left: 10%;padding: 5px;"><p>/!\ Les informations entrees dans les champs si dessous seront sauvegardees definitivement /!\ </p></div>
@stop

@section('Content')

<form method="POST" action="addUser/createUser" style=" position:relative; margin-top: 5%; width : 30%; left: 10%; border: 1px solid grey">
  
  <ul style="list-style-type:none;">
    <?php $index = 6;?>
  @for ($i = 0; $i < $index; $i++)
  
  <?php 

  if($i == 0)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."name".'</nav>'; echo "<input type ='text' value='name' name='name'></input></li>";
    }	   
  elseif($i == 1)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."surname".'</nav>'; echo "<input type ='text' value='surname' name='surname'></input></li>";
    }
elseif($i == 2)
  {
    echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."email".'</nav>'; echo "<input type ='text' value='email' name='email'></input></li>";
  }
elseif($i == 3)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."password".'</nav>'; echo "<input type ='text' value='password' name='password'></input></li>";
    }
elseif($i == 4)
    {
      echo '<nav style="border: 0.5px solid grey; width:25%; position: relative; text-align:center;background-color:grey; margin: 7px;">'."type".'</nav> '; echo "<input type ='text' value='type' name='type'></input></li>";
    }
?>
  @endfor
  </ul>
  <div style= "margin-top:10px; position:relative; left: 10%;"><button type="submit" >Envoyer</button></div>
</form>
@stop
