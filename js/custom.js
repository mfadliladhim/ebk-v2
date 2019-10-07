$(document).ready(function(){

  // modal ibu
  $(document).on('click','#ibuModal',function(e){
    e.preventDefault();
    $("#ortuModal").modal("show");
    $('#ortuModalLabel').text('Edit data Ibu');
    $('#ortuBody').removeClass('d-none');
    $('#tinggalBody').addClass('d-none');
  });

  // Modal Ayah
  $(document).on('click','#ayahModal',function(e){
    e.preventDefault();
    $("#ortuModal").modal("show");
    $('#ortuModalLabel').text('Edit data Ayah');
    $('#ortuBody').removeClass('d-none');
    $('#tinggalBody').addClass('d-none');
  });

  // Modal tinggal
  $(document).on('click','#tinggalModal',function(e){
    e.preventDefault();
    $("#ortuModal").modal("show");
    $('#ortuModalLabel').text('Edit data Siswa tinggal');
    $('#tinggalBody').removeClass('d-none');
    $('#ortuBody').addClass('d-none');
  });

  // Modal tinggal
  $(document).on('click','#saudaraModal',function(e){
    e.preventDefault();
    $("#ortuModal").modal("show");
    $('#ortuModalLabel').text('Edit data Saudara');
    $('#ortuBody').removeClass('d-none');
    $('#tinggalBody').addClass('d-none');
  });

  // search pelanggaran
  $(document).ready(function() {
      $('.cari-pelanggaran').select2();
  });

});
