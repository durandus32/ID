$.post(base_url+"administrador/Cadmin/getUserNames",
      {},
      function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
              $('#cboUser').append(
              '<option value="'+item.id_admin+'">'+item.userName+'</option>');
          });
      });

$('#cboUser').change(function(){
  $('#cboUser option:selected').each(function() {
    var id =$('#cboUser').val();
  });
});
