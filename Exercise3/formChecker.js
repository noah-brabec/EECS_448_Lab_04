function verifyInputs()
{
  var ellsAmount = document.getElementById("ellsAmount").value;
  var GSPAmount = document.getElementById("GSPAmount").value;
  var downsAmount = document.getElementById("downsAmount").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var shipping = document.getElementById("shipping").value;

//Check for blank inputs
  if(ellsAmount == "<0>" || GSPAmount == "<0>" || downsAmount == "<0>")
  {
    alert("You cannot have blank amounts. (Enter 0 for 0)");
    back();
    return false;
  }
  //Check to make sure amounts are above 0
  if(ellsAmount < 0 || GSPAmount < 0 || downsAmount < 0)
  {
    alert("Amount must be greater than 0.");
    back();
    return false;
  }
  //Check that a shipping option is set
  if(shipping != free || shipping != nextDay || shipping != threeDay)
  {
    alert("You must select a radio button.");
    back();
    return false;
  }
  //Checks that username is valid
  if(!(username.indexOf('@') > -1) && !(username.indexOf('.') && > -1))
  {
    alert("Username must be in the form of you@domain.extension");
    back();
    return false;
  }
  alert("Validation Passed");
  return true;
}

//Goes back a page??
function back()
{
  window.history.back();
}
