document.getElementById("dawinti-booking-form-btn").addEventListener("click", mailSend);

function mailSend(e) {
    e.preventDefault();

    document.getElementById('dawinti-booking-form').style.display = "none";
    document.getElementById('tak-for-besked').style.display = "block";
}