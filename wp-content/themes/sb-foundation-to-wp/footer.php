    <!-- FOOTER START -->    
    <footer>
      <hr style="margin-top:0;" />
      <div class="small-10 small-centered large-12 columns">
        <div class="row">
          <div class="medium-6 medium-uncentered columns">
            
            
              <?php if ( dynamic_sidebar( 'footer-left' ) ); ?>
            

          </div>
          <div class="medium-6 medium-uncentered columns">
            <?php if ( dynamic_sidebar( 'footer-right' ) ); ?>
          </div>
        </div>
      </div>

      <hr />

      <div class="row">
        <div class="small-10 small-centered large-12 columns">
          <p class="text-center sb-ftr-info">&copy; <?php echo date('Y'); ?> <span>Social<strong>Brew</strong></span>&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;Los Angeles, CA&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;@<span>Social<strong>Brew</strong></span>Us&emsp;&emsp;&emsp;|&emsp;&emsp;&emsp;213 422 0537<br />
            Created with CurseWords</p>
          </div>
        </div>
      </footer>
      <!-- FOOTER END -->



      <?php wp_footer(); ?>

      <script>
        (function($) {
          jQuery(document).foundation() 

        })(jQuery);
      </script>
    </body>
    </html>
