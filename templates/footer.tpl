
<script src="assets/jquery.js"></script>
 <script src="assets/js/bootstrap.js"></script>
 <!-- for sweet alert -->
 <script src="assets/sweetalert.min.js"></script>
<script src="assets/feather.min.js"></script>

 <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script>
    $(document).ready(function(){         
    $('#register').submit(function(event){
        //alert('document id ready');    
        event.preventDefault();
        var formData = $('#register').serialize();              
        $.ajax({
          type:"post",
          url:"register.php",
          data: formData,
          dataType: "text",
          success: function(response){
            console.log(response);
           
          }
        });
    });
     });
    </script>
    </body>
    </html>