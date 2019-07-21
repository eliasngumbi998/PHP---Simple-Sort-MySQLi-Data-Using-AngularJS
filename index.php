<!DOCTYPE html>
<html lang="en" ng-app="myModule">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro.com"" rel="nofollow">https://eliasngumbipro.com"</a> >eliasngumbipro</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Simple Sort MySQLi Data Using AngularJS</h3>
		<hr style="border-top:1px dotted #ccc;">
		<div class="col-md-8">
			<div class="form-inline">
				<label>Order By:</label>
				<select class="form-control" ng-model="sort">
					<option ng-repeat="x in keyword">{{x}}</option>
				</select>
				<button class="btn btn-primary" ng-click="sortBy()">Sort</button>
			</div>
			<br />
			<table class = "table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat = "member in members | orderBy: sortKey">
						<td>{{member.firstname}}</td>
						<td>{{member.lastname}}</td>
						<td>{{member.address}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-4">
			<form>
				<div class="form-inline">
					<input type="text" class="form-control" ng-model="firstname" placeholder="Firstname"/>
					<input type="text" class="form-control" ng-model="lastname" placeholder="Lastname"/>
					<input type="text" class="form-control" ng-model="address" placeholder="Address"/>
					<br /><br />
					<center><button type = "button" class = "btn btn-primary" ng-click = "insertData()" ><span class = "glyphicon glyphicon-save"></span> Insert</button></center>
				</div>
			</form>
		</div>
	</div>
<script src = "js/angular.js"></script>
<script src = "js/script.js"></script>
</body>	
</html>
