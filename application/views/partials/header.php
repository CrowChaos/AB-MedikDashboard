<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://bootswatch.com/united/bootstrap.min.css" rel="stylesheet" media="screen" />
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
 
</head>
<style>
	body{
		background: rgba(0, 0, 0, 0) linear-gradient(to right, rgb(244, 107, 69), rgb(238, 168, 73)) repeat scroll 0% 0%;
	}
	header{
		background-color: aliceblue;
		margin-bottom: 15px;
	}
	header a{
		color: #cd6e00;
		text-transform: uppercase;
	}

</style>
<body>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><?php echo $page_title ?></h1>
			</div>
			<div class="col-md-2">
				<ul class="nav nav-pills">
				<li>
					<a href="<?php echo base_url();?>subject/create">Vytvorit noveho pacienta</a>
				</li>
				</ul>
			</div>
			</div>
		</div>
</header>
    <!-- container -->
    <div class="container">

