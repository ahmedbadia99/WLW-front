

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

new gridjs.Grid({columns:[{name:"#",sort:{enabled:!1},formatter:(_, row) => gridjs.html(`<img class='rounded-circle avatar-xl' alt='200x200' src='./images/proprety/${row.cells[0].data}' data-holder-rendered='true'></img>`)}
,{name:"REF",formatter:function(a){return gridjs.html('<span class="fw-semibold">'+a+"</span>")}}
,"Titre","Prix","Adresse","Statu",
{name:"Action",sort:{enabled:!1},formatter:(_, row) => gridjs.html(`<div class='d-flex gap-3'><a href='modify-proprety.php?id=${row.cells[6].data}&type=Terrain' data-bs-toggle='tooltip' data-bs-placement='top' title='Edit' class='text-success'><i class='mdi mdi-pencil font-size-18'></i></a><a onclick='openmodal(${row.cells[6].data})' data-bs-toggle='tooltip' data-bs-placement='top' title='Delete' class='text-danger'><i class='mdi mdi-delete font-size-18'></i></a></div>`)}],pagination:{limit:8},sort:!0,search:!0,
server: {
    url: './PHP/terrain.php',
    then: data => data.map(prop => [prop.path,prop.ref, prop.titre,prop.prix, prop.Adresse, prop.Type , prop.idm ]),
  } ,
//data:[["","#SK2540","Neal Matthews","07 Oct, 2021","$400","Vente","View Details"],["","#SK6563","Kenneth Linck","09 Oct, 2021","$254","Location Saisoniare","View Details"]]
})
.render(document.getElementById("table-terrain")),flatpickr("#order-date",{defaultDate:new Date,dateFormat:"d M, Y"});



function openmodal(id)
{
    $('#deleteprp').modal('toggle');
    idm = id;
}



