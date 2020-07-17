var toggle=$(".toggle");
var links=$(".links");

toggle.click(function(e){
    links.toggleClass("hide");
});

var email=$("#email");

$("#submit").click(function(e){
    $.ajax({ 
    type: 'POST',
    data:{'email':email.val()},
    url: 'user.php', 
    success: function(data){
        $("#response").text(data);}
    });
})