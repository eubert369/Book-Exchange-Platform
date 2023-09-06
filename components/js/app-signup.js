AOS.init();

var uploaded_image = document.getElementById("profileUpload");
var show_password = document.getElementById("show-password");


var pass = document.getElementById("password");
var submit_btn = document.getElementById("sign-up");
var form = document.getElementById("form");

uploaded_image.addEventListener("change", function () {
    var image = document.getElementById("img-icon");
    image.src = URL.createObjectURL(event.target.files[0]);
});

show_password.addEventListener("change", function () {
    var boolValue = 0;
    if (boolValue == 0) {
        document.getElementById("password").setAttribute('type', 'text');
        boolValue = 1;
    } else {
        document.getElementById("password").setAttribute('type', 'password');
        boolValue = 0;
    }
});

pass.addEventListener("input", function () {
    alert("bitch")
    var tip = document.getElementById("pass-tip");
    var tip_color = ["#ff0000", "#ff8b00", "#fff300", "#00ff17", "#ff00e0"];
    var labels = ["Very Weak", "Weak", "Moderate", "Strong", "Very Strong"];

    var strength = 0;

    if (pass.value.match(/[a-z]+/)) {
        strength += 1;
    }
    if (pass.value.match(/[A-Z]+/)) {
        strength += 1;
    }
    if (pass.value.match(/[0-9]+/)) {
        strength += 1;
    }
    if (pass.value.match(/[!@#$%^&*]+/)) {
        strength += 1;
    }
    if (pass.value.length >= 8) {
        strength += 1;
    }

    tip.style.color = tip_color[strength - 1];
    tip.className += "ms-2 mb-3 fw-bold"
    tip.textContent = labels[strength - 1];
});

// submit_btn.addEventListener("click", function () {
//     var file = document.getElementById("profile-input");

//     if (file.files.length > 0) {
//         form.action = "./php-queries/create.php?signup=create";
//         form.submit();
//     } else {
//         alert("Please fill all the inputs");
//     }

// });