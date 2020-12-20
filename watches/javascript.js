function checkForm() {
  return (checkLetters() && checkRadios("power") && checkRadios("type") && checkRadios("charge"));
}

function checkRadios(rname) {
  var radios = document.getElementsByName(rname);
  var formValid = false;
  var i = 0;

  while (!formValid && i < radios.length) {
    if (radios[i].checked)
      formValid = true;
    i++;
  }

  if (!formValid) alert("Must check some option on all questions!");
  return formValid;
}

function checkLetters() {
  var fname = document.getElementById("firstname");
  var lname = document.getElementById("lastname");
  var letters = /^[A-Za-z]+$/;
  if (fname.value.match(letters) && lname.value.match(letters)) {
    return true;
  }
  else {
    alert("Names can only contain letters");
    return false;
  }
}