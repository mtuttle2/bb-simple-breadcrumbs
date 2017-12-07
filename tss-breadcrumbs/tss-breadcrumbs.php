<?php
class SimpleBreadcrumbsClass extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'            => __( 'Simple Breadcrumbs Module', 'fl-builder' ),
            'description'     => __( 'A simple breadcrumbs module!', 'fl-builder' ),
            'group'           => __( 'TSS Modules', 'fl-builder' ),
            'category'        => __( 'Breadcrumbs', 'fl-builder' ),
            'dir'             => BB_SIMPLE_BREADCRUMBS_DIR . 'tss-breadcrumbs/',
            'url'             => BB_SIMPLE_BREADCRUMBS_URL . 'tss-breadcrumbs/',
            'icon'            => 'button.svg',
            'editor_export'   => true, // Defaults to true and can be omitted.
            'enabled'         => true, // Defaults to true and can be omitted.
            'partial_refresh' => false, // Defaults to false and can be omitted.
        ));
    }
}

FLBuilder::register_module('SimpleBreadcrumbsClass', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Color', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields
                    'color_field'    => array(
                        'type'          => 'color',
                        'label'         => __('Breadcrumb Link Color', 'fl-builder'),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.bread-parent',
                            'property'        => 'color'
                        )
                    ),
                    'color_field_2'    => array(
                        'type'          => 'color',
                        'label'         => __('Current Page Color', 'fl-builder'),
                        'default'       => '333333',
                        'show_reset'    => true,
                        'preview'         => array(
                            'type'            => 'css',
                            'selector'        => '.item-current',
                            'property'        => 'color'
                        )
                    ),
                )
            )
        )
    )
));
