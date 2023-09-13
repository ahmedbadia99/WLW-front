

/*$.ajax({
    "url":"../PHP/appartement.php",
    "method":"POST",
    "data":{},
     success:function(result)
     {
         //alert(rep1);
         var obj = JSON.parse(result);

         for (var i = 0; i < obj.length; i++) {
         }
        }
    });*/


new gridjs.Grid({columns:[{name:"#",sort:{enabled:!1},formatter:(_, row) => gridjs.html(`<img class='rounded-circle avatar-xl' alt='200x200' src='./images/proprety/${row.cells[0].data}' data-holder-rendered='true'></img>`)}
,{name:"REF",formatter:function(a){return gridjs.html('<span class="fw-semibold">'+a+"</span>")}}
,"Titre","Prix","Adresse","Statu",
{name:"Action",sort:{enabled:!1},formatter:function(a){return gridjs.html('<div class="d-flex gap-3"><a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a></div>')}}],pagination:{limit:8},sort:!0,search:!0,
server: {
    url: './PHP/appartement.php',
    then: data => data.map(prop => [prop.path,prop.ref, prop.titre,prop.prix, prop.Adresse, prop.Type])
  } ,
//data:[["","#SK2540","Neal Matthews","07 Oct, 2021","$400","Vente","View Details"],["","#SK6563","Kenneth Linck","09 Oct, 2021","$254","Location Saisoniare","View Details"]]
})
.render(document.getElementById("table-ecommerce-orders")),flatpickr("#order-date",{defaultDate:new Date,dateFormat:"d M, Y"});