<Doctype html>
<html>
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
.card{
  margin-left: 40%;
  margin-top: 2%;
}

h2{
  margin-top: 4%;
}
body{
  background-color: #ADA8C3;
}
</style>
<body>
<h2 align="center"> Contact Profile</h2>
<div class="card" style="width: 18rem;" align="center">
  <br>
  <p><img src="/storage/contact/{{$person->image}}"  class="w3-circle" style="height:60px;width:60px; border-radius: 50%;   margin-top: -2%; margin-bottom: 2%;"></p>
 
  <div class="card-body">
    <h5 class="card-title">Nickname: {{$person['Nickname']}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name: {{$person['FName']}} {{ $person['LName']}}</li>
    <li class="list-group-item">Contact#: {{$person['Contact']}}</li>
    <li class="list-group-item">Address: {{$person['Address']}}</li>
  </ul>
  <div class="card-body">
 
    <a href="#" class="card-link" style="color: green;">Call</a>
    <a href="#" class="card-link" style="color: blue;">Message</a>
  </div>
   <div class="card-body">
    <a href="/" class="card-link" style="color: red;">Cancel</a>
  </div>
</div> 
</body>
</html>


