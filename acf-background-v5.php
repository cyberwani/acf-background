<?php

class acf_field_background extends acf_field {
	
	
	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function __construct() {
		
		/*
		*  name (string) Single word, no spaces. Underscores allowed
		*/
		
		$this->name = 'background';
		
		
		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/
		
		$this->label = __('Background', 'acf-background');
		
		
		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/
		
		$this->category = 'Design';
		
		
		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/
		
		$this->defaults = array(
            'background-repeat'     =>  1,
            'background-size'       =>  0,
            'background-attachment' =>  0,
            'background-position'   =>  0,
            'background-color'      =>  1,
            'background-image'      =>  1,
            'background-clip'       =>  0,
            'background-origin'     =>  0,
            'preview-media'         =>  1,
            'preview'               =>  1,
            'preview-height'        =>  200,
		);
		
		
		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('background', 'error');
		*/
		
		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-background'),
		);
		
				
		// do not delete!
    	parent::__construct();
    	
	}
	
	
	/*
	*  render_field_settings()
	*
	*  Create extra settings for your field. These are visible when editing a field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field_settings( $field ) {
		
		/*
		*  acf_render_field_setting
		*
		*  This function will create a setting for your field. Simply pass the $field parameter and an array of field settings.
		*  The array of settings does not require a `value` or `prefix`; These settings are found from the $field array.
		*
		*  More than one setting can be added by copy/paste the above code.
		*  Please note that you must also have a matching $defaults value for the field name (font_size)
		*/

        acf_render_field_setting( $field, array(
            'label'			=> __('Display Repeat Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-repeat',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'			=> __('Display Size Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-size',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
         
        acf_render_field_setting( $field, array(
            'label'			=> __('Display Attachment Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-attachment',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'			=> __('Display Position?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-position',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'			=> __('Display Color Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-color',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'			=> __('Display Image Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-image',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'			=> __('Display Clip Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-clip',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'			=> __('Display Origin Option?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'background-origin',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'			=> __('Display Preview Media?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'preview-media',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));

        acf_render_field_setting( $field, array(
            'label'			=> __('Display Preview?','acf-background'),
            'type'			=> 'radio',
            'name'			=> 'preview',
            'layout'  =>  'horizontal',
            'choices' =>  array(
                1 => __('Yes', 'acf-background'),
                0 => __('No', 'acf-background'),
            )
        ));
        
        acf_render_field_setting( $field, array(
            'label'			=> __('Preview Height','acf-background'),
            'type'			=> 'number',
            'name'			=> 'preview-height',
            'prepend'		=> 'px',
        ));

	}
	
	
	
	/*
	*  render_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field (array) the $field being rendered
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field (array) the $field being edited
	*  @return	n/a
	*/
	
	function render_field( $field ) {
		
		
		/*
		*  Review the data of $field.
		*  This will show what data is available
		*/
        $_field = $field;
        $field = array_merge($this->defaults, $field);
        $value = $field['value'];
		?>
		<div class="rey-main">
			<div class="rey-container-background" id="container-background">
                <?php
                if ($field['background-color'] == 1) {
                ?>
                    <input data-id="<?php print $field['id']; ?>" name="<?php print $field['name']; ?>[background-color]" id="<?php print $field['id']; ?>-color" class="rey-color rey-background-input rey-color-init <?php print $field['class']; ?>" type="text" value="<?php print $value['background-color']; ?>" data-default-color="#ffffff" />

            <?php

                    if ($field['background-repeat'] == 1 OR $field['background-position'] == 1 OR $field['background-attachment'] == 1) {
                        echo '<br />';
                    }
                }

                if ($field['background-repeat'] == 1) {
                    $array = array(
                        'no-repeat' => 'No Repeat',
                        'repeat' 	=> 'Repeat All',
                        'repeat-x' 	=> 'Repeat Horizontally',
                        'repeat-y' 	=> 'Repeat Vertically',
                        'inherit'	=> 'Inherit',
                    );
               ?>
                    <select id="<?php print $field['id']; ?>-repeat-select" data-placeholder="<?php print __("Background Repeat","acf"); ?>" name="<?php print $field['name']; ?>[background-repeat]" class="rey-select-item rey-background-input background-repeat <?php print $field['class']; ?>">
                        <option value=""><?php echo __("Background Repeat","acf"); ?></option>
            <?php
                        foreach ($array as $k=>$v) {
            ?>
                            <option value="<?php print $k; ?>" <?php print selected($value['background-repeat'], $k, false); ?>><?php print $v; ?></option>
            <?php
                        }
            ?>
                    </select>
            <?php
                }

                if ($field['background-clip'] == 1) {
                    $array = array(
                        'border-box' 	=> 'Border Box',
                        'padding-box' 	=> 'Padding Box',
                        'content-box' 	=> 'Content Box',
                        'inherit'       => 'Inherit',
                    );
                    
                    echo '<select id="' . $field['id'] . '-clip-select" data-placeholder="' . __("Background Clip","acf") . '" name="' . $field['name'] . '[background-clip]" class="rey-select-item rey-background-input background-clip ' . $field['class'] . '">';
                        echo '<option value="">' . __("Background Clip","acf") . '</option>';
                        foreach ($array as $k=>$v) {
                            echo '<option value="' . $k . '" ' . selected($value['background-clip'], $k, false) . '>' . $v . '</option>';
                        }
                    echo '</select>';
                }

                if ($field['background-origin'] == 1) {
                    $array = array(
                        'border-box' 	=> 'Border Box',
                        'padding-box' 	=> 'Padding Box',
                        'content-box' 	=> 'Content Box',
                        'inherit'       => 'Inherit',
                    );
                    echo '<select id="' . $field['id'] . '-origin-select" data-placeholder="' . __("Background Origin","acf") . '" name="' . $field['name'] . '[background-origin]" class="rey-select-item rey-background-input background-origin ' . $field['class'] . '">';
                    
                    echo '<option value="">' . __("Background Origin","acf") . '</option>';
                        foreach ($array as $k => $v) {
                            echo '<option value="' . $k . '" ' . selected($value['background-origin'], $k, false) . '>' . $v . '</option>';
                        }
                    echo '</select>';
                }

                if ($field['background-size'] == 1) {
                    $array = array(
                        'cover' 	=> 'Cover',
                        'contain' 	=> 'Contain',
                        'inherit'	=> 'Inherit',
                    );

                    echo '<select id="' . $field['id'] . '-size-select" data-placeholder="' . __( 'Background Size', 'acf' ) . '" name="' . $field['name'] . '[background-size]' . '" class="rey-select-item rey-background-input background-size ' . $field['class'] . '">';
                    
                    echo '<option value="">' . __("Background Size","acf") . '</option>';
                        foreach ($array as $k => $v) {
                            echo '<option value="' . $k . '"' . selected($value['background-size'], $k, false) . '>' . $v . '</option>';
                        }
                    echo '</select>';
                }

                if ( $field['background-attachment'] == 1 ) {
                    $array = array(
                        'scroll' 	=> 'Scroll',
                        'fixed' 	=> 'Fixed',
                        'local' 	=> 'Local',
                        'inherit'	=> 'Inherit',
                    );
                    echo '<select id="'.$field['id'].'-attachment-select" data-placeholder="' . __( 'Background Attachment', 'acf' ) . '" name="' . $field['name'] . '[background-attachment]' . '" class="rey-select-item rey-background-input background-attachment '.$field['class'].'">';
                    echo '<option value="">' . __("Background Attachment","acf") . '</option>';

                        foreach ($array as $k=>$v) {
                            echo '<option value="'. $k .'"'.selected($value['background-attachment'], $k, false).'>'. $v .'</option>';
                        }
                    echo '</select>';
                }

                if ( $field['background-position'] == 1 ) {
                    $array = array(
                        'left top' 		=> 'Left Top',
                        'left center' 	=> 'Left center',
                        'left bottom' 	=> 'Left Bottom',
                        'center top' 	=> 'Center Top',
                        'center center' => 'Center Center',
                        'center bottom' => 'Center Bottom',
                        'right top' 	=> 'Right Top',
                        'right center' 	=> 'Right center',
                        'right bottom' 	=> 'Right Bottom',
                        'inherit' 		=> 'Inherit',
                    );
                    echo '<select id="'.$field['id'].'-position-select" data-placeholder="' . __( 'Background Position', 'acf' ) . '" name="' . $field['name'] . '[background-position]' . '" class="rey-select-item rey-background-input background-position '.$field['class'].'">';
                        echo '<option value="">' . __("Background Position","acf") . '</option>';

                        foreach ($array as $k=>$v) {
                            echo '<option value="'. $k .'"'.selected($value['background-position'], $k, false).'>'. $v .'</option>';
                        }
                    echo '</select>';
                }

                if ($field['background-image'] == 1) {
                    echo '<br />';

                    if( empty( $value['background-image'] ) && !empty( $value['media']['id'] ) ) {
                        $img = wp_get_attachment_image_src( $value['media']['id'], 'full' );
                        $value['background-image'] = $img[0];
                        $value['media']['width'] = $img[1];
                        $value['media']['height'] = $img[2];
                    }

                    $hide = 'hide ';

                    if( (isset( $field['preview-media'] ) && $field['preview-media'] == 0) ) {
                        $field['class'] .= " noPreview";
                    }

                    if( ( !empty( $field['background-image'] ) && $field['background-image'] == 1 ) || isset( $field['preview'] ) && $field['preview'] == 0 ) {
                        $hide = '';
                    }   

                    $placeholder = isset($field['placeholder']) ? $field['placeholder'] : __('No media selected','acf');

                    echo '<input placeholder="' . $placeholder .'" type="text" class="rey-background-input ' . $hide . 'upload ' . $field['class'] . '" name="' . $field['name'] . '[background-image]' . '" id="' . $field['name'] . '[' . $field['id'] . '][background-image]" value="' . $value['background-image'] . '" />';
                    echo '<input type="hidden" class="upload-id ' . $field['class'] . '" name="' . $field['name'] . '[media][id]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][id]" value="' . $value['media']['id'] . '" />';
                    echo '<input type="hidden" class="upload-height" name="' . $field['name'] . '[media][height]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][height]" value="' . $value['media']['height'] . '" />';
                    echo '<input type="hidden" class="upload-width" name="' . $field['name'] . '[media][width]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][width]" value="' . $value['media']['width'] . '" />';
                    echo '<input type="hidden" class="upload-thumbnail" name="' . $field['name'] . '[media][thumbnail]' . '" id="' . $field['name'] . '[' . $field['id'] . '][media][thumbnail]" value="' . $value['media']['thumbnail'] . '" />';

                    //Preview
                    $hide = '';

                    if( ($field['preview-media'] == 1 && $field['preview-media'] == 0) || ($value['background-image'] == '') ) {
                        $hide = 'hide ';
                    }

                    if ( $value['media']['thumbnail'] == '' && !empty( $value['background-image'] ) ) { // Just in case
                        if ( !empty( $value['media']['id'] ) ) {
                            $image = wp_get_attachment_image_src( $value['media']['id'], array(150, 150) );
                            $value['media']['thumbnail'] = $image[0];
                        } else {
                            $value['media']['thumbnail'] = $value['background-image'];    
                        }
                    }

                    echo '<div class="' . $hide . 'screenshot">';
                    echo '<a class="of-uploaded-image" href="' . $value['background-image'] . '" target="_blank">';
                    echo '<img class="rey-option-image" id="image_' . $value['media']['id'] . '" src="' . $value['media']['thumbnail'] . '" alt="" target="_blank" rel="external" />';
                    echo '</a>';
                    echo '</div>';

                    //Upload controls DIV
                    echo '<div class="upload_button_div">';

                    //If the user has WP3.5+ show upload/remove button
                    echo '<span class="button background_upload_button" id="' . $field['id'] . '-media">' . __( 'Upload', 'acf' ) . '</span>';

                    $hide = '';
                    if( empty( $value['background-image'] ) || $value['background-image'] == '' )
                        $hide =' hide';

                    echo '<span class="button remove-image' . $hide . '" id="reset_' . $field['id'] . '" rel="' . $field['id'] . '">' . __( 'Remove', 'acf' ) . '</span>';

                    echo '</div>';
                }

                if ( !isset( $field['preview'] ) || $field['preview'] != 0 ) {
                    $css = $this -> getCSS($field);
                    if (empty($css)) {
                        $css = "display:none;";
                    }
                    $css .= 'height: ' . $field['preview-height'] . 'px;';
                    echo '<p class="clear ' . $field['id'] . '_previewer background-preview" style="' . $css . '">&nbsp;</p>';
        
                }
                ?>
    		</div>
    	</div>
    <?php
	}
    
    function getCSS($field) {
        $css = '';
        if (!empty($field['value'])) {
            foreach($field['value'] as $key=>$value) {
                if (!empty($value) && $key != "media" && $key!='color-transparency') {
                    if ($key == "background-image") {
                        $css .= $key.":url('".$value."');";
                    } else {
                        $css .= $key.":".$value.";";
                    }

                }
            }
        }
        return $css;
    }
	
		
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function input_admin_enqueue_scripts() {
		
		$dir = plugin_dir_url( __FILE__ );
		
		
		// register & include JS
		wp_register_script( 'acf-input-background', "{$dir}js/input.js" );
		wp_enqueue_script('acf-input-background');
		
		
		// register & include CSS
		wp_register_style( 'acf-input-background', "{$dir}css/input.css" ); 
		wp_enqueue_style('acf-input-background');
		
		
	}
	
	*/
	
	
	/*
	*  input_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/
	
	function input_admin_head() {
        
        $dir = plugin_dir_url( __FILE__ );

        // register & include JS
        wp_register_script( 'acf-js-background', "{$dir}js/field_background.js" );
        wp_enqueue_script('acf-js-background');

        // register & include CSS
        wp_register_style( 'acf-css-background', "{$dir}css/field_background.css" ); 
        wp_enqueue_style('acf-css-background');
        
        wp_enqueue_media();
        
	}
	
	
	/*
   	*  input_form_data()
   	*
   	*  This function is called once on the 'input' page between the head and footer
   	*  There are 2 situations where ACF did not load during the 'acf/input_admin_enqueue_scripts' and 
   	*  'acf/input_admin_head' actions because ACF did not know it was going to be used. These situations are
   	*  seen on comments / user edit forms on the front end. This function will always be called, and includes
   	*  $args that related to the current screen such as $args['post_id']
   	*
   	*  @type	function
   	*  @date	6/03/2014
   	*  @since	5.0.0
   	*
   	*  @param	$args (array)
   	*  @return	n/a
   	*/
   	
   	/*
   	
   	function input_form_data( $args ) {
	   	
		
	
   	}
   	
   	*/
	
	
	/*
	*  input_admin_footer()
	*
	*  This action is called in the admin_footer action on the edit screen where your field is created.
	*  Use this action to add CSS and JavaScript to assist your render_field() action.
	*
	*  @type	action (admin_footer)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
		
	function input_admin_footer() {
	
		
		
	}
	
	*/
	
	
	/*
	*  field_group_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is edited.
	*  Use this action to add CSS + JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_enqueue_scripts)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_enqueue_scripts() {
		
	}
	
	*/

	
	/*
	*  field_group_admin_head()
	*
	*  This action is called in the admin_head action on the edit screen where your field is edited.
	*  Use this action to add CSS and JavaScript to assist your render_field_options() action.
	*
	*  @type	action (admin_head)
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	n/a
	*  @return	n/a
	*/

	/*
	
	function field_group_admin_head() {
	
	}
	
	*/


	/*
	*  load_value()
	*
	*  This filter is applied to the $value after it is loaded from the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	/*
	
	function load_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	*/
	
	
	/*
	*  update_value()
	*
	*  This filter is applied to the $value before it is saved in the db
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value found in the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*  @return	$value
	*/
	
	/*
	
	function update_value( $value, $post_id, $field ) {
		
		return $value;
		
	}
	
	*/
	
	
	/*
	*  format_value()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is returned to the template
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value (mixed) the value which was loaded from the database
	*  @param	$post_id (mixed) the $post_id from which the value was loaded
	*  @param	$field (array) the field array holding all the field options
	*
	*  @return	$value (mixed) the modified value
	*/
		
	/*
	
	function format_value( $value, $post_id, $field ) {
		
		// bail early if no value
		if( empty($value) ) {
		
			return $value;
			
		}
		
		
		// apply setting
		if( $field['font_size'] > 12 ) { 
			
			// format the value
			// $value = 'something';
		
		}
		
		
		// return
		return $value;
	}
	
	*/
	
	
	/*
	*  validate_value()
	*
	*  This filter is used to perform validation on the value prior to saving.
	*  All values are validated regardless of the field's required setting. This allows you to validate and return
	*  messages to the user if the value is not correct
	*
	*  @type	filter
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$valid (boolean) validation status based on the value and the field's required setting
	*  @param	$value (mixed) the $_POST value
	*  @param	$field (array) the field array holding all the field options
	*  @param	$input (string) the corresponding input name for $_POST value
	*  @return	$valid
	*/
	
	/*
	
	function validate_value( $valid, $value, $field, $input ){
		
		// Basic usage
		if( $value < $field['custom_minimum_setting'] )
		{
			$valid = false;
		}
		
		
		// Advanced usage
		if( $value < $field['custom_minimum_setting'] )
		{
			$valid = __('The value is too little!','acf-background'),
		}
		
		
		// return
		return $valid;
		
	}
	
	*/
	
	
	/*
	*  delete_value()
	*
	*  This action is fired after a value has been deleted from the db.
	*  Please note that saving a blank value is treated as an update, not a delete
	*
	*  @type	action
	*  @date	6/03/2014
	*  @since	5.0.0
	*
	*  @param	$post_id (mixed) the $post_id from which the value was deleted
	*  @param	$key (string) the $meta_key which the value was deleted
	*  @return	n/a
	*/
	
	/*
	
	function delete_value( $post_id, $key ) {
		
		
		
	}
	
	*/
	
	
	/*
	*  load_field()
	*
	*  This filter is applied to the $field after it is loaded from the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0	
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function load_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  update_field()
	*
	*  This filter is applied to the $field before it is saved to the database
	*
	*  @type	filter
	*  @date	23/01/2013
	*  @since	3.6.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	$field
	*/
	
	/*
	
	function update_field( $field ) {
		
		return $field;
		
	}	
	
	*/
	
	
	/*
	*  delete_field()
	*
	*  This action is fired after a field is deleted from the database
	*
	*  @type	action
	*  @date	11/02/2014
	*  @since	5.0.0
	*
	*  @param	$field (array) the field array holding all the field options
	*  @return	n/a
	*/
	
	/*
	
	function delete_field( $field ) {
		
		
		
	}	
	
	*/
	
	
}


// create field
new acf_field_background();

?>
