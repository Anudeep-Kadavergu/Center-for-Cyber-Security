$(document).ready(function(){
  $("#b1").css("background","black");
  $("#b1").css("color","white");
    $("#b1").click(function(){
      $("#a1").fadeIn("slow");
        $("#a2").hide();
        $("#a3").hide();
        $("#b1").css("background","black");
        $("#b1").css("color","white");
        $("#b2,#b3").css("color","black");
        $("#b3,#b2").css("background","white");

    });
    $("#b2").click(function(){
       $("#a1").hide();
       $("#a3").hide();
        $("#a2").fadeIn("slow");
        $("#b2").css("background","black");
        $("#b2").css("color","white");
        $("#b1,#b3").css("color","black");
         $("#b3,#b1").css("background","white");
    });
    $("#b3").click(function(){
       $("#a1").hide();
       $("#a2").hide();
        $("#a3").fadeIn("slow");
        $("#b3").css("background","black");
        $("#b3").css("color","white");
        $("#b2,#b1").css("color","black");
         $("#b1,#b2").css("background","white");

    });
});




function myFunction(x) {
    x.classList.toggle("fa-thumbs-down");
    $(document).ready(function(){
    $("#faf").click(function(){
      $("#unliked").show();
       $("#liked").hide();

    });
    });
    $(document).ready(function(){
    $("#faf").click(function(){
      $("#liked").show();
       $("#unliked").hide();

    });
  });
}