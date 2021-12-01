const flashData = $('.flash-data').data('flashdata');
if( flashData ){

   new Swal({
        title: 'Error',
        text:  flashData,
        type: 'info'
    });


}