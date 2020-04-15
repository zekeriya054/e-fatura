  $('#modalButton').click(function(){
    $('#modal').modal('show')
          .find('#modalContent')
          .load($(this).attr('value'));
    });
  $('#viewButton').click(function(){

      $('#modalView').modal('show')
            .find('#modalContentView')
            .load($(this).attr('value'));
  });
