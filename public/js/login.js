

new WOW().init();

jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });
});

$('nav a').click(function(e){
  e.preventDefault();
  var strAncla=$(this).attr('href');
  $('body,html').stop(true,true).animate({
    scrollTop: $(strAncla).offset().top
  },1000);

});

var $formLogin = $('#login-form');
var $formLost = $('#lost-form');
var $formRegister = $('#register-form');
var $divForms = $('#div-forms');
var $modalAnimateTime = 300;
var $msgAnimateTime = 150;
var $msgShowTime = 2000;


$('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
$('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
$('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
$('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
$('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
$('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

function modalAnimate ($oldForm, $newForm) {
  var $oldH = $oldForm.height();
  var $newH = $newForm.height();
  $divForms.css("height",$oldH);
  $oldForm.fadeToggle($modalAnimateTime, function(){
    $divForms.animate({height: $newH}, $modalAnimateTime, function(){
      $newForm.fadeToggle($modalAnimateTime);
    });
  });
}

function msgFade ($msgId, $msgText) {
  $msgId.fadeOut($msgAnimateTime, function() {
    $(this).text($msgText).fadeIn($msgAnimateTime);
  });
}

function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
  var $msgOld = $divTag.text();
  msgFade($textTag, $msgText);
  $divTag.addClass($divClass);
  $iconTag.removeClass("glyphicon-chevron-right");
  $iconTag.addClass($iconClass + " " + $divClass);
  setTimeout(function() {
    msgFade($textTag, $msgOld);
    $divTag.removeClass($divClass);
    $iconTag.addClass("glyphicon-chevron-right");
    $iconTag.removeClass($iconClass + " " + $divClass);
  }, $msgShowTime);
}

function logueo(){
  var correo = $("#correologin").val();
  var clave = $("#clave").val();
  cla = md5(clave);
  $.ajax({
    dataType:'json',
    type:'post',
    url:uri+"cuentas/cambio/"+correo
  }).done(function(response) {
    if(response != null){
      if (response.estado == 0) {
        document.getElementById("correologin").focus();
        swal("Ups!!", "El usuario se encuentra inhabilitado", "warning");
        $("#correologin").val("");
        $("#clave").val("");
      }
    }

    if(response == false){
      document.getElementById("correologin").focus();
      swal("Ups!!", "El usuario y/o clave son incorrectos", "warning");
      $("#correologin").val("");
      $("#clave").val("");
    }

    if (response != null) {
      if (response.clave != cla) {
        document.getElementById("correologin").focus();
        swal("Ups!!", "El usuario y/o clave son incorrectos", "warning");
        $("#correologin").val("");
        $("#clave").val("");
      }
    }

  });

}
