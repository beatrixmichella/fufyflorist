<?php
require_once get_template_directory() . '/inc/options-config.php';
require_once get_template_directory() . '/inc/admin/class.wbls-customizer-api-wrapper.php';

$obj = new Wbls_Customizer_API_Wrapper($options);