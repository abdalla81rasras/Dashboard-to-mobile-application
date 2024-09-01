
function showThirdOption() {
    var thirdOption = document.getElementById("third-option");
    if (document.querySelector('input[name="options"]:checked').value !== "Cash") {
      thirdOption.style.display = "none";
    } else {
      thirdOption.style.display = "block";
    }
  }