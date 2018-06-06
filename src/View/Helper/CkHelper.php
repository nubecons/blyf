<?php

namespace App\View\Helper;
use Cake\ORM\TableRegistry;

use Cake\View\Helper;

class CkHelper extends Helper
{
	public function Create($fieldName, $value='')
	{
		//Understanding CKEditor Toolbar Concepts
		//http://docs.ckeditor.com/#!/guide/dev_toolbarconcepts

		$Html = '<textarea name="'.$fieldName.'" id="'.$fieldName.'" rows="10" cols="80" class="validate[required]">'.$value.'</textarea>';

		// Replace the <textarea id="fieldName"> with a CKEditor
        $Html .= '<script>
                // instance, using default configuration.

				//Advacned Toolbar
				//CKEDITOR.replace( \''.$fieldName.'\' );

				//Basic Toolbar
				CKEDITOR.replace( \''.$fieldName.'\', {
					// Define the toolbar groups as it is a more accessible solution.
					toolbarGroups: [
						{"name":"basicstyles","groups":["basicstyles"]},
						{"name":"links","groups":["links"]},
						{"name":"paragraph","groups":["list","blocks"]},
						{"name":"document","groups":["mode"]},
						{"name":"insert","groups":["insert"]},
						{"name":"styles","groups":["styles"]},
						{"name":"sourcearea","groups":["sourcearea"]},
						{"name":"about","groups":["about"]}
					],
					// Remove the redundant buttons from toolbar groups defined above.
					removeButtons: \'Strike,Subscript,Superscript,Anchor,Specialchar\'
				} );
            </script>';
		
		return $Html;
	}
	
	public function CreateBasic($fieldName, $value='')
	{
		//Understanding CKEditor Toolbar Concepts
		//http://docs.ckeditor.com/#!/guide/dev_toolbarconcepts

		$Html = '<textarea name="'.$fieldName.'" id="'.$fieldName.'" rows="10" cols="80" class="validate[required]">'.$value.'</textarea>';

		// Replace the <textarea id="fieldName"> with a CKEditor
        $Html .= '<script>
                // instance, using default configuration.

				//Advacned Toolbar
				//CKEDITOR.replace( \''.$fieldName.'\' );

				//Basic Toolbar
				CKEDITOR.replace( \''.$fieldName.'\', {
					// Define the toolbar groups as it is a more accessible solution.
					toolbarGroups: [
						{"name":"basicstyles","groups":["basicstyles"]},
						{"name":"styles","groups":["styles"]}
					],
					// Remove the redundant buttons from toolbar groups defined above.
					removeButtons: \'Strike,Subscript,Superscript,Anchor,Specialchar\'
				} );
            </script>';
		
		return $Html;
	}
	
}
?>