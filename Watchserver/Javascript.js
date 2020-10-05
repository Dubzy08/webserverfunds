
function checkradio1() {
  var radios = document.getElementsByName("power");
  var mainspring = document.getElementById("Main Spring")
  var formValid = 1;

  var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) 
          formValid = 1;
        i++;        
    }

    if (!formValid) alert("Q1: Must check some option!");
    return formValid;
}​

function checkletters(fname, lname) {
  var letters = /^[A-Za-z]+$/;
  if ((fname.value.match(letters)) && (lname.value.match(letters))) {
      {
          return true;
      }
  }
  else {
      alert("Names can only contain letters");
      return false;
  }
}