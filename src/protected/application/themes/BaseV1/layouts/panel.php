<?php
$this->part('header', $render_data);
$this->part('panel-nav', $render_data);
echo $TEMPLATE_CONTENT;
$this->part('footer', $render_data);