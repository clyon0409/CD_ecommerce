<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Edit Product</title>

      <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->

  </head>
  <style>
  	.image{
  		width: 20px;
  		height: 20px;
  		background-image: url('../../assets/engineer.jpg');
  		background-size: contain;
  		background-repeat: no-repeat;
  	}

  	.button_row{
  		margin-top: 30px;
  	}

  </style>

  <body role="document">
   	<div class="container">
   		<div class="row">
			  <div class="col-xs-6 col-md-11"><h3>Edit Product - ID 2</h3></div>
			  <div class="col-xs-6 col-md-1"><span class="glyphicon glyphicon-remove text-bottom" aria-hidden="true"></div>
		</div>
   		<form class="form-horizontal">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3"name='name' placeholder="product name">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
			    <div class="col-sm-10">
			      	<textarea class="form-control" rows="3" name='description'></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Categories</label>
			    <div class="col-sm-10">
			      	<select name='category'>
			      		<option value='tshirts'>tshirts</option>
			      		<option value='tshirts'>shoes</option>
			      		<option value='tshirts'>cups</option>
			      		<option value='tshirts'>hats</option>
			      	</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Or add new category</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="inputEmail3"name='new_category'>
			    </div>
			  </div>
			  <div class="form-group">
			  	<label for="inputPassword3" class="col-sm-2 control-label">Images</label>
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Upload</button>
			    </div>
			  </div>
			  <div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
							<div class="row">
						      <div class="col-xs-8 col-sm-3">
						        <div class='image'></div>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        img.png
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<div class="checkbox">
									  <label>
									    <input type="checkbox" value="">
									    Main
									  </label>
									</div>
						      </div>
							</div>
					</div>
					<div class="col-md-4"></div>
			  </div>
			  <div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
							<div class="row">
						      <div class="col-xs-8 col-sm-3">
						        <div class='image'></div>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        img.png
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<div class="checkbox">
									  <label>
									    <input type="checkbox" value="">
									    Main
									  </label>
									</div>
						      </div>
							</div>
					</div>
					<div class="col-md-4"></div>
			  </div>
			  <div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
							<div class="row">
						      <div class="col-xs-8 col-sm-3">
						        <div class='image'></div>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        img.png
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						      </div>
						      <div class="col-xs-4 col-sm-3">
						        	<div class="checkbox">
									  <label>
									    <input type="checkbox" value="">
									    Main
									  </label>
									</div>
						      </div>
							</div>
					</div>
					<div class="col-md-4"></div>
			  </div>
	
			  <div class="row">
					  <div class="col-md-4"></div>
					  <div class="col-md-4">
							<div class="row button_row">
							      <div class="col-xs-8 col-sm-4">
							        <button type="button" class="btn btn-default">Cancel</button>
							      </div>
							      <div class="col-xs-4 col-sm-4">
							       <button type="button" class="btn btn-success">Preview</button>
							      </div>
							      <div class="col-xs-4 col-sm-4">
							        <button type="button" class="btn btn-info">Update</button>
							      </div>
						    </div>
					  </div>
					  <div class="col-md-4"></div>
			  </div>
		</form>
		
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </body>
</html>
