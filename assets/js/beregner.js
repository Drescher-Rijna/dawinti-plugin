// VARIABLER
var rum = document.getElementById("select-rum");
let rumNummer = parseInt(rum.value);
var rum1 = true;

var antalPers = document.getElementById("antal-personer");
let Personer = parseInt(antalPers.value);
let antalPersoner = parseInt(antalPers.innerText);

var antalChild = document.getElementById("antal-children");
let children = parseInt(antalChild.value);


let totalDoegn = null;

// BRUGEREN SKAL KUNNE VÆLGE ET RUM AT VILLE OVERNATTE I OG SKIFTE SIT VALG EFTER BEHOV
rum.addEventListener("change", () => {
    rumNummer = rum.value;
    console.log(rumNummer);
    
    var enPerson = document.createElement("option");
    var toPerson = document.createElement("option");
    var trePerson = document.createElement("option");
    var firePerson = document.createElement("option");
    var femPerson = document.createElement("option");
    var seksPerson = document.createElement("option");

    if (rumNummer == "rum-1") {
        antalPers.remove(enPerson);
        antalPers.remove(toPerson);
        antalPers.remove(trePerson);
        antalPers.remove(firePerson);
        antalPers.remove(femPerson);
        antalPers.remove(seksPerson);

        toPerson.text = "2. personer";
        toPerson.value = "400";
        toPerson.selected = true;

        trePerson.text = "3. personer";
        trePerson.value = "500";

        firePerson.text = "4. personer";
        firePerson.value = "600";

        antalPers.add(toPerson);
        antalPers.add(trePerson);
        antalPers.add(firePerson);
        Personer = parseInt(antalPers.value);
        antalPersoner = parseInt(antalPers.innerText);
    }

    if (rumNummer == "rum-2") {
        antalPers.remove(enPerson);
        antalPers.remove(toPerson);
        antalPers.remove(trePerson);
        antalPers.remove(firePerson);
        antalPers.remove(femPerson);
        antalPers.remove(seksPerson);

        toPerson.text = "2. personer";
        toPerson.value = "400";
        toPerson.selected = true;

        trePerson.text = "3. personer";
        trePerson.value = "500";

        firePerson.text = "4. personer";
        firePerson.value = "600";

        femPerson.text = "5. personer";
        femPerson.value = "700";

        seksPerson.text = "6. personer";
        seksPerson.value = "800";

        antalPers.add(toPerson);
        antalPers.add(trePerson);
        antalPers.add(firePerson);
        antalPers.add(femPerson);
        antalPers.add(seksPerson);
        Personer = parseInt(antalPers.value);
        antalPersoner = parseInt(antalPers.innerText);
    }

    if (rumNummer == "rum-3") {
        antalPers.remove(enPerson);
        antalPers.remove(toPerson);
        antalPers.remove(trePerson);
        antalPers.remove(firePerson);
        antalPers.remove(femPerson);
        antalPers.remove(seksPerson);

        enPerson.text = "1. person";
        enPerson.value = "200";
        enPerson.selected = true;

        toPerson.text = "2. personer";
        toPerson.value = "350";

        antalPers.add(enPerson);
        antalPers.add(toPerson);
        Personer = parseInt(antalPers.value);
        antalPersoner = parseInt(antalPers.innerText);
    }

    if (rumNummer == "rum-4") {
        antalPers.remove(enPerson);
        antalPers.remove(toPerson);
        antalPers.remove(trePerson);
        antalPers.remove(firePerson);
        antalPers.remove(femPerson);
        antalPers.remove(seksPerson);

        toPerson.text = "2. person";
        toPerson.value = "350";
        toPerson.selected = true;

        trePerson.text = "3. personer";
        trePerson.value = "400";

        firePerson.text = "4. personer";
        firePerson.value = "450";

        antalPers.add(toPerson);
        antalPers.add(trePerson);
        antalPers.add(firePerson);
        Personer = parseInt(antalPers.value);
        antalPersoner = parseInt(antalPers.innerText);
    }

    console.log(Personer);
});



// BRUGEREN SKAL KUNNE VÆLGE ANTALLET AF PERSONER DER KOMMER MED TIL OVERNATNINGEN OG SKIFTE EFTER BEHOV
antalPers.addEventListener("change", () => {
    Personer = parseInt(antalPers.value);
    antalPersoner = parseInt(antalPers.options[antalPers.selectedIndex].innerText);
    console.log(antalPersoner)

    var nulChild = document.createElement("option");
    var enChild = document.createElement("option");
    var toChild = document.createElement("option");
    var treChild = document.createElement("option");
    var fireChild = document.createElement("option");
    var femChild = document.createElement("option");

    if (antalPersoner == 1) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        antalChild.add(nulChild);

        children = parseInt(antalChild.value);
    }

    if (antalPersoner == 2) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        enChild.text = "1. barn";
        enChild.value = "1";

        antalChild.add(nulChild);
        antalChild.add(enChild);

        children = parseInt(antalChild.value);
    }

    if (antalPersoner == 3) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        enChild.text = "1. barn";
        enChild.value = "1";

        toChild.text = "2. børn";
        toChild.value = "2";

        antalChild.add(nulChild);
        antalChild.add(enChild);
        antalChild.add(toChild);

        children = parseInt(antalChild.value);
    }

    if (antalPersoner == 4) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        enChild.text = "1. barn";
        enChild.value = "1";

        toChild.text = "2. børn";
        toChild.value = "2";

        treChild.text = "3. børn";
        treChild.value = "3";


        antalChild.add(nulChild);
        antalChild.add(enChild);
        antalChild.add(toChild);
        antalChild.add(treChild);

        children = parseInt(antalChild.value);
    }

    if (antalPersoner == 5) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        enChild.text = "1. barn";
        enChild.value = "1";

        toChild.text = "2. børn";
        toChild.value = "2";

        treChild.text = "3. børn";
        treChild.value = "3";

        fireChild.text = "4. børn";
        fireChild.value = "4";


        antalChild.add(nulChild);
        antalChild.add(enChild);
        antalChild.add(toChild);
        antalChild.add(treChild);
        antalChild.add(fireChild);

        children = parseInt(antalChild.value);
    }

    if (antalPersoner == 6) {
        antalChild.remove(nulChild);
        antalChild.remove(enChild);
        antalChild.remove(toChild);
        antalChild.remove(treChild);
        antalChild.remove(fireChild);
        antalChild.remove(femChild);

        nulChild.text = "Ingen";
        nulChild.value = "0";
        nulChild.selected = true;

        enChild.text = "1. barn";
        enChild.value = "1";

        toChild.text = "2. børn";
        toChild.value = "2";

        treChild.text = "3. børn";
        treChild.value = "3";

        fireChild.text = "4. børn";
        fireChild.value = "4";

        femChild.text = "5. børn";
        femChild.value = "5";


        antalChild.add(nulChild);
        antalChild.add(enChild);
        antalChild.add(toChild);
        antalChild.add(treChild);
        antalChild.add(fireChild);
        antalChild.add(femChild);

        children = parseInt(antalChild.value);
    }
});





// BRUGEREN SKAL KUNNE VÆLGE ANTALLET AF BØRN DER KOMMER MED TIL OVERNATNINGEN OG SKIFTE EFTER BEHOV
antalChild.addEventListener("change", () => {
    children = parseInt(antalChild.value);
});


// BRUGEREN SKAL IKKE KUNNE VÆLGE EN DATO FØR DAGENS DATO
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
document.getElementById('start-dato-input').setAttribute('min', minDate);
document.getElementById('slut-dato-input').setAttribute('min', minDate);



// BEREGNEREN SKAL HAVE STARTDATO OG SLUTDATO TIL AT BLIVE ANTALLET AF DAGE ISTEDET FOR TO DATOER
function GetDays() {
    var start = new Date(document.getElementById("start-dato-input").value);
    var slut = new Date(document.getElementById("slut-dato-input").value);

    console.log((slut.getTime()-start.getTime()) / (1000 * 60 * 60 * 24));

    return parseInt((slut.getTime()-start.getTime()) / (1000 * 60 * 60 * 24));
};


// BEREGNEREN HAR BRUG FOR AT BRUGEREN TRYKKER PÅ EN SUBMIT KNAP SÅ DEN KAN LAVE BEREGNINGEN
document.getElementById("dawinti-beregner-form").addEventListener("submit", (e) => {
    e.preventDefault();

    // SÆT TOTAL ANTAL DØGN TIL ANTALLET AF DØGN BEREGNET AF GETDAYS FUNKTIONEN TIL IF-SÆTNING
    totalDoegn = GetDays();

    console.log(Personer);
    console.log(children);
    console.log(totalDoegn);

    // FEJLMEDDELELSE TIL HVIS BRUGEREN VÆLGER ET ANTAL BØRN DER ER HØJERE END ANTALLET AF PERSONER DER KOMMER I ALT
    if (children > antalPersoner || children == antalPersoner) {
        document.getElementById("error-message-container").style.display = "block";
        document.getElementById("error-message").innerHTML = "FEJL: Antallet af børn kan ikke være højere end eller det samme som antallet af personer der kommer i alt.";
        return "";
    }

    // FEJLMEDDELELSE TIL HVIS BRUGEREN VÆLGER SLUT DATO DER ER MINDRE END START DATOEN
    if (totalDoegn < 0 || totalDoegn == 0) {
        document.getElementById("error-message-container").style.display = "block";
        document.getElementById("error-message").innerHTML = "FEJL: Slut datoen kan ikke være mindre end start datoen eller det samme som start datoen";
        return "";
    }

    var pris;

    // HVIS BÅDE ANTAL BØRN OG STARTDATO OG SLUTDATO ER UDFYLDT KORREKT, BEREGN PRISEN
    if (children > 0 && totalDoegn > 0) {
        pris = ((Math.round(((((antalPersoner*2)-children)/(antalPersoner*2)) * Personer)/10) * 10) * totalDoegn);
    } else {
        pris = Personer * totalDoegn;
    }

    document.getElementById("total-pris").innerHTML = "Det vil koste: " + pris + " kr.";
});




  
