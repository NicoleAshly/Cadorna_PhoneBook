<Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style> 
body{
  background-color: #ADA8C3;
}


td{
	margin-top: 3%;
	padding-top: 2%;
	padding-bottom: 2%;
	border-top : 1px solid #ddd;
}

#addeditform{
	margin-left: 12%;
	margin-right: 12%;
}
table{
	margin-top: 2.5%;
}
 </style>
<body>
@if($mode == 'edit')
<form action="{{url('/save/edit')}}"  enctype="multipart/form-data" method="POST">
{!!
	  
	$Nickname = $person['Nickname'];
	$image = $person['image'];
	$FName = $person['FName'];  
	$LName = $person['LName'];
	$Contact = $person['Contact'];
	$Address = $person['Address'];
!!}
 <input type="hidden" name="Pid" value="{{$Pid}}">
@elseif($mode == 'add')
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
<table border="0" align="center">
<tr><td align="center"><h2>Contact</h2></td></tr>
<tr>
<td style="cusor: ">Upload photo: <br>
<br><input type="file"  class="form-control-file"  name="image" width="50%" required>
<p><input type = "hidden" name="_token" value="{{ csrf_token() }} " value="{{$image}}"></p></td>
</tr>
<tr>
<td>Nickname:<input type="text"class="form-control form-control-sm" name="Nickname" value="{{$Nickname}}" placeholder="Nickname" required></td>
</tr>
<tr>
<td>FirstName:<input type="text" class="form-control form-control-sm" name="FName" value="{{ $FName}}" placeholder="First Name" required></td>
</tr>
<tr>
<td>LastName:<input type="text"  class="form-control form-control-sm"name="LName" value="{{ $LName}}" placeholder="Last Name" required></td>
</tr>
<tr>
<td>Contact #:<input type="text" class="form-control form-control-sm" name="Contact" onblur="checkContact()" value="{{ $Contact}}" id="Contact" required>
<span id="numb"></span>
</td>
</tr>
<tr>
<td>Address: &nbsp; <input type="text"  class="form-control form-control-sm" name="Address" value="{{ $Address}}" placeholder="Address" required></td>
</tr>
<tr>
<td>
<br><button type="submit" class="btn btn-success btn-block">Save Contact</button></td></tr>
<tr><td><br><a href="/"<button class="btn btn-danger btn-block">Cancel</button></a></td></tr>

</table>
 






<script>
 function checkContact(){
		var pattern = /^09[0-9]{2}[0-9]{3}[0-9]{4}$/; 
		var Contact /*id*/ = document.getElementById('Contact').value;

		if (!pattern.test(Contact)){
			document.getElementById('Contact').focus();
			document.getElementById('numb'/*span*/).innerHTML="must be a mobile phone";
			return false;
		}else{
			document.getElementById('numb').innerHTML=" ";
			return true;

		}


	}
	</script>
</body>
</html>