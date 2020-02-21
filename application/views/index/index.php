<?php
//application/views/index/index.php

$this->load->view($this->config->item('theme') . 'header');

?>
<div class="jumbotron">
  <h1 class="display-3"><?=$title?></h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p>Still not sure what to do?  Check out our Users, below:</p>    
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="<?=site_url('users')?>" role="button">Our Users</a>
  </p>
</div>

<?php

$this->load->view($this->config->item('theme') . 'footer');

?>