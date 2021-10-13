# PDF Generator via REST API & Templates

## Setup

```
git clone https://github.com/Ruslan-Aliyev/wp_template_pdf_generator.git 
cd wp_template_pdf_generator/wp-content/plugins/document-generator
composer install
```

`{domain}/wp-admin/plugins.php?plugin_status=all` Activate `Document Generator` Plugin

Put in the DB `db.sql`

You can make and manipulate templates in the `Pages` part, just like in MS Words.

![](/Illustrations/template.PNG)

Note the slug name is `price-document`

Any variable is written in the format `[xxx_yyy_zzz]`

Send a POST request

![](/Illustrations/results.PNG)

Make sure you get the document slug name and the names of all variables right.

## Tutorials

- https://www.youtube.com/watch?v=C2twS9ArdCI
- https://stackoverflow.com/questions/64327204/where-to-register-rest-route-to-wordpress-plugin-endpoint/64331655#64331655
- https://developer.wordpress.org/reference/classes/wp_rest_request/
- https://stackoverflow.com/questions/5317366/proper-way-to-get-page-content/5318869#5318869
- https://stackoverflow.com/questions/14979837/wordpress-query-single-post-by-slug/14980473#14980473
- https://github.com/mpdf/mpdf#usage

## Other Related Tutorials

- https://torquemag.io/2017/06/custom-shortcode/
- https://www.youtube.com/watch?v=I29BI1CrNcI
- https://make.wordpress.org/core/2020/07/17/passing-arguments-to-template-files-in-wordpress-5-5/
- https://www.youtube.com/watch?v=5WnhIMqPLoY
- https://laravelarticle.com/blade-template-in-wordpress
- https://wordpress.org/plugins/pdf-generator-for-wp/
