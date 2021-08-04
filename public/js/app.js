$(document).ready(function(){

    $("#submit").click(function(e){
        e.preventDefault();

        if($("#from").val() == null){
            alert("Please select your current city"); 
        }

        if($("#destination").val() == null){
            alert("Please select your destination"); 
        }

        if($("#quantity").val() == null){
            alert("Please select your baggage weight"); 
        }

    });

});
