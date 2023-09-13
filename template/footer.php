
</div>
        


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- JAVASCRIPT -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="https://unpkg.com/gridjs/dist/gridjs.umd.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <!-- Chart JS -->
        <script src="assets/js/pages/chartjs.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/pages/anbieter.js"></script>


        <script src="assets/libs/gridjs/gridjs.umd.js"></script>

        <!-- datepicker js -->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

        <script src="assets/js/app.js"></script>

        <script>

           /* $("#roleedit").click(function(e){

                var id =  $(this).attr('name');
                alert(id);

                $('#roleeditmodal').modal('show');

            });*/

            $("#add_users").click(function(e){
                e.preventDefault();

                var form_data4 = new FormData();
                form_data4.append('username',$("#Username").val());
                form_data4.append('email',$("#User_email").val());
                form_data4.append('role',$("#user_role").val());
                form_data4.append('password',$("#user_password").val());
                form_data4.append('code',0);

                $.ajax({
                    "url":"PHP/adduser.php",
                    "method":"POST",
                    "data":form_data4,
                    processData: false,
                    contentType: false,
                    success:function(result)
                    {
                        //alert(result);
                        if(result == "OK")
                        {
                            location.reload();
                        }
                        
                    }
                })

            })

            $("#add_role").click(function(e){
                e.preventDefault();

                var role_name = $("#role_name").val();
                var apercu = 0 ;
                var appartement = 0 ;
                var villa = 0 ;
                var riad = 0 ;
                var bureau = 0 ;
                var terrain = 0 ;
                var localcommercial = 0 ;
                var maisonhote = 0 ;
                var users = 0 ;

                if($('#Apercu').is(':checked')){
                    var apercu = 1 ;
                }

                if($('#Appartement').is(':checked')){
                    var appartement = 1 ;
                }

                if($('#Villa').is(':checked')){
                    var villa = 1 ;
                }

                if($('#Riad').is(':checked')){
                    var riad = 1 ;
                }

                if($('#Local').is(':checked')){
                    var localcommercial = 1 ;
                }
                
                if($('#Bureau').is(':checked')){
                    var bureau = 1 ;
                }
                
                if($('#Terrain').is(':checked')){
                    var terrain = 1 ;
                }

                if($('#hotes').is(':checked')){
                    var maisonhote = 1 ;
                }

                if($('#Users').is(':checked')){
                    var users = 1 ;
                }

                var form_data3 = new FormData();
                form_data3.append('appartement',appartement);
                form_data3.append('apercu',apercu);
                form_data3.append('villa',villa);
                form_data3.append('riad',riad);
                form_data3.append('localcommercial',localcommercial);
                form_data3.append('bureau',bureau);
                form_data3.append('terrain',terrain);
                form_data3.append('maisonhote',maisonhote);
                form_data3.append('users',users);
                form_data3.append('name',role_name);



                $.ajax({
                    "url":"PHP/addrole.php",
                    "method":"POST",
                    "data":form_data3,
                    processData: false,
                    contentType: false,
                    success:function(result)
                    {
                        //alert(result);
                        if(result == "OK")
                        {
                            location.reload();
                        }
                        
                    }
                })



                //alert("ok");
            });

            $("#save").click(function(){
                //alert("ok");

                var type = $("#type").val();
                var Statu = $("#Statu").val();
                var Ref = "" ;
                if(type == "Villa")
                {
                    Ref="VV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDV-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSV-0";
                    }

                }
                else if(type == "Riad")
                {
                    Ref="RV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDR-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSR-0";
                    }

                }
                else if(type == "Bureau")
                {
                    Ref="BV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDB-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSB-0";
                    }

                }
                else if(type == "Local-Commercial")
                {
                    Ref="LV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDL-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSL-0";
                    }

                }
                else if(type == "maison-hotes")
                {
                    Ref="MV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDM-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSM-0";
                    }

                }
                else if(type == "Terrain")
                {
                    Ref="TV-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDT-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LST-0";
                    }

                }
                else{
                    Ref="VA-0";
                    if (Statu=='locationld') 
                    {
                        Ref="LDA-0";
                    }
                    if (Statu=='locationcd') 
                    {
                        Ref="LSA-0";
                    }
                }

                var form_data = new FormData();
                form_data.append('Titre',$("#titre").val());
                form_data.append('Desc',$("#productdesc").val());
                form_data.append('Prix',$("#Prix").val());
                form_data.append('Ref',Ref);
                form_data.append('Superficie',$("#Superficie").val());
                form_data.append('Type',type);
                form_data.append('Statu',$("#Statu").val());
                form_data.append('Bedrooms',$("#chambre").val());
                form_data.append('Bathrooms',$("#bain").val());
                form_data.append('Levels',$("#Etage").val());
                form_data.append('Dining',$("#dining").val());
                form_data.append('Living',$("#salon").val());
                form_data.append('AC',$("#Climatisation").val());
                form_data.append('Parking',$("#Parking").val());
                form_data.append('Internet',$("#Internet").val());
                form_data.append('pdf',"empty");
                form_data.append('video',"");
                form_data.append('kitchen',$("#kitchen").val());
                form_data.append('Adresse',$("#Adresse").val());

                var totalfiles = document.getElementById('files').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('files').files[index]);
                }



                $.ajax({
                    "url":"PHP/addprop.php",
                    "method":"POST",
                    "data":form_data,
                    processData: false,
                    contentType: false,
                    success:function(result)
                    {
                        alert(result);
                        if(result == "OK")
                        {
                            $('#success-btn').modal('toggle');
                            location.reload();
                        }
                        
                    }
                })
            })


            $("#edit").click(function(){
                //alert("ok");

                var idm = $("#idm").val() ;
                var Statu = $("#Statu").val() ;
                var type = $("#type").val() ;
                Ref="VA-0";
		        if (Statu=='locationld') 
		        {
			        Ref="LDA-0";
		        }
                if (Statu=='locationcd') 
                {
                    Ref="LSA-0";
                }

                var form_data = new FormData();
                form_data.append('Titre',$("#titre").val());
                form_data.append('Desc',$("#productdesc").val());
                form_data.append('Prix',$("#Prix").val());
                form_data.append('Ref',Ref);
                form_data.append('Superficie',$("#Superficie").val());
                form_data.append('idm',idm);
                form_data.append('Statu',$("#Statu").val());
                form_data.append('Bedrooms',$("#chambre").val());
                form_data.append('Bathrooms',$("#bain").val());
                form_data.append('Levels',$("#Etage").val());
                form_data.append('Dining',$("#dining").val());
                form_data.append('Living',$("#salon").val());
                form_data.append('AC',$("#Climatisation").val());
                form_data.append('Parking',$("#Parking").val());
                form_data.append('Internet',$("#Internet").val());
                form_data.append('pdf',"empty");
                form_data.append('video',"");
                form_data.append('kitchen',$("#kitchen").val());
                form_data.append('Adresse',$("#Adresse").val());





                $.ajax({
                    "url":"PHP/modifyprop.php",
                    "method":"POST",
                    "data":form_data,
                    processData: false,
                    contentType: false,
                    success:function(result)
                    {
                       //alert(result);
                        if(result == "OK")
                        {
                            $('#success-modify').modal('toggle');
                            
                            window.location.replace(type+".php");
                            //location.reload();
                        }
                        
                    }
                })
            })
            $("#updaterole").click(function(e){
                e.preventDefault();

                var role_name = $("#role_name2").val();
                var role_id = $("#role_id").val();
                var apercu = 0 ;
                var appartement = 0 ;
                var villa = 0 ;
                var riad = 0 ;
                var bureau = 0 ;
                var terrain = 0 ;
                var localcommercial = 0 ;
                var maisonhote = 0 ;
                var users = 0 ;

                if($('#Apercu2').is(':checked')){
                    var apercu = 1 ;
                }

                if($('#Appartement2').is(':checked')){
                    var appartement = 1 ;
                }

                if($('#Villa2').is(':checked')){
                    var villa = 1 ;
                }

                if($('#Riad2').is(':checked')){
                    var riad = 1 ;
                }

                if($('#Local2').is(':checked')){
                    var localcommercial = 1 ;
                }
                
                if($('#Bureau2').is(':checked')){
                    var bureau = 1 ;
                }
                
                if($('#Terrain2').is(':checked')){
                    var terrain = 1 ;
                }

                if($('#hotes2').is(':checked')){
                    var maisonhote = 1 ;
                }

                if($('#Users2').is(':checked')){
                    var users = 1 ;
                }

                var form_data3 = new FormData();
                form_data3.append('appartement',appartement);
                form_data3.append('apercu',apercu);
                form_data3.append('villa',villa);
                form_data3.append('riad',riad);
                form_data3.append('localcommercial',localcommercial);
                form_data3.append('bureau',bureau);
                form_data3.append('terrain',terrain);
                form_data3.append('maisonhote',maisonhote);
                form_data3.append('users',users);
                form_data3.append('name',role_name);
                form_data3.append('id',role_id);



                $.ajax({
                    "url":"PHP/updaterole.php",
                    "method":"POST",
                    "data":form_data3,
                    processData: false,
                    contentType: false,
                    success:function(result)
                    {
                        //alert(result);
                        if(result == "OK")
                        {
                            location.reload();
                        }
                        
                    }
                })
                
            })
            $("#deleterole").click(function(){
                var id = $("#iddeleterole").val();
                $.ajax({
                    "url":"PHP/deleterole.php",
                    "method":"POST",
                    "data":{id:id},
                    success:function(result)
                    {
                        //alert(result);
                        if(result == "OK")
                        {
                            location.reload();
                        }
                        
                    }
                })


            })
            
            function editrole(a){
                //var id =  $(this).attr('name');
                //alert(a);
                $('#Apercu2').prop('checked', false);
                $('#Appartement2').prop('checked', false);      
                $('#Villa2').prop('checked', false);
                $('#Riad2').prop('checked', false);
                $('#Local2').prop('checked', false);
                $('#Bureau2').prop('checked', false);
                $('#Terrain2').prop('checked', false);
                $('#hotes2').prop('checked', false);
                $('#Users2').prop('checked', false);
                
                $.ajax({
                    "url":"PHP/selectrole.php",
                    "method":"POST",
                    "data":{id:a},
                    success:function(result)
                    {
                        var role = jQuery.parseJSON(result);
                        $("#role_id").val(role[0]["id"]);
                        $("#role_name2").val(role[0]["name"]);
                        if(role[0]["Appartement"]==1){
                            $('#Appartement2').prop('checked', true) ;
                        }
                        if(role[0]["Apercu"]==1){
                            $('#Apercu2').prop('checked', true);
                        }
                        if(role[0]["Villa"]==1){
                            $('#Villa2').prop('checked', true);
                        }
                        if(role[0]["Riad"]==1){
                            $('#Riad2').prop('checked', true);
                        }
                        if(role[0]["Bureau"]==1){
                            $('#Bureau2').prop('checked', true);
                        }
                        if(role[0]["Maison_hotes"]==1){
                            $('#hotes2').prop('checked', true);
                        }
                        if(role[0]["Terrain"]==1){
                            $('#Terrain2').prop('checked', true);
                        }
                        if(role[0]["Local_Commercial"]==1){
                            $('#Local2').prop('checked', true);
                        }
                        if(role[0]["Users"]==1){
                            $('#Users2').prop('checked', true);
                        }

                    }
                })

                $('#roleeditmodal').modal('show');
            }
            function deleterole(a)
            {
                $('#iddeleterole').val(a);
                $('#deleterolemodal').modal('show');
            }
        </script>

    </body>
</html>
