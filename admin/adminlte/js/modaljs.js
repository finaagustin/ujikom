//update ruang
function getUpdate(id){
  var id = id;
  $.ajax({
    url: "ruang/UV_ruang.php",
    type: "GET",
    data : {id: id,},
    success: function (ajaxData){
      $("#ruangedit").html(ajaxData);
      $("#ruangedit").modal('show',{backdrop: 'true'});
    }
  });
}

      $(document).ready(function (){
          /*$(".mapeledit").click(function (e){*/
            $("#example").on("click",".ruangedit",function(){
              var m = $(this).attr("id");
              $.ajax({
                  url: "ruang/UV_ruang.php",
                  type: "GET",
                  data : {id: m,},
                  success: function (ajaxData){
                      $("#ruangedit").html(ajaxData);
                      $("#ruangedit").modal('show',{backdrop: 'true'});
                  }
              });
          });
      });
//end of edit ruang
