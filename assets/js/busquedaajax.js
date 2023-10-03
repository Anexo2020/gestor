/////////////////////////////////////
////  Consulta ajax recarga div   ///
/////////////////////////////////////
$(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#buscar").click(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
                                                                           	           
			  //hace la búsqueda                                                     
              $.ajax({
                    type: "POST",
                    url: "https://anexo.com.ar/app/cob/cob_x_dia/",
                    data: "b="+consulta,
                    dataType: "html",
                    
                    error: function(){
                          alert("error petición ajax");
                    },
					//Si se la peticion es exitosa:
                    success: function(data){                                                   
                          //vacio el div despues de cada post.
                          $("#contenido").empty();
				
					      $("#contenido").append(data);
			                                               
                    }
              });
                                                                                  
                                                                           
        });
   
/////////////////////////////////////
/// Fin Consulta ajax             ///
/////////////////////////////////////
                                      
///////////////////////////////////

/////////////////////////////////////
////  Consulta ajax recarga div   ///
/////////////////////////////////////
$(document).ready(function(){
                                
                                                                                                                                         
        //comprobamos si se pulsa una tecla
        $("#userlist").click(function(e){
                                     

                                                                           	           
			  //hace la búsqueda                                                     
              $.ajax({
                    url: "http://anexo.com.ar/app/admin/user/all_user_list",
                    dataType: "html",
                    
                    error: function(){
                          alert("error petición ajax");
                    },
					//Si se la peticion es exitosa:
                    success: function(data){                                                   
                          //vacio el div despues de cada post.
                          $("#contenido").empty();
				
					      $("#contenido").append(data);
			                                               
                    }
              });
                                                                                  
                                                                           
        });
   
/////////////////////////////////////
/// Fin Consulta ajax             ///
/////////////////////////////////////




// JavaScript Document