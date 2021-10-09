<?php

/*
Plugin Name: Document Generator
Plugin URI:  https://github.com/Ruslan-ALiyev
Description: Document Generator
Version:     1.0
Author:      Ruslan Aliyev
Author URI:  https://github.com/Ruslan-ALiyev
License:     License
License URI: https://github.com/Ruslan-ALiyev
*/

require('vendor/autoload.php');

use Mpdf\Mpdf;

function generatePdf(WP_REST_Request $request)
{
    $page_slug = $request->get_param('document');
    $args = [
      'name'        => $page_slug,
      'post_type'   => 'page',
      'post_status' => 'publish'
    ];
    $page = get_posts($args)[0];
    $template = apply_filters('the_content', $page->post_content);

    $replacements = $request->get_body_params();

    foreach($replacements as $key => $replacement)
    {
        if ($key !== 'document')
        {
            $template = str_replace('['.$key.']', $replacement, $template);
        }
    }

    // $fileName = $page_slug . '.pdf';
    // $filePath = basename(__DIR__);

    $mpdf = new Mpdf();
    $mpdf->WriteHTML($template);
    $mpdf->Output();

    //return new WP_REST_Response("Document Generated");
}

/**
 * at_rest_init
 */
function at_rest_init()
{
    // route url: domain.com/wp-json/$namespace/$route
    $namespace = 'document-generator/v1';
    $route     = 'document';

    register_rest_route($namespace, $route, array(
        'methods'   => 'POST',
        'callback'  => 'generatePdf'
    ));
}

add_action('rest_api_init', 'at_rest_init');