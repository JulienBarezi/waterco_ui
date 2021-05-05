<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap">
	
</head>
<body>

<!-- <div class="container">

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">	
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">This is the home</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	<ul class="nav nav-tabs" id="nested-tab">
        <li class="active"><a data-bs-toggle="tab" href="#sub21" >Tab 2.1</a>
        </li>
        <li><a data-bs-toggle="tab" href="#sub22">Tab 2.2</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="sub21">
            <p>Tab 2.1</p>
        </div>
        <div class="tab-pane fade" id="sub22">
            <p>Tab 2.2</p>
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">This is cotact</div>
</div>

</div> -->
<div class="container-fluid">	
	<div class="logo">
		<h1 class="logo-title">WATERCO APP</h1>
	</div>
	
	<ul class="nav nav-fill nav-tabs" id="myTab" role="tablist">

	  <li class="nav-item">
	  	<a class="nav-link active" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff" type="button" role="tab" aria-controls="staff" aria-selected="true">Staff</a>

	  </li>	
	  <li class="nav-item">
	  	<a class="nav-link" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="false">Member/Clients</a>
	    
	  </li>
	  <li class="nav-item">
	  	<a class="nav-link" id="premise-tab" data-bs-toggle="tab" data-bs-target="#premise" type="button" role="tab" aria-controls="premise" aria-selected="false">Premises</a>
	    
	  </li>
	  <li class="nav-item">
	  	<a class="nav-link" id="bill-tab" data-bs-toggle="tab" data-bs-target="#bill" type="button" role="tab" aria-controls="bill" aria-selected="false">Bill</a>
	   
	  </li>
	  <li class="nav-item">
	  	<a class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button" role="tab" aria-controls="payment" aria-selected="false">Payments</a>
	    
	  </li>
	  <li class="nav-item">
	  	<a class="nav-link" id="route-tab" data-bs-toggle="tab" data-bs-target="#route" type="button" role="tab" aria-controls="route" aria-selected="true">Routes</a>
	    
	  </li>

	</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="staff" role="tabpanel" aria-labelledby="staff-tab"><p>This is for staff</p></div>
  <div class="tab-pane fade" id="member" role="tabpanel" aria-labelledby="member-tab">
  	 <div class="nav op-button">
  		<button type="button" class="button add-button" id="addm-tab" data-bs-toggle="tab" data-bs-target="#addm">Add A Member</button>
  		<button type="button" class="button view-button" id="viewm-tab" data-bs-toggle="tab" data-bs-target="#viewm">View A Member</button>
  		<button type="button" class="button update-button">Update Member</button>
  		<button type="button" class="button delete-button">Delete Member</button>
  	</div>
  	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane add-form fade show active" id="addm" role="tabpanel" aria-labelledby="addm-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a member</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Name</label>
				    	<input type="text" id="name" name="name" placeholder="name ..." required="">
					</div>

			    <div class="input">
			    	<label for="email">Email</label>
			    	<input type="email" id="email" name="email" placeholder="email ..." required="">
			    </div>

			    <div class="input">
			    	<label for="telephone">Telephone</label>
			    	<input type="number" id="telephone" name="telephone" placeholder="telephone ..." required="">
			    </div>

			    
			    <button type="submit" class="button form-button">Add</button>
			    
				</div>
				
			</form>

			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">#</th>
			      <th scope="col" class="align-middle">Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Telephone</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">1</th>
			      <td class="align-middle">Mark</td>
			      <td class="align-middle">Otto</td>
			      <td class="align-middle">@mdo</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">3</th>
			      <td class="align-middle">Larry the Bird</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@twitter</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewm" role="tabpanel" aria-labelledby="viewm-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a member</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Full Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Your name" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">#</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Location</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>

			     <tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">3</th>
			      <td colspan="2" class="align-middle">Larry the Bird</td>
			      <td class="align-middle">@twitter</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
	</div>


  	<!-- <div class="tabbable">
        <ul class="nav nav-tabs" id="nested-tab">
            <li class="active"><a data-bs-toggle="tab" href="#sub21" >Tab 2.1</a>
            </li>
            <li><a data-bs-toggle="tab"  href="#sub22">Tab 2.2</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="sub21">
                <p>Tab 2.1</p>
            </div>
            <div class="tab-pane fade" id="sub22">
                <p>Tab 2.2</p>
            </div>
        </div>
    </div> -->

  </div>
  <div class="tab-pane fade" id="premise" role="tabpanel" aria-labelledby="premise-tab">
  	<div class="nav op-button">
  		<button type="button" class="button add-button" id="addp-tab" data-bs-toggle="tab" data-bs-target="#addp">Add A Premise</button>
  		<button type="button" class="button view-button" id="viewp-tab" data-bs-toggle="tab" data-bs-target="#viewp">View A Premise</button>
  		<button type="button" class="button update-button">Update Premise</button>
  		<button type="button" class="button delete-button">Delete Premise</button>
  	</div>
  	<div class="tab-content" id="nav-ptabContent">
		<div class="tab-pane add-form fade show active" id="addp" role="tabpanel" aria-labelledby="addp-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a premise</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Your name" required="">
					</div>

			    <div class="input">
			    	<label for="email">Email</label>
			    	<input type="text" id="email" name="email" placeholder="Your email" required="">
			    </div>
			    
			    <button type="submit" class="button form-button">Add</button>
			    
				</div>
				
			</form>

			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">#</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Location</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row" class="align-middle">1</th>
			      <td class="align-middle">Mark</td>
			      <td class="align-middle">Otto</td>
			      <td class="align-middle">@mdo</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">3</th>
			      <td colspan="2" class="align-middle">Larry the Bird</td>
			      <td class="align-middle">@twitter</td>
			    </tr>
			  </tbody>
			</table>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewp" role="tabpanel" aria-labelledby="viewp-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a premise</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Your name" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">#</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Location</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>

			     <tr>
			      <th scope="row" class="align-middle">2</th>
			      <td class="align-middle">Jacob</td>
			      <td class="align-middle">Thornton</td>
			      <td class="align-middle">@fat</td>
			    </tr>
			    <tr>
			      <th scope="row" class="align-middle">3</th>
			      <td colspan="2" class="align-middle">Larry the Bird</td>
			      <td class="align-middle">@twitter</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
	</div>
  </div>
  <div class="tab-pane fade" id="bill" role="tabpanel" aria-labelledby="bill-tab"><p>This is for the bills</p></div>
  <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab"><p>This is for the payment</p></div>
  <div class="tab-pane fade" id="route" role="tabpanel" aria-labelledby="route-tab"><p>This is for the routes</p></div>
</div>
</div>

<!-- <script type="text/javascript" src="js/main.js"></script> -->
<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>