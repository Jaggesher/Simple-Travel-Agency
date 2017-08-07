$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
   $(document).on('click', '.browse', function() {
      var file = $(this).parent().parent().parent().find('.file');
      file.trigger('click');
  });
  $(document).on('change', '.file', function() {
      $("#displayFileName").val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });

  $(document).on('click','#search',function(){
    var Code=$("#code").val();
    if(Code!=""){
      $.post( "deleteIt.php",
            {Code: Code,Action: "Send"},
            function(data) {
                $("#DeletingData").html(data);
            },"html");
    }else{
      alert("Please Fill All Info.");
    }
    
  });
  $(document).on('click','#delete',function(){
    var Code=$("#code").val();
    if(Code!=""){
      $.post( "deleteIt.php",
            {Code: Code,Action: "delete"},
            function(data) {
                $("#DeletingData").html(data);
            },"html");
    }else{
      alert("Please Fill All Info.");
    }
  });
});