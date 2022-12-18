var wishlistkey = "wishlist";
// try and fetch an existing wishlist from the localStorage.
var wish_list = []; // localStorage.getItem(wishlistkey)

if ($.isEmptyObject(wish_list)) { //nothing was saved previously
  wish_list = new Array()
} else {
  wish_list = JSON.parse(wish_list);
  count_items_in_wishlist_update();
  $('#wish_list_item').html(wish_list);
}


$(document).ready(function() {
  $(".wishlist").on("click", function() {
    $data = "";
    $office_id = $(this).attr("office_id");
    $office_name = $(this).attr("office_name");
    $office_str = "<tr class='wishlist-item' id='list_id_" + $office_id + "'><td class='w-pname'>" + $office_name + "</td><td class='w-premove' wpid='" + $office_id + "'>x</td></tr>";
    //check if the element is in the array
    if ($.inArray($office_id, wish_list) == -1) {


      $("#wish_list_item").append($office_str);

      wish_list.push($office_str);
      //  localStorage.setItem(wishlistkey, JSON.stringify(wish_list))
      show_message($office_name + " wishlist Added");
    }
    count_items_in_wishlist_update();
  });

  //adding toggle functionality to the wishlist pannel
  $(".wish_list_heading").on("click", function() {
    if (!$(this).hasClass("up")) {
      $("#wish_list").css("height", "390px");
      $(this).addClass("up");
      $("#wish_list").css("overflow", "auto");
    } else {
      $("#wish_list").css("height", "35px");
      $(this).removeClass("up");
      $("#wish_list").css("overflow", "hidden");
    }

  });
  // Remove function
  $("#wish_list_item").on("click", ".w-premove", function() {
    $office_id = $(this).attr("wpid");
    $("#list_id_" + $office_id).remove();
    wish_list = [];

    $("tr.wishlist-item").each(function(index, el) {
      wish_list.push(el.outerHTML);
    });
    //localStorage.setItem(wishlistkey, JSON.stringify(wish_list));

    show_message("wishlist removed");
    count_items_in_wishlist_update();

  });
});
//Animation 
function show_message($msg) {
  $("#msg").html($msg);
  $top = Math.max(0, (($(window).height() - $("#msg").outerHeight()) / 2) + $(window).scrollTop()) + "px";
  $left = Math.max(0, (($(window).width() - $("#msg").outerWidth()) / 2) + $(window).scrollLeft()) + "px";
  $("#msg").css("left", $left);
  $("#msg").animate({
    opacity: 0.6,
    top: $top
  }, 100, function() {
    $(this).css({
      'opacity': 1
    });
  }).show();
  setTimeout(function() {
    $("#msg").animate({
      opacity: 0.6,
      top: "0px"
    }, 100, function() {
      $(this).hide();
    });
  }, 1000);
}

//Validation against the amount of product being added
function count_items_in_wishlist_update() {
  $("#listitem").html(wish_list.length);
  if (wish_list.length > 1) {
    $("#p_label").html("Shortlist ");
  } else {
    $("#p_label").html("Shortlist ");
  }
}