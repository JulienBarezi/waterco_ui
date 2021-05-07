var baseUrl = "http://localhost:5307";

function onLoginDetailsSubmit() {
    var formData = {};
    formData["email_address"] = document.getElementById("email_address").value;
    formData["password"] = document.getElementById("password").value;

    userLogin(formData);
}




// User Login
function userLogin(data) {
    var postData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: baseUrl + "/staff/signin",
        dataType: 'json',
        data: postData,
        contentType: "application/json; charset=utf-8",
        cache: false,
        success: function (response) {
            var data = response.user;
            console.log(data);

            console.log("token:" + response.token);

            document.cookie = 'authToken=' + response.token
            window.location.href = "./dashboard.php";
        },
        headers: {
            Accept: "application/json; charset=utf-8",
            Content_Type: "application/json; charset=utf-8",
            Authorization: getCookie('authToken')
        }


    });
}



// Get cookie
function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");

    // Loop through the array elements
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");

        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if (name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }

    // Return null if not found
    return null;
}


function onUserDetailsSubmit() {
    var formData = {};
    formData["email_address"] = document.getElementById("email_address").value;
    formData["full_name"] = document.getElementById("full_name").value;
    formData["password"] = document.getElementById("password").value;
    addUser(formData);
    window.location.href = "./index.php";
    clearUserForm();
  
 }
 
 
  
 function addUser(data) {
    var postData = JSON.stringify(data);
    $.ajax({
        type: "POST",
        url: baseUrl + "/staff/",
        dataType: 'json',
        data: postData,
        contentType: "application/json; charset=utf-8",
        cache: false,
        success: function (response) {
            var data = response.data;
            console.log(data);
            addUserRecordToTable(data);
            window.location.href = "./index.php";
           
        },
        headers:{
            Accept:"application/json; charset=utf-8",
            Content_Type:"application/json; charset=utf-8",
            Authorization: getCookie('authToken')
        }
      
       
    });
 }
 
 
 // User sign-Up (Create User)
 function addUserRecordToTable(data) {
    var staffs_list = document.getElementById("staffs_list").getElementsByTagName("tbody")[0];
    var newRecord =staffs_list.insertRow(staffs_list.length);
  
    var cell1 = newRecord.insertCell(0);
    cell1.innerHTML = data.staff_id;
    var cell2 = newRecord.insertCell(1);
    cell2.innerHTML = data.full_name;
    var cell3 = newRecord.insertCell(2);
    cell3.innerHTML = data.email_address;
    var cell4 = newRecord.insertCell(3);
    cell4.innerHTML = data.password;
    var cell5 = newRecord.insertCell(4);
    cell5.innerHTML = '<a onClick="onDeleteS(this)">Delete</a>';  
 }
 
 function onEditS(td) {
	selectedRecord = td.parentElement.parentElement;
	selectedRecordID = selectedRecord.cells[0].innerHTML;
	document.getElementById("full_name").value = selectedRecord.cells[1].innerHTML;
	document.getElementById("email_address").value = selectedRecord.cells[2].innerHTML;
	document.getElementById("password").value = selectedRecord.cells[3].innerHTML;
}

function updateFormRecordS(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/staff/" + selectedRecordID,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecordS(data);
		}
	});

}

function updateTableRecordS(data) {
	selectedRecord.cells[0].innerHTML = selectedRecordID;
	selectedRecord.cells[1].innerHTML = data.full_name;
	selectedRecord.cells[2].innerHTML = data.email_address;
	selectedRecord.cells[3].innerHTML = data.password;
}

function onDeleteS(td) {
	if (confirm("Are you sure you want to delete?")) {
		let row = td.parentElement.parentElement;
		document.getElementById("staffs_list").deleteRow(row.rowIndex);
		clearFormS();
	}
}

function clearFormS() {
	document.getElementById("full_name").value = "";
	document.getElementById("email_address").value = "";
	document.getElementById("password").value = "";
}

function onDeleteS(td) {
    if (confirm('Are you sure you want to delete this record')) {
        var row = td.parentElement.parentElement;
        deleteUserData(row);
        clearFormS();
       
    }
  
 }
 
 
 function deleteUserData(row){
    $.ajax({
        type: "DELETE",
        url: baseUrl + "/staff/" + row.cells[1].innerHTML,
        cache: false,
        success: function (response) {
            console.log(response.message);
            console.log(selectedRecordID);
        },
        headers:{
            Authorization: `token ${getCookie('authToken')}`
        }
    });
  
 }
