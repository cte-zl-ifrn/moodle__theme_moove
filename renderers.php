<?php

// Be sure to include the H5P renderer so it can be extended
require_once($CFG->dirroot . '/mod/hvp/renderer.php');

/**
 * Class theme_YOURTHEMENAME_core_h5p_renderer
 *
 * Extends the H5P renderer so that we are able to override the relevant
 * functions declared there
 */
class theme_moove_core_h5p_renderer extends \core_h5p\output\renderer {

    /**
     * Add styles when an H5P is displayed.
     *
     * @param array $styles Styles that will be applied.
     * @param array $libraries Libraries that will be shown.
     * @param string $embedType How the H5P is displayed.
     */
    public function h5p_alter_styles(&$styles, $libraries, $embedType) {
        global $CFG;

            $styles[] = (object) array(
                        'path' => $CFG->httpswwwroot . '/theme/moove/scss/h5p.css',
                        'version' => '?ver=0.0.1',
            );
    }
    
 }