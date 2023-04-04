//alert message close
$(document).ready(function(){
  window.livewire.on('alert_remove',()=>{
      setTimeout(function(){ $(".alert-success").fadeOut('fast');
      }, 5000); // 5 secs
  });
});

