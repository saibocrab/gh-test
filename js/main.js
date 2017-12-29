// tooltip megjeleneítéséhez kell
$(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

// a main-ben levő my-test osztályú kattintott p elem (this) eltüntetése; a document.ready azt eredményezi, 
// hogy mindenképpen megvárja, amíg a teljes oldal betöltődik
$(document).ready(function() {
    $("main p.my-test").click(function() {
        $(this).hide();
    });
});

// menü animáció: a home id-jú linkre kattintva az oldalt lassan elhalványítjuk, mielőtt átváltunk a másikra
$("#home").click(function(ev) {
    //letiltjuk a click-et, megakadályozzuk a normál működést
    ev.preventDefault();
    //eltesszük a kattintott elemet egy változóba
    var link = $(this);
    // a main-t animáljuk - elhalványítjuk 2 másodperc alatt, majd elküldjük a cél href-re
    $("main").animate({
        opacity: '0'
    }, 2000, function() {
        document.location = link.attr("href");
    });
});

// menü animáció: a home2 id-jú linkre kattintva az oldalt lassan elhalványítjuk, mielőtt átváltunk a másikra,
// de a paramétereket az elemnél adjuk meg
$("#home2").click(function(ev) {
    //letiltjuk a click-et, megakadályozzuk a normál működést
    ev.preventDefault();
    //eltesszük a kattintott elemet egy változóba
    var link = $(this);
    // elkérjük az objektumtól a beállított paramétereke, ha nincsenek, akkor default értéket állítunk
    var property = link.data("myproperty") || "opacity";
    var value = link.data("myvalue") || "0";
    var speed = link.data("myspeed") || 3000;
    // az animate első paramétere objektum, elkészítjük
    var settings = {};
    settings[property] = value;
    // a main-t animáljuk - elhalványítjuk, majd elküldjük a cél href-re
    $("main").animate(settings, speed, function() {
        document.location = link.attr("href");
    });
});

// láncolás, a #mychain elemen: legyen piros a szöveg, majd zárja be 2 másodperc alatt, 
// majd nyissa ki 2 másodperc alatt
$("#mychain").css("color", "red").slideUp(2000).slideDown(2000);

// keresés az oldalon levő p elemekben
$("#mysearch input").on("keyup", function(ev) {
    var search = ev.target.value.toLowerCase();
    $("#mysearchresult").text("");
    if (search) {
        $.each($("p"), function(index, item) {
            //a jQuery objektumot javascript változóvá konvertálom
            var item = $(item);
            var content = item.html().toLowerCase();
            if (content.indexOf(search) != -1) {
                $("#mysearchresult").append(content + "<br/>");
            }
        });
    }
});

// a myfilteredTable id-jű táblázat tbody-ban levő sorainak szűrése
$("#myfilter input").on("keyup", function(ev) {
    var filter = ev.target.value.toLowerCase();
    // minen egyes szűrés előtt visszaállunk a minden sor látszik a tbody-ban állapotra
    $.each($("#myfilteredTable tbody tr"), function(index, item) {
        $(item).show();
    });
    if (filter) {
        $.each($("#myfilteredTable tbody tr"), function(index, item) {
            //a jQuery objektumot javascript változóvá konvertálom
            var item = $(item);
            var content = item.html().toLowerCase();
            if (content.indexOf(filter) == -1) {
                $(item).hide();
            }
        });
    }
});