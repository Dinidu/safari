/*javascript document for the create image thumbnails after browse*/


//this will create live image preview for the photos which are going to uploads for home page. first section in the add real estate
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

//--------------------------------------------------------------------------------------------
//this will create thumbnails for the big image which is going to show for page info page

var blank="";
function readURL_big(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			$()
            $('#big_img')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#big_img').attr('src',img);
    }
    $("#big_img_del").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#big_img_del").click(function() {
    $("#big_img").attr("src",blank);
	$("#big_image").val('');
    $("#big_img_del").hide();  
  });
   
});

/*-------------------------------------this will give thumbnail images to small pics-------------------------*/

/*small image 1*/
var blank="";
function readURL_small_1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			$()
            $('#small_image1')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#small_image1').attr('src',img);
    }
    $("#small_img1_del").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#small_img1_del").click(function() {
    $("#small_image1").attr("src",blank);
	$("#small_1").val('');
    $("#small_img1_del").hide();  
  });
   
});

/*--------small image 2--------------*/
var blank="";
function readURL_small_2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			$()
            $('#small_image2')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#small_image2').attr('src',img);
    }
    $("#small_img2_del").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#small_img2_del").click(function() {
    $("#small_image2").attr("src",blank);
	$("#small_2").val('');
    $("#small_img2_del").hide();  
  });
   
});


/*--------small image 3--------------*/
var blank="";
function readURL_small_3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			$()
            $('#small_image3')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#small_image3').attr('src',img);
    }
    $("#small_img3_del").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#small_img3_del").click(function() {
    $("#small_image3").attr("src",blank);
	$("#small_3").val('');
    $("#small_img3_del").hide();  
  });
   
});


/*--------small image 4--------------*/
var blank="";
function readURL_small_4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
			$()
            $('#small_image4')
            .attr('src', e.target.result)
            ;
        };

        reader.readAsDataURL(input.files[0]);
    }
    else {
      var img = input.value;
        $('#small_image4').attr('src',img);
    }
    $("#small_img4_del").show().css("margin-right","10px");
}
$(document).ready(function() {
  $("#small_img4_del").click(function() {
    $("#small_image4").attr("src",blank);
	$("#small_4").val('');
	$("#small_img4_del").hide(); 
  });
   
});
