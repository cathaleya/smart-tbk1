console.log('connecting to admin.js');  
$(document).ready(function() {
  $('#sidebar-toggle').click(function() {
    $('#sidebar').toggleClass('translate-x-[-100%]');
  
  })

  $('.show-modal-button').on('click', function() {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })
  $('.tombol-tutup-modal').on('click', function() {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })

})