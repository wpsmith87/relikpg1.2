function showRow () {

    $(".projbutt").click(function () { 
        $(document).find(".projs").show();
        $(document).find(".projbutt").hide();
        $(document).find(".projbutts").show();
    });
}

function hideRow () {
    $(".projbutts").click(function () { 

$(document).find(".projs").hide();
$(document).find(".projbutts").hide();
$(document).find(".projbutt").show();

    });
}

$(document).ready(function(){
showRow();
hideRow();
$(this).find(".projs").hide(); 
$(this).find(".projbutts").hide();
});