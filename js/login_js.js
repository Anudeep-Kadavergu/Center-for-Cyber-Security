$(document).ready(function(){
  $("#btn_fac").css("background","black");
  $("#btn_fac").css("color","white");
    $("#btn_fac").click(function(){
      $(".login_student").slideUp("slow");
        $(".login_faculty").slideDown("slow");
        $("#btn_fac").css("background","black");
        $("#btn_fac").css("color","white");
        $("#btn_std").css("color","black");
        $("#btn_std").css("background","white");

    });
    $("#btn_std").click(function(){
       $(".login_student").slideDown("slow");
        $(".login_faculty").slideUp("slow");
        $("#btn_std").css("background","black");
        $("#btn_std").css("color","white");
        $("#btn_fac").css("color","black");
        $("#btn_fac").css("background","white");
    });

});