function validate() {
  form = document.forms['loginForm'];


  if ((form['firstname'].value == '') || (form['lastname'].value == '')) {
    alert("Must enter first and last name.");
    return false;
  }
  if ((isNaN(form['number'].value)) || (form['number'].value == '')) {
    return false;
  }
  if ( !(form['email'].value.includes("@")) || (form['email'].value = "") )  {
    alert("You must enter a valid email address");
    return false;
  }

  console.log(form['firstname'].value)
  console.log(form['lastname'].value)
  console.log(form['number'].value)
  console.log(form['email'].value)

  return true;
}
