$(document).ready(function(){
    $('.delete_data').click(function(){
        var id = $(this).attr("id");
        if(confirm("Are you sure you want to delete this?")){
            window.location = "delete_data/"+id;
        } else{
            return false;
        }
    });
});

$(document).ready(function(){
    //create variable
    var counts = 0;
    $(".addtocart").click(function () {
    //to number and increase to 1 on each click
       counts += +1;
       $(".cart-counter").animate({
    //show span with number
                 opacity: 1
             }, 300, function () {
    //write number of counts into span
                 $(this).text(counts);
             });
         }); 
 });


