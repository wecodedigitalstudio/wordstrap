
  <section class="footer pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="<?php echo esc_url_raw(home_url()); ?>">
            <?php $logo = wp_get_attachment_image_src(6, 'full'); ?> 
            <img src="<?php echo $logo[0] ?>" />
          </a>
        </div>
        <div class="col-md-4">
          <h5 class="text-monospace text-muted">About</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="text-monospace text-muted">Contact</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
            <li class="list-group-item pl-0">
              <a href="#" class="text-reset">Lorem ipsum</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php wp_footer(); ?>

  </body>
</html>