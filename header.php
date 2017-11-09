 <div id="cart">
           <?php
             if (isset($_SESSION["cantidadTotal"]))
                 {
             ?>
             <?php echo $_SESSION["cantidadTotal"]; ?>

                <p class="ocultar">&nbsp; $     <?php echo $_SESSION["totalcoste"]; ?></p>
             <?php
                }else{
             ?>
                <p>&nbsp;0</p>
                <p>&nbsp; $     0</p>
          <?php } ?>
</div>
