<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller is a front-end responsive framework based on Material design & Bootstrap.">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin - Develop more, Code less.</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Styles Starts -->
<?php include('include/styles.php'); ?>
<!-- Styles Ends -->
</head>

<body>
<!-- Header Starts -->
<?php include('include/header.php'); ?>
<!-- Header Ends -->

<!-- Sidebar Starts -->
<?php include('include/sidebar.php'); ?>
<!-- Sidebar Ends -->

<div id="content" class="pmd-content">

    <!-- Buttons -->
	<div class="container-fluid">

		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Card</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">Card</li>
		</ol><!--breadcrum end-->
	
		<!--component header -->
		<div class="componant-title-bg"> 
			<p class="lead">A card is a flexible and extensible content container. It includes options for header and footer, a wide variety of content, contextual background colors, and powerful display options.</p>
		</div> <!--component header end -->
		
		<div class="row" id="card-masonry">
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">List with icon</h3>
				<div class="pmd-card pmd-z-depth">
					<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
						<li class="list-group-item"> 
							<i class="material-icons media-left pmd-sm">mood</i> <span class="media-body">Cras justo odio</span> </li>
						<li class="list-group-item"><i class="material-icons media-left media-middle">notifications</i>
							<div class="media-body">Dapibus ac facilisis in</div>
						</li>
						<li class="list-group-item"><i class="material-icons media-left">person_add</i>
							<div class="media-body">Morbi leo risus</div>
						</li>
						<li class="list-group-item"><i class="material-icons media-left">share</i>
							<div class="media-body">Porta ac consectetur ac</div>
						</li>
						<li class="list-group-item"><i class="material-icons media-left">drive_eta</i>
							<div class="media-body">Vestibulum at eros</div>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Avatar with text and icon</h3>
				<div class="pmd-card pmd-z-depth">
					<ul class="list-group pmd-list pmd-card-list">
						<li class="list-group-item">
							<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img">
								<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a>
							</div>
							<div class="media-body">
								<h3 class="pmd-card-title-text">Two-line item</h3>
								<span class="pmd-card-subtitle-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span> </div>
							<i class="material-icons media-left">check_box</i> </li>
						<li class="list-group-item">
							<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
							<div class="media-body">
								<h3 class="pmd-card-title-text">Two-line item</h3>
								<span class="pmd-card-subtitle-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span> </div>
							<i class="material-icons media-right">check_box_outline_blank</i> </li>
						<li class="list-group-item">
							<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="http://propeller.in/components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
							<div class="media-body">
								<h3 class="pmd-card-title-text">Two-line item</h3>
								<span class="pmd-card-subtitle-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span> </div>
							<i class="material-icons media-right">check_box_outline_blank</i> </li>
					</ul>
				</div>
			</div>		
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Avatar, Title, and Subtitle area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-title">
					  <div class="media-left">
						<a class="avatar-list-img" href="javascript:void(0);">
							<img src="http://propeller.in/components/list/img/40x40.png" width="40" height="40">
						</a>
					  </div>
					  <div class="media-body media-middle">
						<h3 class="pmd-card-title-text">Two-line item</h3>
						<span class="pmd-card-subtitle-text">Secondary text</span>
					  </div>
					</div>
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-title">
						<h2 class="pmd-card-title-text">Title goes here</h2>
						<span class="pmd-card-subtitle-text">Secondary text</span>	
					</div>	
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
					<div class="pmd-card-actions">
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Title, and Subtitle area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-title">
						<h2 class="pmd-card-title-text">Title goes here</h2>
						<span class="pmd-card-subtitle-text">Secondary text</span>	
					</div>
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media and Action area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-actions">
						<span>
							<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
							<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
							<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
						</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Form</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-body">
						<form class="form-horizontal">
							<div class="form-group pmd-textfield">
								<input type="text" class="form-control" id="first-name" placeholder="Text input">
							</div>
							<div class="form-group pmd-textfield">
								<label for="first-name">First Name</label>
								<input type="text" class="form-control" id="first-name">
								<span>Input is required!</span> </div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="first-name">First Name</label>
								<input type="text" class="mat-input form-control" id="first-name" value="No" disabled>
							</div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label">
								<label for="first-name">First Name</label>
								<input type="text" class="mat-input form-control" id="first-name" value="yes">
							</div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label has-success">
								<label class="control-label" for="inputSuccess1">Input with success</label>
								<input type="text" class="form-control" id="inputSuccess1">
							</div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label has-warning">
								<label class="control-label" for="inputWarning1">Input with warning</label>
								<input type="text" class="form-control" id="inputWarning1" value="test">
							</div>
							<div class="form-group pmd-textfield pmd-textfield-floating-label has-error">
								<label class="control-label" for="inputError1">Input with error</label>
								<input type="email" class="form-control" required>
								<span class="has-error-text">Input is required!</span> 
							</div>
						</form>
					</div>
					<div class="pmd-card-actions">
						<button class="btn pmd-ripple-effect btn-primary" type="button">Primary</button>
						<button class="btn pmd-ripple-effect btn-primary" type="button">Primary</button>
						<button class="btn pmd-ripple-effect btn-default" type="button">Primary</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media and Description area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media, Title, Description and Action area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-title">
					  <div class="media-left">
						<a class="avatar-list-img" href="javascript:void(0);">
							<img src="http://propeller.in/components/list/img/40x40.png" width="40" height="40">
						</a>
					  </div>
					  <div class="media-body media-middle">
						<h3 class="pmd-card-title-text">Two-line item</h3>
						<span class="pmd-card-subtitle-text">Secondary text</span>
					  </div>
					</div>
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media, Title, and Description area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-title">
						<h2 class="pmd-card-title-text">Title goes here</h2>
						<span class="pmd-card-subtitle-text">Secondary text</span>	
					</div>	
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media, Title, Action, and Description area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-title">
						<h2 class="pmd-card-title-text">Title goes here</h2>
						<span class="pmd-card-subtitle-text">Secondary text</span>	
					</div>	
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media, Title, Action, and Description area</h3>
				<div class="pmd-card pmd-card-media-inline pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<div class="media-body">
							<h2 class="pmd-card-title-text">Title goes here</h2>
							<span class="pmd-card-subtitle-text">Secondary text</span>	
						</div>
						<div class="media-right media-middle">
							<a href="javascript:void(0);">
								<img src="http://propeller.in/assets/images/profile-pic.png"  width="80" height="80">
							</a>
						</div>
					</div>
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Title, Media, and Action area</h3>
				<div class="pmd-card pmd-card-media-inline pmd-card-default pmd-z-depth">
					<div class="pmd-card-media">
						<div class="media-body">
							<h2 class="pmd-card-title-text">Title goes here</h2>
							<span class="pmd-card-subtitle-text">Secondary text</span>	
						</div>
						<div class="media-right media-middle">
							<a href="javascript:void(0);">
								<img src="http://propeller.in/assets/images/profile-pic.png"  width="112" height="112">
							</a>
						</div>
					</div>
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Title, Media, and Action area</h3>
				<div class="pmd-card pmd-card-media-inline pmd-z-depth">
					<div class="pmd-card-media">
						<div class="media-body">
							<h2 class="pmd-card-title-text">Title goes here</h2>
							<span class="pmd-card-subtitle-text">Secondary text</span>	
						</div>
						<div class="media-right media-middle">
							<a href="javascript:void(0);">
								<img src="http://propeller.in/assets/images/profile-pic.png"  width="152" height="152">
							</a>
						</div>
					</div>
					<div class="pmd-card-actions">
						<button type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Primary</button>
						<button class="btn pmd-btn-flat pmd-ripple-effect btn-default" type="button">Action</button>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Media, and Action area</h3>
				<div class="pmd-card pmd-card-default pmd-z-depth">
					<div class="pmd-card-body">
						<div class="media-body">
								<a href="javascript:void(0);">
									<img src="http://propeller.in/assets/images/profile-pic.png" width="280" height="228">
								</a>
							</div>
							<div class="media-right">
								<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">share</i></button>
								<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">thumb_up</i></button>
								<button type="button" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary"><i class="material-icons pmd-sm">drafts</i></button>
							</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 col-sm-6">
				<h3 class="text-muted">Avatar, Title, and Subtitle area</h3>
				<div class="pmd-card pmd-card-inverse pmd-z-depth">
					<div class="pmd-card-title">
					  <div class="media-left">
						<a class="avatar-list-img" href="javascript:void(0);">
							<img src="http://propeller.in/components/list/img/40x40.png" width="40" height="40">
						</a>
					  </div>
					  <div class="media-body media-middle">
						<h3 class="pmd-card-title-text">Two-line item</h3>
						<span class="pmd-card-subtitle-text">Secondary text</span>
					  </div>
					</div>
					<div class="pmd-card-media">
						<img src="http://propeller.in/assets/images/profile-pic.png" width="1184" height="666" class="img-responsive">
					</div>
					<div class="pmd-card-title">
						<h2 class="pmd-card-title-text">Title goes here</h2>
						<span class="pmd-card-subtitle-text">Secondary text</span>	
					</div>	
					<div class="pmd-card-body">
						Cards provide context and an entry point to more robust information and views. Don't overload cards with extraneous information or actions.
					</div>
					<div class="pmd-card-actions">
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">share</i></button>
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">thumb_up</i></button>
						<button class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-primary" type="button"><i class="material-icons pmd-sm">drafts</i></button>
					</div>
				</div>
			</div>

		</div>
		
	</div> <!--Buttons end--> 

</div> <!--Icons end --> 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

<script src="../../components/card/js/jquery.masonry.min.js" language="javascript" type="text/javascript"></script>
<script>
	$( document ).ready(function() {
		$(".bar").remove();
		$(".pmd-textfield .form-control").after('');
		
		$('.pmd-textfield input').each(function () {
			if($(this).val() != ""){
				$(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-completed");
			}
		});
		
		$(".pmd-textfield .form-control").focus(function(){
		  $(this).closest('.pmd-textfield').addClass("pmd-textfield-floating-label-active pmd-textfield-floating-label-completed");
		});
		
		$(".pmd-textfield .form-control").focusout(function(){
		  if($(this).val() === ""){
			$(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-completed");
		  }
		  $(this).closest('.pmd-textfield').removeClass("pmd-textfield-floating-label-active");
		});
		
		// Masonary
		function cardMasonry() {
		setTimeout(function(){ 
			$('#card-masonry').masonry({

				itemSelector: '#card-masonry > div',
				//isAnimated: true,
			});
			$('#card-masonry').css({"opacity":"1"});
			}, 1000);};
		$(window).resize(function(){
			$('#card-masonry').masonry({
				itemSelector: '#card-masonry > div',
				//isAnimated: true,
			});
			cardMasonry();
		});
		$(function() {
			$('#tabs').bind('click', function (e) {
				$('#card-masonry').masonry({
				itemSelector: '#card-masonry > div',});
			});
		});
		cardMasonry();
			
	});

</script>

</body>
</html>