<?php
/* ================================================================================== */
/*      Add Metabox   */
/* ================================================================================== */
add_action('add_meta_boxes', 'lvly_job_add_box');
if (!function_exists('lvly_job_add_box')) {
    function lvly_job_add_box() {
        global $lvly_job_options;
        $lvly_job_options = array(
            array(
                "name" => esc_html__('Job Code', 'waves'),
                "id" => "job_code",
                "type" => "text",
                "desc" => ""
            ),
            array(
                "name" => esc_html__('Job Location', 'waves'),
                "id" => "job_location",
                "type" => "text",
                "desc" => ""
            ),
            array(
                "name" => esc_html__('Job Department', 'waves'),
                "id" => "job_department",
                "type" => "text",
                "desc" => ""
            ),
            array(
                "name" => esc_html__('Job Close Date', 'waves'),
                "id" => "job_close",
                "type" => "text",
                "desc" => ""
            ),
        );
        add_meta_box('tw-job-options', esc_html__('Job Settings', 'waves'), 'lvly_post_metabox', 'lovelyjob', 'normal', 'high', $lvly_job_options);
    }
}