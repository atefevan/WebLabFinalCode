function validator() {
    let x = document.getElementById("fname").value;
    let y = document.getElementById("femail");
    let z = document.getElementById("fpass");
    let error;

    if (x.length >= 7) {
        error = "Enter a name between 1 - 6 characters";
    }

    else {
        error = "Input is ok";
    }
    // console.log(error);
    document.getElementById("namevalid").innerHTML = error;
}