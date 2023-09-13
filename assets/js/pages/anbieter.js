

var idm = "";

$(document).ready(function(){
    $("#supprimer").click(function(){
        //alert("ok");
        $.ajax({
            "url":"./PHP/delete.php",
            "method":"POST",
            "data":{id:idm},
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

new gridjs.Grid({columns:[
"#","Name","Adresse","Telefonnummer","Website","Liefergebiet","Gründung","Mitarbeiter","Umsatzsteuer","Handelsregister","Email","Kategorie",
],pagination:{limit:50},sort:!0,search:!0,
server: {
    url: './PHP/anbieter.php',
    then: data => data.map(prop => [prop.path,prop.ref, prop.titre,prop.prix, prop.Adresse, prop.Type , prop.idm ])
  } ,
//data:[["","#SK2540","Neal Matthews","07 Oct, 2021","$400","Vente","View Details"],["","#SK6563","Kenneth Linck","09 Oct, 2021","$254","Location Saisoniare","View Details"]]
})
.render(document.getElementById("table-anbieter")),flatpickr("#order-date",{defaultDate:new Date,dateFormat:"d M, Y"});



function openmodal(id)
{
    $('#deleteprp').modal('toggle');
    idm = id;
}



