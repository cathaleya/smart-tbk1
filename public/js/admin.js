console.log('connecting to admin.js');
$(document).ready(function () {
  // notifikasi
  $('.close-notification-button').on('click', function () {

    $('#notification').toggleClass('opacity-0 opacity-100 -translate-y-full')
  })


  // sidebar
  $('#sidebar-toggle').click(function () {
    $('#sidebar').toggleClass('translate-x-[-100%]');

  })


  // select
  $('.js-example-basic-single').select2();

  $('.show-modal-button').on('click', function () {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })
  $('.tombol-tutup-modal').on('click', function () {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })

})