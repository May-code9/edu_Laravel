<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('jsplugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset('jsplugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- Page script -->
<script type="text/javascript">
$(function() {

  "use strict";

  //iCheck for checkbox and radio inputs
  $('input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
  });

  //When unchecking the checkbox
  $("#check-all").on('ifUnchecked', function(event) {
    //Uncheck all checkboxes
    $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
  });
  //When checking the checkbox
  $("#check-all").on('ifChecked', function(event) {
    //Check all checkboxes
    $("input[type='checkbox']", ".table-mailbox").iCheck("check");
  });
  //Handle starring for glyphicon and font awesome
  $(".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty").click(function(e) {
    e.preventDefault();
    //detect type
    var glyph = $(this).hasClass("glyphicon");
    var fa = $(this).hasClass("fa");

    //Switch states
    if (glyph) {
      $(this).toggleClass("glyphicon-star");
      $(this).toggleClass("glyphicon-star-empty");
    }

    if (fa) {
      $(this).toggleClass("fa-star");
      $(this).toggleClass("fa-star-o");
    }
  });

  //Initialize WYSIHTML5 - text editor
  $("#email_message").wysihtml5();
});
</script>
