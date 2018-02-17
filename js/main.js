function showRow () {

    $(".projbutt").click(function () { 
        $(document).find(".projs").show();
        $(document).find(".projbutt").hide();
        $(document).find(".projbutts").show();
    });

    $(".projbutta").click(function () { 
        $(document).find(".proja").show();
        $(document).find(".projbutta").hide();
        $(document).find(".projbuttas").show();
    });
}

function hideRow () {
    $(".projbutts").click(function () { 
    	$(document).find(".projs").hide();
    	$(document).find(".projbutts").hide();
    	$(document).find(".projbutt").show();
    });

    $(".projbuttas").click(function () { 
    	$(document).find(".proja").hide();
    	$(document).find(".projbuttas").hide();
    	$(document).find(".projbutta").show();
    });
}

$(document).ready(function(){
showRow();
hideRow();
$(this).find(".projs").hide(); 
$(this).find(".proja").hide(); 
$(this).find(".projbutts").hide();
$(this).find(".projbuttas").hide();
});