document.getElementById("dawinti-booking-form-btn").addEventListener("click", mailSend);

function mailSend(e) {
    e.preventDefault();

    document.getElementById('dawinti-booking-form').style.display = "none";
    document.getElementById('tak-for-besked').style.display = "block";
}

//BRUGEREN SKAL IKKE KUNNE SENDE EN FORESPØRGSEL OM ET EVENT TIDLIGERE END EN UGE PÅ FORHÅND
var dtToday = new Date();
    
var month = dtToday.getMonth() + 1;
var day = dtToday.getDate();
var year = dtToday.getFullYear();

    if(month < 10) {
        month = '0' + month.toString();
    }
        
    if(day < 10) {
        day = '0' + day.toString();
    }
        
    
var minDate = year + '-' + month + '-' + day;
document.getElementById('dawinti-event-date').setAttribute('min', minDate);
