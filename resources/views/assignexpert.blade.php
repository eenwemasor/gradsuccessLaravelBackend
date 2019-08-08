<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: center;background-color: #f9f9f9;padding: 30px;width: 80%;margin: auto;">
	<h1 style="color: red;font-weight: bold;text-transform: uppercase;">Request to Assign Self and Application. </h1>
	<p>
		{{$expert[0]->first_name. " ". $expert[0]->last_name}}
		request to assign himself apllication with the name:
	</p>
	<div style="text-align: left;">
	<p><span style="font-weight: bolder">Name: </span>{{$applicationRequesttoAssign[0]->name}}</p>:
	<p><span style="font-weight: bolder">Interest:</span> {{$applicationRequesttoAssign[0]->university_and_course_applied_for}}</p>
	<p><span style="font-weight: bolder">Summary: </span>{{$applicationRequesttoAssign[0]->summary_of_interest}}</p>
	<div>
	<br>
	<br>
		<a style="background-color: #056e65;color: white;padding: 10px 30pxtext-decoration: none;" href="gradsuccessnew.netlify.com/Gradsuccess-admin">Login to Approve or Disapprove</a><br>
	<br>
	<br>
	<hr>
	<br>
	<br>
	<br>
	

	<small>We help young graduates and career people achieve their long and short academic and professional goals</small>

</body>

</html>