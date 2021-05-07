var selectedRecord = null;
var selectedRecordID = null;
var baseUrl = "http://localhost:5307";

$(document).ready(function () {
	$.ajax({
		type: "GET",
		url: baseUrl + "/members",
		cache: false,
		success: function (response) {
			var data = response.data;
			data.forEach((member) => {
				addRecordToTable(member);
			});
		}
	});
});

function addRecordToTable(data) {
	var members_list = document.getElementById('members_list').getElementsByTagName("tbody")[0];
	var newRecord = members_list.insertRow(members_list.length);

	let cell1 = newRecord.insertCell(0)
	cell1.innerHTML = data.member_id;
	let cell2 = newRecord.insertCell(1)
	cell2.innerHTML = data.name;
	let cell3 = newRecord.insertCell(2)
	cell3.innerHTML = data.email;
	let cell4 = newRecord.insertCell(3)
	cell4.innerHTML = data.telephone;
	let cell5 = newRecord.insertCell(4);
	cell5.innerHTML = `<a onClick="onEdit(this)">Edit</a>
	                <a onClick="onDelete(this)">Delete</a>`;
}

function onFormSubmit() {
	var formData = {};
	formData["name"] = document.getElementById("name").value;
	formData["email"] = document.getElementById("email").value;
	formData["telephone"] = document.getElementById("telephone").value;

	if (selectedRecord == null) {
		saveFormData(formData)
	} else {
		updateFormRecord(formData)
	}
	clearForm();
}



function saveFormData(data) {
	var postData = JSON.stringify(data);
	$.ajax({
		type: "POST",
		url: baseUrl + "/members",
		dataType: 'json',
		data: postData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function (response) {
			addRecordToTable(response.data);
		}
	});
}


function onEdit(td) {
	selectedRecord = td.parentElement.parentElement;
	selectedRecordID = selectedRecord.cells[0].innerHTML;
	document.getElementById("name").value = selectedRecord.cells[1].innerHTML;
	document.getElementById("email").value = selectedRecord.cells[2].innerHTML;
	document.getElementById("telephone").value = selectedRecord.cells[3].innerHTML;
}

function updateFormRecord(data) {
	var updateData = JSON.stringify(data);
	$.ajax({
		type: 'PUT',
		url: baseUrl + "/members/" + selectedRecordID,
		dataType: 'json',
		data: updateData,
		contentType: "application/json; charset=utf-8",
		cache: false,
		success: function () {
			updateTableRecord(data);
		}
	});

}

function updateTableRecord(data) {
	selectedRecord.cells[0].innerHTML = selectedRecordID;
	selectedRecord.cells[1].innerHTML = data.name;
	selectedRecord.cells[2].innerHTML = data.email;
	selectedRecord.cells[3].innerHTML = data.telephone;
}

function onDelete(td) {
    if (confirm('Are you sure you want to delete this record')) {
        var row = td.parentElement.parentElement;
        deleteUserData(row);
    }
  
 }
 
 
 function deleteUserData(row){
    $.ajax({
        type: "DELETE",
        url: baseUrl + "/members/" + row.cells[0].innerHTML,
        cache: false,
        success: function (response) {
            console.log(response.message);
            console.log(selectedRecordID);
        },
    });
  
 }
 

function clearForm() {
	document.getElementById("name").value = "";
	document.getElementById("email").value = "";
	document.getElementById("telephone").value = "";
}

