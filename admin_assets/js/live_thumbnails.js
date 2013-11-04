/*javascript document for the create image thumbnails after browse*/


//this will create live image preview for the store logo images
var blank="";
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_prev')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#img_prev').attr('src',img);
    }
    $("#x").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#x").click(function() {
    $("#img_prev").attr("src",blank);
	$("#img_prev").empty();
    $("#x").hide();  
	
  });
   
});

