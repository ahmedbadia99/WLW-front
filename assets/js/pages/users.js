

var idm = "";

$(document).ready(function(){
    $("#deleteuser").click(function(){
         var id = $("#iddeleteuser").val();
        //alert("ok");
        $.ajax({
            "url":"./PHP/deleteuser.php",
            "method":"POST",
            "data":{id:id},
             success:function(result)
             {
                if(result == "OK")
                {
                    location.reload();
                }
                 
            } 
        })
    
    });
    $("#edit_users").click(function(){
        //alert("ok");
        var id = $("#id_users").val();
        var password = $("#user_password2").val();
        var email = $("#User_email2").val();
        var username =$("#Username2").val();
        var idrole = $("#id_role2").val() ;
        if($("#user_role2").val() != 0)
        {
            idrole = $("#user_role2").val() ;
        }


        $.ajax({
            "url":"./PHP/updateuser.php",
            "method":"POST",
            "data":{id:id,
                    password : password,
                    email:email,
                    username:username,
                    idrole:idrole},
             success:function(result)
             {
                if(result == "OK")
                {
                    location.reload();
                }
                 
            } 
        })
    
    });

})

new gridjs.Grid({columns:["#"
,"Username","Email","Role",
{name:"Action",sort:{enabled:!1},formatter:(_, row) => gridjs.html(`<div class='d-flex gap-3'><a onclick='usermodaledit(${row.cells[4].data})' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit' class='text-success'><i class='mdi mdi-pencil font-size-18'></i></a><a onclick='usermodaldelete(${row.cells[4].data})' data-bs-toggle='tooltip' data-bs-placement='top' title='Delete' class='text-danger'><i class='mdi mdi-delete font-size-18'></i></a></div>`)}],pagination:{limit:8},sort:!0,search:!0,
server: {
    url: './PHP/users.php',
    then: data => data.map(prop => [prop.id,prop.Username, prop.Email,prop.name, prop.id ]),
  } ,
//data:[["","#SK2540","Neal Matthews","07 Oct, 2021","$400","Vente","View Details"],["","#SK6563","Kenneth Linck","09 Oct, 2021","$254","Location Saisoniare","View Details"]]
})
.render(document.getElementById("table-contacts-list")),flatpickr("#order-date",{defaultDate:new Date,dateFormat:"d M, Y"});



function usermodaledit(id)
{
    
    $.ajax({
        "url":"PHP/selectuser.php",
        "method":"POST",
        "data":{id:id},
        success:function(result)
        {
            var user = jQuery.parseJSON(result);
            $("#id_users").val(user[0]["id"]);
            $("#Username2").val(user[0]["Username"]);
            $("#User_email2").val(user[0]["Email"]);
            $("#user_password2").val(user[0]["Password"]);
            $("#id_role2").val(user[0]["idrole"]);

        }
    })
    $('#usermodaledit').modal('toggle');
    //idm = id;
}
function usermodaldelete(id)
{
    $("#iddeleteuser").val(id);
    $('#deleteusermodal').modal('toggle');
    //idm = id;
}



