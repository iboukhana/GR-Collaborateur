 /**************************** Nom ********************************/
$("#save_nom").hide();
$("#cancel_nom").hide();
$("#nom").hide();
$('#pencil_nom').click(function () {
$("#save_nom").show();
$("#cancel_nom").show();
$("#pencil_nom").hide();
"use strict";
$('.clickMe_nom').hide();
$('#' + $('.clickMe_nom').attr('for'))
              .val($('.clickMe_nom').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_nom').click(function () {
$("#save_nom").hide();
$("#cancel_nom").hide();
$("#pencil_nom").show();
$('.blur_nom')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("nom").id;
$('span[for=' + myid + ']')
  .text($('.blur_nom').val())
  .show();
});

$('#cancel_nom').click(function () {
$("#save_nom").hide();
$("#cancel_nom").hide();
$("#pencil_nom").show();
$('.blur_nom')
.hide()
.toggleClass("form-control");
$('.clickMe_nom').show();

});


/**************************** prenom ********************************/
$("#save_prenom").hide();
$("#cancel_prenom").hide();
$("#prenom").hide();
$('#pencil_prenom').click(function () {
$("#save_prenom").show();
$("#cancel_prenom").show();
$("#pencil_prenom").hide();
"use strict";
$('.clickMe_prenom').hide();
$('#' + $('.clickMe_prenom').attr('for'))
              .val($('.clickMe_prenom').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_prenom').click(function () {
$("#save_prenom").hide();
$("#cancel_prenom").hide();
$("#pencil_prenom").show();
$('.blur_prenom')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("prenom").id;
$('span[for=' + myid + ']')
  .text($('.blur_prenom').val())
  .show();
});

$('#cancel_prenom').click(function () {
$("#save_prenom").hide();
$("#cancel_prenom").hide();
$("#pencil_prenom").show();
$('.blur_prenom')
.hide()
.toggleClass("form-control");
$('.clickMe_prenom').show();

});

/**************************** Date de naissance ********************************/
$("#save_date").hide();
$("#cancel_date").hide();
$("#date").hide();
$('#pencil_date').click(function () {
$("#save_date").show();
$("#cancel_date").show();
$("#pencil_date").hide();
"use strict";
$('.clickMe_date').hide();
$('#' + $('.clickMe_date').attr('for'))
              .val($('.clickMe_date').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_date').click(function () {
$("#save_date").hide();
$("#cancel_date").hide();
$("#pencil_date").show();
$('.blur_date')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("date").id;
$('span[for=' + myid + ']')
  .text($('.blur_date').val())
  .show();
});

$('#cancel_date').click(function () {
$("#save_date").hide();
$("#cancel_date").hide();
$("#pencil_date").show();
$('.blur_date')
.hide()
.toggleClass("form-control");
$('.clickMe_date').show();

});

/**************************** Numero de téléphone********************************/
$("#save_numero").hide();
$("#cancel_numero").hide();
$("#numero").hide();
$('#pencil_numero').click(function () {
$("#save_numero").show();
$("#cancel_numero").show();
$("#pencil_numero").hide();
"use strict";
$('.clickMe_numero').hide();
$('#' + $('.clickMe_numero').attr('for'))
              .val($('.clickMe_numero').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_numero').click(function () {
$("#save_numero").hide();
$("#cancel_numero").hide();
$("#pencil_numero").show();
$('.blur_numero')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("numero").id;
$('span[for=' + myid + ']')
  .text($('.blur_numero').val())
  .show();
});

$('#cancel_numero').click(function () {
$("#save_numero").hide();
$("#cancel_numero").hide();
$("#pencil_numero").show();
$('.blur_numero')
.hide()
.toggleClass("form-control");
$('.clickMe_numero').show();

});

/**************************** E_mail ********************************/
$("#save_E_mail").hide();
$("#cancel_E_mail").hide();
$("#E_mail").hide();
$('#pencil_E_mail').click(function () {
$("#save_E_mail").show();
$("#cancel_E_mail").show();
$("#pencil_E_mail").hide();
"use strict";
$('.clickMe_E_mail').hide();
$('#' + $('.clickMe_E_mail').attr('for'))
              .val($('.clickMe_E_mail').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_E_mail').click(function () {
$("#save_E_mail").hide();
$("#cancel_E_mail").hide();
$("#pencil_E_mail").show();
$('.blur_E_mail')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("E_mail").id;
$('span[for=' + myid + ']')
  .text($('.blur_E_mail').val())
  .show();
});

$('#cancel_E_mail').click(function () {
$("#save_E_mail").hide();
$("#cancel_E_mail").hide();
$("#pencil_E_mail").show();
$('.blur_E_mail')
.hide()
.toggleClass("form-control");
$('.clickMe_E_mail').show();

});

/**************************** Expériences hors SQLI ********************************/
$("#save_experience_hors_sqli").hide();
$("#cancel_experience_hors_sqli").hide();
$("#experience_hors_sqli").hide();
$('#pencil_experience_hors_sqli').click(function () {
$("#save_experience_hors_sqli").show();
$("#cancel_experience_hors_sqli").show();
$("#pencil_experience_hors_sqli").hide();
"use strict";
$('.clickMe_experience_hors_sqli').hide();
$('#' + $('.clickMe_experience_hors_sqli').attr('for'))
              .val($('.clickMe_experience_hors_sqli').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_experience_hors_sqli').click(function () {
$("#save_experience_hors_sqli").hide();
$("#cancel_experience_hors_sqli").hide();
$("#pencil_experience_hors_sqli").show();
$('.blur_experience_hors_sqli')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("experience_hors_sqli").id;
$('span[for=' + myid + ']')
  .text($('.blur_experience_hors_sqli').val())
  .show();
});

$('#cancel_experience_hors_sqli').click(function () {
$("#save_experience_hors_sqli").hide();
$("#cancel_experience_hors_sqli").hide();
$("#pencil_experience_hors_sqli").show();
$('.blur_experience_hors_sqli')
.hide()
.toggleClass("form-control");
$('.clickMe_experience_hors_sqli').show();

});

/*************************************************** Activité *******************************************/
/**************************** Date d'entrée ********************************/
$("#save_entree").hide();
$("#cancel_entree").hide();
$("#entree").hide();
$('#pencil_entree').click(function () {
$("#save_entree").show();
$("#cancel_entree").show();
$("#pencil_entree").hide();
"use strict";
$('.clickMe_entree').hide();
$('#' + $('.clickMe_entree').attr('for'))
              .val($('.clickMe_entree').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_entree').click(function () {
$("#save_entree").hide();
$("#cancel_entree").hide();
$("#pencil_entree").show();
$('.blur_entree')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("entree").id;
$('span[for=' + myid + ']')
  .text($('.blur_entree').val())
  .show();
});

$('#cancel_entree').click(function () {
$("#save_entree").hide();
$("#cancel_entree").hide();
$("#pencil_entree").show();
$('.blur_entree')
.hide()
.toggleClass("form-control");
$('.clickMe_entree').show();

});
/**************************** Date sortie ********************************/
$("#save_sortie").hide();
$("#cancel_sortie").hide();
$("#sortie").hide();
$('#pencil_sortie').click(function () {
$("#save_sortie").show();
$("#cancel_sortie").show();
$("#pencil_sortie").hide();
"use strict";
$('.clickMe_sortie').hide();
$('#' + $('.clickMe_sortie').attr('for'))
              .val($('.clickMe_sortie').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_sortie').click(function () {
$("#save_sortie").hide();
$("#cancel_sortie").hide();
$("#pencil_sortie").show();
$('.blur_sortie')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("sortie").id;
$('span[for=' + myid + ']')
  .text($('.blur_sortie').val())
  .show();
});

$('#cancel_sortie').click(function () {
$("#save_sortie").hide();
$("#cancel_sortie").hide();
$("#pencil_sortie").show();
$('.blur_sortie')
.hide()
.toggleClass("form-control");
$('.clickMe_sortie').show();

});

/**************************** Nom Poste ********************************/
$("#save_nposte").hide();
$("#cancel_nposte").hide();
$("#nposte").hide();
$('#pencil_nposte').click(function () {
$("#save_nposte").show();
$("#cancel_nposte").show();
$("#pencil_nposte").hide();
"use strict";
$('.clickMe_nposte').hide();
$('#' + $('.clickMe_nposte').attr('for'))
              .val($('.clickMe_nposte').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_nposte').click(function () {
$("#save_nposte").hide();
$("#cancel_nposte").hide();
$("#pencil_nposte").show();
$('.blur_nposte')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("nposte").id;
$('span[for=' + myid + ']')
  .text($('.blur_nposte').val())
  .show();
});

$('#cancel_nposte').click(function () {
$("#save_nposte").hide();
$("#cancel_nposte").hide();
$("#pencil_nposte").show();
$('.blur_nposte')
.hide()
.toggleClass("form-control");
$('.clickMe_nposte').show();

});


/**************************** Nom projet ********************************/
$("#save_nprojet").hide();
$("#cancel_nprojet").hide();
$("#nprojet").hide();
$('#pencil_nprojet').click(function () {
$("#save_nprojet").show();
$("#cancel_nprojet").show();
$("#pencil_nprojet").hide();
"use strict";
$('.clickMe_nprojet').hide();
$('#' + $('.clickMe_nprojet').attr('for'))
              .val($('.clickMe_nprojet').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_nprojet').click(function () {
$("#save_nprojet").hide();
$("#cancel_nprojet").hide();
$("#pencil_nprojet").show();
$('.blur_nprojet')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("nprojet").id;
$('span[for=' + myid + ']')
  .text($('.blur_nprojet').val())
  .show();
});

$('#cancel_nprojet').click(function () {
$("#save_nprojet").hide();
$("#cancel_nprojet").hide();
$("#pencil_nprojet").show();
$('.blur_nprojet')
.hide()
.toggleClass("form-control");
$('.clickMe_nprojet').show();

});
/**************************** Nom Responsable ********************************/
$("#save_nresponsable").hide();
$("#cancel_nresponsable").hide();
$("#nresponsable").hide();
$('#pencil_nresponsable').click(function () {
$("#save_nresponsable").show();
$("#cancel_nresponsable").show();
$("#pencil_nresponsable").hide();
"use strict";
$('.clickMe_nresponsable').hide();
$('#' + $('.clickMe_nresponsable').attr('for'))
              .val($('.clickMe_nresponsable').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_nresponsable').click(function () {
$("#save_nresponsable").hide();
$("#cancel_nresponsable").hide();
$("#pencil_nresponsable").show();
$('.blur_nresponsable')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("nresponsable").id;
$('span[for=' + myid + ']')
  .text($('.blur_nresponsable').val())
  .show();
});

$('#cancel_nresponsable').click(function () {
$("#save_nresponsable").hide();
$("#cancel_nresponsable").hide();
$("#pencil_nresponsable").show();
$('.blur_nresponsable')
.hide()
.toggleClass("form-control");
$('.clickMe_nresponsable').show();

});
/**************************** Description ********************************/
$("#save_desc").hide();
$("#cancel_desc").hide();
$("#desc").hide();
$('#pencil_desc').click(function () {
$("#save_desc").show();
$("#cancel_desc").show();
$("#pencil_desc").hide();
"use strict";
$('.clickMe_desc').hide();
$('#' + $('.clickMe_desc').attr('for'))
              .val($('.clickMe_desc').text())
              .toggleClass("form-control")
              .show()
              .focus();
});

$('#save_desc').click(function () {
$("#save_desc").hide();
$("#cancel_desc").hide();
$("#pencil_desc").show();
$('.blur_desc')
  .hide()
  .toggleClass("form-control");
var myid = document.getElementById("desc").id;
$('span[for=' + myid + ']')
  .text($('.blur_desc').val())
  .show();
});

$('#cancel_desc').click(function () {
$("#save_desc").hide();
$("#cancel_desc").hide();
$("#pencil_desc").show();
$('.blur_desc')
.hide()
.toggleClass("form-control");
$('.clickMe_desc').show();

});


