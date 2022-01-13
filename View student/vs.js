var selectedRow = null

function onformsubmit(){
    var formData = readFormData();
    if(selectedRow == null)
       insertNewRecord(formData);
    else
       updateRecord(formData);

    resetform();

}

function readFormData(){
    var formData = {};
    formData["studentid"] = document.getElementById("studentid").value;
    formData["fullName"] = document.getElementById("fullName").value;
    formData["email"] = document.getElementById("email").value;
    formData["number"] = document.getElementById("number").value;
    return formData;
}

function insertNewRecord(data){
    var table = document.getElementById("studentlist").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.studentid;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.fullName;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.email;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.number;
    cell4 = newRow.insertCell(4);
    cell4.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}


function resetform(){
    document.getElementsById("studentid").value = "";
    document.getElementsById("fullName").value = "";
    document.getElementsById("email").value = "";
    document.getElementsById("number").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("studentid").value = selectedRow.cells[0].innerHTML;
    document.getElementById("fullName").value = selectedRow.cells[1].innerHTML;
    document.getElementById("email").value = selectedRow.cells[2].innerHTML;
    document.getElementById("number").value = selectedRow.cells[3].innerHTML;

}

function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.studentid;
    selectedRow.cells[1].innerHTML = formData.fullName;
    selectedRow.cells[2].innerHTML = formData.email;
    selectedRow.cells[3].innerHTML = formData.number;
}

function onDelete(td) {
   if(confirm('Are you sure to delete this record ?')) {
      row = td.parentElement.parentElement;
      document.getElementById("studentlist").deleteRow(row.rowIndex);
      resetForm();
   } 
}










