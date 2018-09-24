<Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--<script type="text/javascript" src="{{ asset('register/js/jquery-2.1.4.min.js') }}"></script>-->

</head>
<style>
body{
  background-color: #ADA8C3;
}

#contactlist td, #contactlist th {
    /*border-top: 1px solid #ddd;*/
    border-bottom: 1px solid #ddd;
    padding: 7px;	
}
#contactlist th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #101830;
    color: white;
}
#addcontact, #editcontact{
  display: none;
  margin-top: 10%;
}
 

</style>

<body>
<table id="contactlist" align="center" style="margin-top: 4%;">
<tr>
<th colspan="8" >List of Your Contacts </th>
<td ><button type="submit" class="btn btn-success" onclick="showadd()"><i class="material-icons">add_box</i></button></td>
</tr>
<tr>
    <th> #</th>
    <th>Image</th>    
    <th>Nickname</th>
    <th>Full Name</th>
    <th>Contact #</th>
    <th>Address</th>	
    <th>View</th>	    
    <th>Edit</th>	
    <th>Delete</th>	    
  </tr>
@foreach ($contact as $contact)
 <tr>
    <td>{{$contact->Pid}}</td>
    <td><img src="/storage/contact/{{$contact->image}}"  class="w3-circle" style="height:60px;width:60px; border-radius: 50%;   margin-top: -2%; margin-bottom: 2%;">    </td>
    <td>{{$contact->Nickname}}</td>
    <td>{{$contact->FName}} {{$contact->LName}}</td>
	  <td>{{$contact->Contact}}</td>
    <td>{{$contact->Address}}</td>
    <td><a href="{{url('/view/'.$contact['Pid'].'/contact')}}"><i class="material-icons" style="color:red;">remove_red_eye</i></a></td>
    <!--<td><a href="{{url('/edit/'.$contact['Pid'].'/contact')}}"  ><i class="material-icons">create</i></a></td>    -->
    <td><a href="{{url('/edit/'.$contact['Pid'].'/contact')}}"><i class="material-icons">create</i></a></td>     

    
    <td><a href="{{url('/delete/'.$contact['Pid'].'/contact')}}"><i class="material-icons" style="font-size:36px; color:gray;">delete</i></a></td>
  </tr>
@endforeach
</table>

 @if($mode == 'add')
 <div id="addcontact">
 
<form action="{{url('/add/contact')}} " enctype="multipart/form-data" method="POST">
{!!	
	$Nickname = ' ';
	$image = ' ';
	$FName = ' ';
	$LName = ' ';
	$Contact = ' ';
	$Address = ' ';
!!}
@endif
{{csrf_field()}}

@include('main')

</form>

</div>
 

<script>
  function showadd() {
  document.getElementById("addcontact").style.display = "block";
  }

  
 
</script>
</body>
</html>