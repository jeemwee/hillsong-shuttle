<?php
/*
Title: Get your ride
Post Type: page
*/

piklist('field', array(
    'type' => 'text'
  ,'field' => 'get_ride_title'
  ,'label' => 'Title'
  ,'columns' => '12'
  ,'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
    'type' => 'text'
  ,'field' => 'get_ride_subtitle'
  ,'label' => 'Sub title'
  ,'columns' => '12'
  ,'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
    'type' => 'group'
    ,'label' => __('Easy steps')
    ,'columns' => 12
    ,'add_more' => true
    ,'field' => 'easy_steps'
    ,'fields' => array(
        array(
          'type' => 'file'
         ,'field' => 'upload_files'
         ,'label' => 'Upload image'
         ,'options' => array(
           'modal_title' => 'Add File(s)'
           ,'button' => 'Add'
         )
       ),
       array(
        'type' => 'text'
        ,'field' => 'subtitle'
        ,'label' => 'Sub title'
        ,'columns' => '12'
        ,'attributes' => array(
            'class' => 'text'
          )
      ),
      array(
        'type' => 'editor'
         ,'field' => 'content'
         ,'label' => __('Content')
         ,'options' => array (
             'wpautop' => true
             ,'media_buttons' => false
             ,'tabindex' => ''
             ,'editor_css' => ''
             ,'editor_class' => ''
             ,'teeny' => false
             ,'dfw' => false
             ,'tinymce' => true
             ,'quicktags' => true
          )
        ),
        array(
         'type' => 'text'
         ,'field' => 'cta_text'
         ,'label' => 'Call to action text'
         ,'columns' => '12'
         ,'attributes' => array(
             'class' => 'text'
           )
       ),
       array(
        'type' => 'text'
        ,'field' => 'cta_url'
        ,'label' => 'Call to action url'
        ,'columns' => '12'
        ,'attributes' => array(
            'class' => 'text'
          )
      ),
    )
));

piklist('field', array(
  'type' => 'editor'
   ,'field' => 'description_easysteps'
   ,'label' => __('Description Easy Steps')
   ,'options' => array (
       'wpautop' => true
       ,'media_buttons' => false
       ,'tabindex' => ''
       ,'editor_css' => ''
       ,'editor_class' => ''
       ,'teeny' => false
       ,'dfw' => false
       ,'tinymce' => true
       ,'quicktags' => true
    )
  )
);
