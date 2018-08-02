<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>تسجيل مستخدم</title>
  </head>
  <body>
  <div class="container">
    <form action="">
        <h2>Sign up</h2>
        <div class="form-group">
            <div class="md-form form-lg">
                <input type="text" id="name" name="name[]" class="form-control form-control-sm">
                <label for="name" class="">Your name</label>
            </div>
        </div>
        <div class="form-group">
            <div class="md-form form-lg">
                <input type="text" id="number" name="phone[]" class="form-control form-control-sm">
                <label for="number" class="">Your number</label>
            </div>
        </div>

        
        <h2>Group members</h2>
        <div class="team-members">
            <div class="team-member">
                <div class="form-group">
                    <div class="md-form form-lg">
                        <input type="text" id="name" name="name[]" class="form-control form-control-sm">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="md-form form-lg">
                        <input type="text" id="number" name="phone[]" class="form-control form-control-sm">
                        <label for="number" class="">Your number</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="pull-left">
            <a href="#" class="btn btn-rounded btn-lg waves-effect waves-light btn-success">Save <i class="glyphicon glyphicon-plus-ok"></i></a>
            <a href="#" class="btn btn-rounded btn-lg waves-effect waves-light btn-danger">Cancel <i class="glyphicon glyphicon-plus-remove"></i></a>
        </div>
        <div class="pull-right">
            <a href="#" id="add-member" class="btn btn-rounded btn-lg waves-effect waves-light btn-info btn-lg"><i class="glyphicon glyphicon-plus-sign"></i></a>
        </div>
    </form>
  </div>
  <script type="text/javascript">
    $(function() {
        var max_fields      = 10;
        var wrapper         = $(".team-members"); //Fields wrapper
        var add_button      = $("#add-member"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ 
                x++; //text box increment
                $(wrapper).append('<div class="team-member"><div class="form-group"><div class="md-form form-lg"><input type="text" id="name" name="name[]" class="form-control form-control-sm"><label for="name" class="">Your name</label></div></div><div class="form-group"><div class="md-form form-lg"><input type="text" id="number" name="phone[]" class="form-control form-control-sm"><label for="number" class="">Your number</label></div></div>');
            }
        });
    
    });
  </script>
  </body>
</html>
