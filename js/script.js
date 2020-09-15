function checkNIC() {
    var nic = document.getElementById("nic").value;
    //check NIC length
    if (nic.length > 10) {
        document.getElementById("nic").style.border = "red solid 1px";  //red textfield border 
        document.getElementById("nic-descriiptor").innerHTML = "Invalid NIC"; //pass message 
    } else {
        document.getElementById("nic").style.border = "#d2d6de solid 1px";  
        document.getElementById("nic-descriiptor").innerHTML = ""; 
    }
}

function showmemberadding() {
     document.getElementById("myModal").style.display = "block"; 
    document.getElementById("save_newMember").style.display = "block"; // show staff member adding form
}
function cancelmemberadding() {
    document.getElementById("save_newMember").style.display = "none";   //  cancel staff member adding form
    document.getElementById("myModal").style.display = "none";
}
function showcustomeradding() {
     document.getElementById("myModal").style.display = "block"; 
    document.getElementById("save_newcustomer").style.display = "block"; // show customer adding form
}
function cancelcustomeradding() {
    document.getElementById("save_newcustomer").style.display = "none";   //  cancel customer adding form
    document.getElementById("myModal").style.display = "none";
}
function showtreatmentadding() {
    document.getElementById("myModal").style.display = "block"; 
    document.getElementById("save_newtreatment").style.display = "block"; // show treatment adding form   
}
function canceltreatmentadding(){
    document.getElementById("save_newtreatment").style.display = "none";   //  cancel treatment adding form
    document.getElementById("myModal").style.display = "none";
}
function showappointmentadding() {
     document.getElementById("myModal").style.display = "block"; 
    document.getElementById("save_newappointment").style.display = "block"; // show appointment adding form
}
function cancelappointmentadding(){
    document.getElementById("save_newappointment").style.display = "none";   //  cancel appointment adding form
document.getElementById("myModal").style.display = "none";
}

