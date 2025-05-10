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



  $('.show-modal-button').on('click', function () {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })
  $('.tombol-tutup-modal').on('click', function () {
    $('#modal').toggleClass('opacity-0 -translate-y-full');
  })

  // select negara on create
  $('#select-negara').on('change', function () {
    LoadingScreen()
    let kode = $(this).val()

    $.ajax({
      url: `https://secure.geonames.org/searchJSON?country=${kode}&featureClass=P&maxRows=1000&username=humamafif`,
      type: 'GET',
      success: function (response) {

        $('#select-kota').html('')
        let data = response.geonames
        let newOption = ``;
        data.forEach(e => {
          let nama = e.name
          newOption += `
           <option value="${nama}">
                                        ${nama}</option>
          `
        });
        $('#select-kota').append(newOption)
        LoadingScreen()
      },
      error: function (xhr, status, error) {
        if (xhr.status == 419) {
          alert('Sesi Anda telah habis. Silakan login kembali.');
        } else {
          alert('Terjadi kesalahan. Silakan coba lagi.');
        }
      }
    });
  })

  // select negara on edit
  $('#select-negara-edit').on('change', function () {
    LoadingScreen()
    let kode = $(this).val()

    $.ajax({
      url: `https://secure.geonames.org/searchJSON?country=${kode}&featureClass=P&maxRows=1000&username=humamafif`,
      type: 'GET',
      success: function (response) {

        $('#select-kota-edit').html('')
        let data = response.geonames
        let newOption = ``;
        data.forEach(e => {
          let nama = e.name
          newOption += `
           <option value="${nama}">
                                        ${nama}</option>
          `
        });
        $('#select-kota-edit').append(newOption)
        LoadingScreen()
      },
      error: function (xhr, status, error) {
        if (xhr.status == 419) {
          alert('Sesi Anda telah habis. Silakan login kembali.');
        } else {
          alert('Terjadi kesalahan. Silakan coba lagi.');
        }
      }
    });
  })

  $('#input-file-update-profile')

  $('form').on('submit', function () {
    LoadingScreen()
  })

  // select
  $('.js-example-basic-single').select2();
  $('.js-example-basic-multiple').select2()
  function LoadingScreen() {
    $('#loading-screen').toggleClass('hidden flex')
    $('#loading-screen').toggleClass('backdrop-blur-sm')
  }
})



