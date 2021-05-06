<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>

<div class="container-fluid">	
	<div class="logo">
		<h1 class="logo-title">WATERCO APP</h1>
	</div>
	
	<ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
	  
	  <li class="nav-item">
	  	<a class="nav-link active" id="member-tab" data-bs-toggle="tab" data-bs-target="#member" type="button" role="tab" aria-controls="member" aria-selected="true">Member/Clients</a>
	    
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

	  <li class="nav-item">
	  	<a class="nav-link" id="staff-tab" data-bs-toggle="tab" data-bs-target="#staff" type="button" role="tab" aria-controls="staff" aria-selected="false">Users</a>

	  </li>	

	</ul>
<div class="tab-content" id="myTabContent">
  
  <div class="tab-pane fade show active" id="member" role="tabpanel" aria-labelledby="member-tab">
  	 <div class="nav op-button">
  		<button type="button" class="button add-button active" id="addm-tab" data-bs-toggle="tab" data-bs-target="#addm">Add A Member</button>
  		<button type="button" class="button view-button" id="viewm-tab" data-bs-toggle="tab" data-bs-target="#viewm">View A Member</button>
  
  	</div>
  	<div class="tab-content" id="nav-tabContent">
		<div class="tab-pane add-form fade show active" id="addm" role="tabpanel" aria-labelledby="addm-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a member</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Name</label>
				    	<input type="text" id="name" name="name" placeholder="name..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="email">Email</label>
			    	<input type="email" id="email" name="email" placeholder="email..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="telephone">Telephone</label>
			    	<input type="number" id="telephone" name="telephone" placeholder="telephone..." required="" autocomplete="off">
			    </div>

			    
			    <button type="submit" class="button form-button add-btn">Add</button>
			    
				</div>
				
			</form>

			<div class="members">
			<h1 class="member-title">Member(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Members ID</th>
			      <th scope="col" class="align-middle">Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Telephone</th>
			      <th scope="col" class="align-middle">Options</th> 
			    </tr>
			  </thead>
			  <tbody>
			    
			      <!-- 	<ul class="list-inline m-0">
                        
                                <li class="list-inline-item">
                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-placement="top" title="Add"><i class="bi-pencil"></i></button>

                                </li>
                                <li class="list-inline-item">
                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi-trash"></i></button>
                                </li>
                          </ul>  -->   
			      
			  </tbody>
			</table>
		</div>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewm" role="tabpanel" aria-labelledby="viewm-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a member</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Full Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Name" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<div class="members">
			<h1 class="member-title">Member(s)</h1>
			<table class="table">	
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Member ID</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Location</th>
			      <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			      	<!-- <ul class="list-inline m-0">
   
                                <li class="list-inline-item">
                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-placement="top" title="Add"><i class="bi-pencil"></i></button>

                                </li>
                                <li class="list-inline-item">
                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi-trash"></i></button>
                                </li>
                    </ul>  -->   
			     

			  
			  </tbody>
			</table>
		</div>
		</div>
	</div>
	</div>

	<!-- Modal -->

		<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="staticBackdropLabel">Update member</h5>
		        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      
		        <form action="contact.php" method="POST" class="modal-body" >
		        	<div class="input-group-main">
					<div class="input">
						<label for="mname">Name</label>
				    	<input type="text" id="mname" name="mname" placeholder="name..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="memail">Email</label>
			    	<input type="email" id="memail" name="memail" placeholder="email..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="mtelephone">Telephone</label>
			    	<input type="number" id="mtelephone" name="mtelephone" placeholder="telephone..." required="" autocomplete="off">
			    </div>

			    <button type="submit" class="button form-button update-btn">Update</button>
			    
				</div>
			</form>
		      

		    </div>
		  </div>
		</div>
  </div>
  <div class="tab-pane fade" id="premise" role="tabpanel" aria-labelledby="premise-tab">
  	<div class="nav op-button">
  		<button type="button" class="button add-button" id="addp-tab" data-bs-toggle="tab" data-bs-target="#addp">Add A Premise</button>
  		<button type="button" class="button view-button" id="viewp-tab" data-bs-toggle="tab" data-bs-target="#viewp">View A Premise</button>

  	</div>
  	<div class="tab-content" id="nav-ptabContent">
		<div class="tab-pane add-form fade show active" id="addp" role="tabpanel" aria-labelledby="addp-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a premise</h1>
				<div class="input-main">

					<div class="input">
						<label for="member_id">Member ID</label>
				    	<input type="number" id="member_id" name="member_id" placeholder="member id" required="">
					</div>

					<div class="input">
						<label for="route_id">Route ID</label>
				    	<input type="number" id="route_id" name="route_id" placeholder="route id" required="">
					</div>


					<div class="input">
						<label for="address">address</label>
				    	<input type="text" id="address" name="address" placeholder="address" required="">
					</div>

					<div class="input">
						<label for="structure">Structure</label>
				    	<input type="text" id="structure" name="structure" placeholder="structure" required="">
					</div>

			    <div class="input">
			    	<label for="premise_status">Premise status</label>
			    	<input type="text" id="premise_status" name="premise_status" placeholder="premise status" required="">
			    </div>
			    
			    <button type="submit" class="button form-button add-btn">Add</button>
			    
				</div>
				
			</form>

			<div class="premises">
			<h1 class="member-title">Premise(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Member ID</th>
			      <th scope="col" class="align-middle">Route ID</th>
			      <th scope="col" class="align-middle">Address</th>
			      <th scope="col" class="align-middle">Structure</th>
			      <th scope="col" class="align-middle">Status</th>
			      <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			      	<!-- <ul class="list-inline m-0">
                        
                            <li class="list-inline-item">
                                <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#premisemodal" data-placement="top" title="Add"><i class="bi-pencil"></i></button>

                            </li>
                            <li class="list-inline-item">
                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi-trash"></i></button>
                            </li>
                    </ul> -->
			      
			  </tbody>
			</table>
		</div>
		</div>
	</div>

		<div class="tab-pane add-form fade" id="viewp" role="tabpanel" aria-labelledby="viewp-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a premise</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Premise ID" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<div class="premises">
			<h1 class="member-title">Premise(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Location</th>
			       <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			      <!-- <td>
			      	<ul class="list-inline m-0">
                        
                            <li class="list-inline-item">
                                <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#premisemodal" data-placement="top" title="Add"><i class="bi-pencil"></i></button>

                            </li>
                            <li class="list-inline-item">
                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi-trash"></i></button>
                            </li>
                    </ul>
			      </td> -->
			   

			     
			  </tbody>
			</table>
		</div>
	</div>
	</div>
	</div>

	<!-- premise modal -->

	<div class="modal fade" id="premisemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="premisemodallabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="premisemodallabel">Update premise</h5>
		        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      
		        <form action="contact.php" method="POST" class="modal-body" >
		        	<div class="input-group-main">
					<div class="input">
						<label for="memberuid">Member ID</label>
				    	<input type="number" id="memberuid" name="memberuid" placeholder="member id" required="">
					</div>

					<div class="input">
						<label for="routeuid">Route ID</label>
				    	<input type="number" id="routeuid" name="route_id" placeholder="route id" required="">
					</div>


					<div class="input">
						<label for="addressu">address</label>
				    	<input type="text" id="addressu" name="addressu" placeholder="address" required="">
					</div>

					<div class="input">
						<label for="structure">Structure</label>
				    	<input type="text" id="structureu" name="structureu" placeholder="structure" required="">
					</div>

			    <div class="input">
			    	<label for="premise_statusu">Premise status</label>
			    	<input type="text" id="premise_statusu" name="premise_statusu" placeholder="premise status" required="">
			    </div>

			    <button type="submit" class="button form-button update-btn">Update</button>
			    
				</div>
			</form>
		      
		    
		    </div>
		  </div>
		</div>
  </div>
  <div class="tab-pane fade" id="bill" role="tabpanel" aria-labelledby="bill-tab">
  	<div class="nav op-button">
  		<button type="button" class="button add-button active" id="addb-tab" data-bs-toggle="tab" data-bs-target="#addb">Add A Bill</button>
  		<button type="button" class="button view-button" id="viewb-tab" data-bs-toggle="tab" data-bs-target="#viewb">View A Bill</button>
  	</div>
  	<div class="tab-content" id="nav-billtabContent">
		<div class="tab-pane add-form fade show active" id="addb" role="tabpanel" aria-labelledby="addb-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a Bill</h1>
				<div class="input-main">

					<div class="input">
						<label for="premise_id">Premise ID </label>
				    	<input type="text" id="name" name="name" placeholder="name..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="reading_id">Reading ID</label>
			    	<input type="number" id="reading_id" name="reading_id" placeholder="Reading Id..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="staff_id">Staff ID</label>
			    	<input type="number" id="staff_id" name="staff_id" placeholder="Staff ID..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="period_of_billing">Period of billing</label>
			    	<input type="number" id="period_of_billing" name="period_of_billing" placeholder="Period of billing..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="amount">Amount</label>
			    	<input type="number" id="amount" name="amount" placeholder="amount ..." required="" autocomplete="off">
			    </div>
			    
			    <button type="submit" class="button form-button add-btn">Add</button>
			    
				</div>
				
			</form>

			<div class="bills">
			<h1 class="member-title">Bill(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Bill ID</th>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Reading ID</th>
			      <th scope="col" class="align-middle">Staff ID</th>
			      <th scope="col" class="align-middle">Period of Billing</th>
			      <th scope="col" class="align-middle">Amount</th>

			    </tr>
			  </thead>
			  <tbody>

			  </tbody>
			</table>
		</div>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewb" role="tabpanel" aria-labelledby="viewb-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a bill</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Bill ID</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Bill ID" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<div class="bills">
			<h1 class="member-title">Bill(s)</h1>
			<table class="table">	
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Bill ID</th>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Reading ID</th>
			      <th scope="col" class="align-middle">Staff ID</th>
			      <th scope="col" class="align-middle">Period of Billing</th>
			      <th scope="col" class="align-middle">Amount</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  	
			  </tbody>
			</table>
		</div>
		</div>
	</div>
	</div>
  </div>
  <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
  	<div class="nav op-button">
  		<button type="button" class="button add-button active" id="addpay-tab" data-bs-toggle="tab" data-bs-target="#addpay">Add A payment</button>
  		<button type="button" class="button view-button" id="viewpay-tab" data-bs-toggle="tab" data-bs-target="#viewpay">View by Premise</button>
  	</div>
  	<div class="tab-content" id="nav-paymenttabContent">
		<div class="tab-pane add-form fade show active" id="addpay" role="tabpanel" aria-labelledby="addpay-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a Payment</h1>
				<div class="input-main">

					<div class="input">
						<label for="premise_id">Premise ID</label>
				    	<input type="number" id="premise_id" name="premise_id" placeholder="premise id..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="bill_id">Bill ID</label>
			    	<input type="number" id="bill_id" name="bill_id" placeholder="route id..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="member_id">Member ID</label>
			    	<input type="number" id="member_id" name="member_id" placeholder="Member id..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="remaining_amount">Remaining amount</label>
			    	<input type="number" id="remaining_amount" name="remaining_amount" placeholder="remaining_amount..." required="" autocomplete="off">
			    </div>
			    
			    <button type="submit" class="button form-button add-btn">Add</button>
			    
				</div>
				
			</form>

			<div class="payments">
			<h1 class="member-title">Payment(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Payment ID</th>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Bill ID</th>
			      <th scope="col" class="align-middle">Member ID</th>
			      <th scope="col" class="align-middle">Remaining Amount</th>	
			    </tr>
			  </thead>
			  <tbody>
			    
			  </tbody>
			</table>
		</div>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewpay" role="tabpanel" aria-labelledby="viewpay-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View by premise</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Premise ID</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Premise id" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<div class="payments">
			<h1 class="member-title">Payment(s) by premise</h1>
			<table class="table">	
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Payment ID</th>
			      <th scope="col" class="align-middle">Premise ID</th>
			      <th scope="col" class="align-middle">Bill ID</th>
			      <th scope="col" class="align-middle">Member ID</th>
			      <th scope="col" class="align-middle">Remaining Amount</th>
			      
			    </tr>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
		</div>
		</div>
	</div>
	</div>
</div>
 <div class="tab-pane fade" id="route" role="tabpanel" aria-labelledby="route-tab">
 	<div class="nav op-button">
  		<button type="button" class="button add-button active" id="addr-tab" data-bs-toggle="tab" data-bs-target="#addr">Add A Route</button>
  		<button type="button" class="button view-button" id="viewr-tab" data-bs-toggle="tab" data-bs-target="#viewr">View Premises on route</button>
  	</div>
 	<div class="tab-content" id="nav-routetabContent">
		<div class="tab-pane add-form fade show active" id="addr" role="tabpanel" aria-labelledby="addr-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">Add a Route</h1>
				<div class="input-main">

					<div class="input">
						<label for="plant_id">Plant ID</label>
				    	<input type="number" id="plant_id" name="plant_id" placeholder="plant id" required="">
					</div>

					<div class="input">
						<label for="route_name">Route name</label>
				    	<input type="text" id="route_name" name="route_name" placeholder="route name" required="">
					</div>
			    
			    <button type="submit" class="button form-button add-btn">Add</button>
			    
				</div>
				
			</form>

			<div class="routes">
			<h1 class="member-title">Route(s)</h1>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Route ID</th>
			      <th scope="col" class="align-middle">Route Name</th>
			      <th scope="col" class="align-middle">Plant ID</th>
			      <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			    
			      	<!-- <ul class="list-inline m-0">
                        
                            <li class="list-inline-item">
                                <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#routemodal" data-placement="top" title="Add"><i class="bi-pencil"></i></button>
                            </li>
                            
                    </ul> -->
			     
			    
			  </tbody>
			</table>
		</div>
		</div>
		</div>

		<div class="tab-pane add-form fade" id="viewr" role="tabpanel" aria-labelledby="viewr-tab">
			<div class="row">
			<form action="contact.php" method="POST" class="form section-form" >
				<h1 class="add-title">View a route</h1>
				<div class="input-main">

					<div class="input">
						<label for="fname">Route Name</label>
				    	<input type="text" id="fname" name="fullname" placeholder="Route name" required="">
					</div>
			    
			    <button type="submit" class="button form-button view-btn">View</button>
			    
				</div>
				
			</form>

			<div class="routes">
			<h1 class="member-title">Route(s)</h1>
			<table class="table">	
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Route ID</th>
			      <th scope="col" class="align-middle">Route Name</th>
			      <th scope="col" class="align-middle">Plant ID</th>
			      <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			      	<!-- <ul class="list-inline m-0">
                        
                            <li class="list-inline-item">
                                <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#routemodal" data-placement="top" title="Add"><i class="bi-pencil"></i></button>
                            </li>
                            
                    </ul> -->
			      

			     
			  </tbody>
			</table>
		</div>
		</div>
	</div>
	</div>
	<!-- premise modal -->

	<div class="modal fade" id="routemodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="routemodallabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="routemodallabel">Update Route</h5>
		        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      
		        <form action="contact.php" method="POST" class="modal-body" >
		        	<div class="input-group-main">
					<div class="input">
						<label for="routename">Route Name</label>
				    	<input type="text" id="routename" name="routename" placeholder="Route name..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="plantid">Plan</label>
			    	<input type="number" id="plantid" name="plantid" placeholder="Plant ID..." required="" autocomplete="off">
			    </div>

			    <button type="submit" class="button form-button update-btn">Update</button>
			    
				</div>
			</form>
		      

		    </div>
		  </div>
		</div>
 </div>

 <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
  	<div class="staff">
			<h1 class="member-title">Users</h1>
			<table class="table">	
			  <thead>
			    <tr>
			      <th scope="col" class="align-middle">Staff ID</th>
			      <th scope="col" class="align-middle">Full Name</th>
			      <th scope="col" class="align-middle">Email</th>
			      <th scope="col" class="align-middle">Password</th>
			      <th scope="col" class="align-middle">Options</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			      	<!-- <ul class="list-inline m-0">
                        
                                <li class="list-inline-item">
                                    <button class="btn btn-primary btn-sm rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#staffmodal" data-placement="top" title="Add"><i class="bi-pencil"></i></button>

                                </li>
                                <li class="list-inline-item">
                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bi-trash"></i></button>
                                </li>
                          </ul>  -->   
			   
			  </tbody>
			</table>
		</div>

		<!-- modal for staff -->

		<div class="modal fade" id="staffmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staffmodallabel" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="staffmodallabel">Update staff</h5>
		        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
		      </div>
		      
		        <form action="contact.php" method="POST" class="modal-body" >
		        	<div class="input-group-main">
					<div class="input">
						<label for="fullname">Full Name</label>
				    	<input type="text" id="fullname" name="fullname" placeholder="Name..." required="" autocomplete="off">
					</div>

			    <div class="input">
			    	<label for="useremail">Email</label>
			    	<input type="email" id="useremail" name="useremail" placeholder="Email..." required="" autocomplete="off">
			    </div>

			    <div class="input">
			    	<label for="userpass">Password</label>
			    	<input type="password" id="userpass" name="userpass" placeholder="Password..." required="" autocomplete="off">
			    </div>

			    <button type="submit" class="button form-button update-btn">Update</button>
			    
				</div>
			</form>
		      
		    </div>
		  </div>
		</div>


  </div>
</div>
</div>

<script type="text/javascript" src="jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>