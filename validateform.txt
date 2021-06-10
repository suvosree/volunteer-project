function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["Email"].value;
  var z = document.forms["myForm"]["Contact"].value;


  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
if (y == "") {
    alert("email must be filled out");
    return false;
  }
if (z == "") {
    alert("Name must be filled out");
    return false;
  }
}