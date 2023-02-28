$('#package').on('change', function(){
    // ambil data dari elemen option yang dipilih
    const price = $('#package option:selected').data('price');
    const discount = $('#package option:selected').data('discount');
    
    // kalkulasi total harga
    const totalDiscount = (price * discount/100)
    const total = price - totalDiscount;
    
    // tampilkan data ke element
    $('[name=price]').val(price);
    $('[name=discount]').val(totalDiscount);
    
    $('#total').text(`Rp ${total}`);
  });

  function hideAndShow(id){
    $(".spesial").hide(1);
    $(id).change(function(){
      var statusnya = $("#status option:selected").attr("value");
  
      // alert(statusnya);
      if(statusnya == 1){
        $(".spesial").show(1000);
      }else{
        $(".spesial").hide(1000);
      }
     
    });
  }