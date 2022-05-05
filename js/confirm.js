
var href;
$('.delate').on("click", function (e) {
    e.preventDefault();
    $(".confirm").css({
        "display":"flex",
        "top":"35%"
        });
   href = $(this).attr('href');
    
});
$('.test').on("click",function (e){
    e.preventDefault();

    var choice = $(this).attr('confirm');
    if (choice =='yes') {
        window.location.href = href;
    }
    else
    {
        $(".confirm").css({
             "top":"-20%"
            });   
    }
});
// button waiting active
$('.active').on("click",function (e){
    e.preventDefault();

        $(".ok").css({
             "display": "none"
            });   
        $(".background").css({
             "background": "none"
            });   
    
});
