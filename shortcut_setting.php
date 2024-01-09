
<script type="text/javascript">

  $(document).keydown(function(e){

    var keycode=e.keyCode;
    var pathname = window.location.href;
    var path = "http://localhost/project/manage";


      if (e.shiftKey && keycode == 83){
          if (pathname != path+"/add_size.php") { window.location.assign("add_size.php"); }
      }else if(e.shiftKey && keycode == 68){
         if (pathname != path+"/dashboard.php") { window.location.assign("dashboard.php"); }
      }else if(e.shiftKey && keycode == 76){
           window.location.assign("logout.php")
      }else if(e.shiftKey && keycode == 80){
         if (pathname != path+"/purchase_entry.php") { window.location.assign("purchase_entry.php"); }
      }else if(e.shiftKey && keycode == 66){
         if (pathname != path+"/point_of_sale.php") { window.location.assign("point_of_sale.php"); }
      }
  })
</script>