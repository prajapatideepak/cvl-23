<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script> 
  <script src="https://kit.fontawesome.com/d1f5705c79.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script src="public/js/sweetalert.min.js"></script>
  <script src="public/js/toastr.min.js"></script>


</body>

</html>

<script>
  $(document).ready(function(){
    <?php if(isset($_SESSION['flash'])){ ?>
      toastr.<?php echo $_SESSION['flash']['status']; ?>("<?php echo $_SESSION['flash']['msg']; ?>", "<?php echo ucfirst($_SESSION['flash']['status']);?> : ",{
        progressBar:true,
        timeOut: 3000
      });
    <?php } if(isset($_SESSION['sweetAlert'])){ ?>
        swal({
            title: "<span style='font-size:20px'><?php echo $_SESSION['sweetAlert']['title'] ?></span>",
            type: "<?php echo $_SESSION['sweetAlert']['status'] ?>",
            html: true,
            confirmButtonColor: "#5587dd",
            confirmButtonText: "Ok",
          },
        function(isConfirm){
          if (isConfirm) {
            <?php if($_SESSION['sweetAlert']['redirect'] != NULL) {?>
                    window.location = "<?php echo $_SESSION['sweetAlert']['redirect'] ?>";
            <?php } ?>
          } 
        });
    <?php } ?>
  });
</script>


<?php unset($_SESSION['flash']); unset($_SESSION['sweetAlert']); ?>