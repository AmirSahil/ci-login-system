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
    $('.user_delete_data').click(function(){
        var id = $(this).attr("id");
        if(confirm("Are you sure you want to delete this?")){
            window.location = "user_delete_data/"+id;
        } else{
            return false;
        }
    });
});