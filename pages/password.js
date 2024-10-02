
function checkPassword() {
    var password = document.getElementById("password").value;
    
    if (password === "lajibolala") {
        window.location.href = "paidcontent.html";
    } else {
        alert("Incorrect password. Please try again.");
    }
}

