$.post(base_url+"administrador/Cadmin/getTadmin",
      {},
      function (data) {
          var c = JSON.parse(data);
          $('#tbAdmin').append('<tbody>');
          $.each(c,function(i,item){
              $('#tbAdmin').append(
                  '<tr><th>'+item.id_admin+'</th>'+
                  '<th>'+item.userName+'</th>'+
                  '<th>'+item.password+'</th>'+
                  '<th>'+item.nombre+'</th>'+
                  '<th>'+item.apellido+'</th></tr>');
          });
          $('#tbAdmin').append('</tbody>');
          $("#tbAdmin").DataTable();
      });
