<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

e107::lan('ihaf',true);


class ihaf_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'ihaf_ui',
			'path' 			=> null,
			'ui' 			=> 'ihaf_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(
			
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/div0'      => array('divider'=> true),
		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P'),
		
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'Insert header and footer';
}




				
class ihaf_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'Insert header and footer';
		protected $pluginName		= 'ihaf';
	//	protected $eventName		= 'ihaf-'; // remove comment to enable event triggers in admin. 		
		protected $table			= '';
		protected $pid				= '';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
		protected $batchExport     = true;
		protected $batchCopy		= true;

	//	protected $sortField		= 'somefield_order';
	//	protected $sortParent      = 'somefield_parent';
	//	protected $treePrefix      = 'somefield_title';

	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= ' DESC';
	
		protected $fields 		= array (
		);		
		
		protected $fieldpref = array();
		

	//	protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
			'ihaf_header_area'  => array('title'=> IHAF_HEADER_AREA, 'tab'=>0, 'type'=>'dropdown', 'data' => 'int', 'writeparms' => array('default' => 2), 'help' => IHAF_HEADER_AREA_HELP),
			'ihaf_header'       => array('title'=> IHAF_HEADER,      'tab'=>0, 'type'=>'textarea', 'data' => 'str', 'help'=>IHAF_HEADER_HELP),
			'ihaf_footer_area'  => array('title'=> IHAF_FOOTER_AREA, 'tab'=>0, 'type'=>'dropdown', 'data' => 'int', 'writeparms' => array('default' => 2), 'help'=>IHAF_FOOTER_AREA_HELP),
			'ihaf_footer'       => array('title'=> IHAF_FOOTER,      'tab'=>0, 'type'=>'textarea', 'data' => 'str', 'help'=>IHAF_FOOTER_HELP),
		); 

	
		public function init()
		{
			// This code may be removed once plugin development is complete. 
			if(!e107::isInstalled('ihaf'))
			{
				e107::getMessage()->addWarning("This plugin is not yet installed. Saving and loading of preference or table data will fail.");
			}
			
			// Set drop-down values (if any). 
			$this->prefs['ihaf_header_area']['writeParms'] = array(0 => IHAF_BOTH, 1 => IHAF_ADMIN, 2 => IHAF_USER);
			$this->prefs['ihaf_footer_area']['writeParms'] = array(0 => IHAF_BOTH, 1 => IHAF_ADMIN, 2 => IHAF_USER);
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data,$old_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
		// left-panel help menu area. (replaces e_help.php used in old plugins)
		public function renderHelp()
		{
			$caption = LAN_HELP;
			$text = nl2br(IHAF_HELP); //deftrue('IHAF_HELP', "Insert header and footer lets you insert text (e.g. javascript) into the header and/or footer of the page.");

			return array('caption'=>$caption,'text'=> $text);

		}
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			$otherField  = $this->getController()->getFieldVar('other_field_name');
			return $text;
			
		}
		
	
		
		
	*/
			
}
				


class ihaf_form_ui extends e_admin_form_ui
{

}		
		
		
new ihaf_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

