$(document).on('click','#search',function(){
    $(this).text("Searching....");
    var aval=document.getElementById("keyword").value;
    $.ajax({
      url:'searchvideos.php?v='+aval,
      type:'POST',
      data: {
        pages:$(this).data('pages'),
      },
      success: function(response){
        if(response){
          $("#vcontent").html("Hello").load("searchvideos.php?v="+aval);
        }
      }
    });
  });
function load_page(pageloc,pageid){	
    $("html, body").animate({ scrollTop: 0 }, 1000); 
       $('#vcontent').html("<center><br><br><img src='images/loading.gif'></center>").load(pageloc);       
}
