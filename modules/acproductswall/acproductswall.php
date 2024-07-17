<?php

if(!defined('_PS_VERSION_'))
	exit;

class AcProductsWall extends Module
{
	public function __construct()
	{
		$this->name = 'acproductswall';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Anthony Cardinale';
		$this->displayName = $this->l('Products Wall');
		$this->description = $this->l('Show your products selection on home page.');
		$this->bootstrap = true;
		parent::__construct();
	}

	public function install()
	{
		if(!parent::install())
			return false;

		if( 
			!$this->registerHook('displayHeader') ||
			!$this->registerHook('displayHome')
		)
			return false;

		return true;
	}

	public function uninstall()
	{
		if(!parent::uninstall())
			return false;

		return true;
	}

	public function getContent()
	{
		$output = null;
		
		if (Tools::isSubmit('submit'.$this->name))
		{
			$AC_TITRE_PAGE = strval(Tools::getValue('AC_TITRE_PAGE'));
			/*
			if (!$AC_TITRE_PAGE  || empty($AC_TITRE_PAGE) || !Validate::isCleanHtml($AC_TITRE_PAGE))
				$output .= $this->displayError($this->l('Invalid page title'));
			*/

			/* CONFIGURATION BLOC 1 */
			/*$AC_TITLE_BLOC_1 = strval(Tools::getValue('AC_TITLE_BLOC_1'));
			if (!$AC_TITLE_BLOC_1  || empty($AC_TITLE_BLOC_1) || !Validate::isCleanHtml($AC_TITLE_BLOC_1))
				$output .= $this->displayError($this->l('Invalid title bloc 1'));
			*/
			$AC_URL_BLOC_1 = strval(Tools::getValue('AC_URL_BLOC_1'));
			if (!$AC_URL_BLOC_1  || empty($AC_URL_BLOC_1) || !Validate::isUrl($AC_URL_BLOC_1))
				$output .= $this->displayError($this->l('Invalid URL link bloc 1'));
			
			$AC_IMG_BLOC_1 = strval(Tools::getValue('AC_IMG_BLOC_1'));
			if ($AC_IMG_BLOC_1  && !Validate::isUnixName($AC_IMG_BLOC_1))
				$output .= $this->displayError($this->l('Invalid image name bloc 1'));
				
			if (isset($_FILES['AC_FILE_BLOC_1']) && is_uploaded_file($_FILES['AC_FILE_BLOC_1']['tmp_name']))
			{				
				if ($error = ImageManager::validateUpload($_FILES['AC_FILE_BLOC_1'], (Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE') * 1024 * 1024)))
					$output .= $this->displayError($error);
				
				if (!$output)
				{
					$upload_path = $this->local_path.'views/img/';
					$pathinfo = pathinfo($_FILES['AC_FILE_BLOC_1']['name']);
					do $uniqid = sha1(microtime());
					while (file_exists($upload_path.$uniqid.'.'.$pathinfo['extension']));
					if (!copy($_FILES['AC_FILE_BLOC_1']['tmp_name'], $upload_path.$uniqid.'.'.$pathinfo['extension']))
						$output .= $this->displayError($this->l('File copy failed'));

					@unlink($_FILES['file']['tmp_name']);
					
					if ($AC_IMG_BLOC_1 && file_exists($upload_path.$AC_IMG_BLOC_1))
						@unlink($upload_path.$AC_IMG_BLOC_1);
					
					$AC_IMG_BLOC_1 = $uniqid.'.'.$pathinfo['extension'];
				}
			}

			$AC_COLOR_BLOC_1 = strval(Tools::getValue('AC_COLOR_BLOC_1'));
			if (!$AC_COLOR_BLOC_1  || empty($AC_COLOR_BLOC_1) )
				$output .= $this->displayError($this->l('Invalid color'));
			/* FIN DE LA CONFIGURATION BLOC 1 */

			/* CONFIGURATION BLOC 2 */
			/*$AC_TITLE_BLOC_2 = strval(Tools::getValue('AC_TITLE_BLOC_2'));
			if (!$AC_TITLE_BLOC_2  || empty($AC_TITLE_BLOC_2) || !Validate::isCleanHtml($AC_TITLE_BLOC_2))
				$output .= $this->displayError($this->l('Invalid title bloc 2'));
			*/
			$AC_URL_BLOC_2 = strval(Tools::getValue('AC_URL_BLOC_2'));
			if (!$AC_URL_BLOC_2  || empty($AC_URL_BLOC_2) || !Validate::isUrl($AC_URL_BLOC_2))
				$output .= $this->displayError($this->l('Invalid URL link bloc 2'));
			
			$AC_IMG_BLOC_2 = strval(Tools::getValue('AC_IMG_BLOC_2'));
			if ($AC_IMG_BLOC_2  && !Validate::isUnixName($AC_IMG_BLOC_2))
				$output .= $this->displayError($this->l('Invalid image name bloc 2'));
				
			if (isset($_FILES['AC_FILE_BLOC_2']) && is_uploaded_file($_FILES['AC_FILE_BLOC_2']['tmp_name']))
			{				
				if ($error = ImageManager::validateUpload($_FILES['AC_FILE_BLOC_2'], (Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE') * 1024 * 1024)))
					$output .= $this->displayError($error);
				
				if (!$output)
				{
					$upload_path = $this->local_path.'views/img/';
					$pathinfo = pathinfo($_FILES['AC_FILE_BLOC_2']['name']);
					do $uniqid = sha1(microtime());
					while (file_exists($upload_path.$uniqid.'.'.$pathinfo['extension']));
					if (!copy($_FILES['AC_FILE_BLOC_2']['tmp_name'], $upload_path.$uniqid.'.'.$pathinfo['extension']))
						$output .= $this->displayError($this->l('File copy failed'));

					@unlink($_FILES['file']['tmp_name']);
					
					if ($AC_IMG_BLOC_2 && file_exists($upload_path.$AC_IMG_BLOC_2))
						@unlink($upload_path.$AC_IMG_BLOC_2);
					
					$AC_IMG_BLOC_2 = $uniqid.'.'.$pathinfo['extension'];
				}
			}

			$AC_COLOR_BLOC_2 = strval(Tools::getValue('AC_COLOR_BLOC_2'));
			if (!$AC_COLOR_BLOC_2  || empty($AC_COLOR_BLOC_2) )
				$output .= $this->displayError($this->l('Invalid color'));
			/* FIN DE LA CONFIGURATION BLOC 2 */

			/* CONFIGURATION BLOC 3 */
			/*$AC_TITLE_BLOC_3 = strval(Tools::getValue('AC_TITLE_BLOC_3'));
			if (!$AC_TITLE_BLOC_3  || empty($AC_TITLE_BLOC_3) || !Validate::isCleanHtml($AC_TITLE_BLOC_3))
				$output .= $this->displayError($this->l('Invalid title'));
			*/
			$AC_URL_BLOC_3 = strval(Tools::getValue('AC_URL_BLOC_3'));
			if (!$AC_URL_BLOC_3  || empty($AC_URL_BLOC_3) || !Validate::isUrl($AC_URL_BLOC_3))
				$output .= $this->displayError($this->l('Invalid URL link'));
			
			$AC_IMG_BLOC_3 = strval(Tools::getValue('AC_IMG_BLOC_3'));
			if ($AC_IMG_BLOC_3  && !Validate::isUnixName($AC_IMG_BLOC_3))
				$output .= $this->displayError($this->l('Invalid image name'));
				
			if (isset($_FILES['AC_FILE_BLOC_3']) && is_uploaded_file($_FILES['AC_FILE_BLOC_3']['tmp_name']))
			{				
				if ($error = ImageManager::validateUpload($_FILES['AC_FILE_BLOC_3'], (Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE') * 3024 * 3024)))
					$output .= $this->displayError($error);
				
				if (!$output)
				{
					$upload_path = $this->local_path.'views/img/';
					$pathinfo = pathinfo($_FILES['AC_FILE_BLOC_3']['name']);
					do $uniqid = sha1(microtime());
					while (file_exists($upload_path.$uniqid.'.'.$pathinfo['extension']));
					if (!copy($_FILES['AC_FILE_BLOC_3']['tmp_name'], $upload_path.$uniqid.'.'.$pathinfo['extension']))
						$output .= $this->displayError($this->l('File copy failed'));

					@unlink($_FILES['file']['tmp_name']);
					
					if ($AC_IMG_BLOC_3 && file_exists($upload_path.$AC_IMG_BLOC_3))
						@unlink($upload_path.$AC_IMG_BLOC_3);
					
					$AC_IMG_BLOC_3 = $uniqid.'.'.$pathinfo['extension'];
				}
			}

			$AC_COLOR_BLOC_3 = strval(Tools::getValue('AC_COLOR_BLOC_3'));
			if (!$AC_COLOR_BLOC_3  || empty($AC_COLOR_BLOC_3) )
				$output .= $this->displayError($this->l('Invalid color'));
			/* FIN DE LA CONFIGURATION BLOC 3 */

			/* CONFIGURATION BLOC 4 */
			/*$AC_TITLE_BLOC_4 = strval(Tools::getValue('AC_TITLE_BLOC_4'));
			if (!$AC_TITLE_BLOC_4  || empty($AC_TITLE_BLOC_4) || !Validate::isCleanHtml($AC_TITLE_BLOC_4))
				$output .= $this->displayError($this->l('Invalid title'));
			*/
			$AC_URL_BLOC_4 = strval(Tools::getValue('AC_URL_BLOC_4'));
			if (!$AC_URL_BLOC_4  || empty($AC_URL_BLOC_4) || !Validate::isUrl($AC_URL_BLOC_4))
				$output .= $this->displayError($this->l('Invalid URL link'));
			
			$AC_IMG_BLOC_4 = strval(Tools::getValue('AC_IMG_BLOC_4'));
			if ($AC_IMG_BLOC_4  && !Validate::isUnixName($AC_IMG_BLOC_4))
				$output .= $this->displayError($this->l('Invalid image name'));
				
			if (isset($_FILES['AC_FILE_BLOC_4']) && is_uploaded_file($_FILES['AC_FILE_BLOC_4']['tmp_name']))
			{				
				if ($error = ImageManager::validateUpload($_FILES['AC_FILE_BLOC_4'], (Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE') * 4024 * 4024)))
					$output .= $this->displayError($error);
				
				if (!$output)
				{
					$upload_path = $this->local_path.'views/img/';
					$pathinfo = pathinfo($_FILES['AC_FILE_BLOC_4']['name']);
					do $uniqid = sha1(microtime());
					while (file_exists($upload_path.$uniqid.'.'.$pathinfo['extension']));
					if (!copy($_FILES['AC_FILE_BLOC_4']['tmp_name'], $upload_path.$uniqid.'.'.$pathinfo['extension']))
						$output .= $this->displayError($this->l('File copy failed'));

					@unlink($_FILES['file']['tmp_name']);
					
					if ($AC_IMG_BLOC_4 && file_exists($upload_path.$AC_IMG_BLOC_4))
						@unlink($upload_path.$AC_IMG_BLOC_4);
					
					$AC_IMG_BLOC_4 = $uniqid.'.'.$pathinfo['extension'];
				}
			}

			$AC_COLOR_BLOC_4 = strval(Tools::getValue('AC_COLOR_BLOC_4'));
			if (!$AC_COLOR_BLOC_4  || empty($AC_COLOR_BLOC_4) )
				$output .= $this->displayError($this->l('Invalid color'));
			/* FIN DE LA CONFIGURATION BLOC 4 */
			

			if (!$output)
			{
				Configuration::updateValue('AC_TITRE_PAGE', $AC_TITRE_PAGE);

				for ($i = 1; $i <= 4; $i++) {
				    //Configuration::updateValue('AC_TITLE_BLOC_'.$i, ${"AC_TITLE_BLOC_$i"});
					Configuration::updateValue('AC_URL_BLOC_'.$i,   ${"AC_URL_BLOC_$i"});
					Configuration::updateValue('AC_IMG_BLOC_'.$i,   ${"AC_IMG_BLOC_$i"});
					Configuration::updateValue('AC_COLOR_BLOC_'.$i, ${"AC_COLOR_BLOC_$i"});
				}

				$this->registerHook('displayHome');
				$output .= $this->displayConfirmation($this->l('Settings updated'));
			}
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		$this->context->controller->addCSS($this->_path.'views/css/acadmin.css', 'all');
		$default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
		$fields_form[0]['form'] = array(
			'input' => array(
				array(
					'type' => 'text',
					'label' => $this->l('Page title'),
					'name' => 'AC_TITRE_PAGE',
					'size' => 60,
					'required' => false
				),
				array(
					'type' => 'text',
					'class' => 'ac_separator',
					'name' => 'separator',
					'disabled' => 'disabled',
					'required' => false
				),


				/*array(
					'type' => 'text',
					'label' => $this->l('Title bloc 1'),
					'name' => 'AC_TITLE_BLOC_1',
					'size' => 60,
					'required' => false
				),*/
				array(
					'type' => 'text',
					'label' => $this->l('URL link'),
					'name' => 'AC_URL_BLOC_1',
					'size' => 60,
					'required' => true
				),
				array(
					'type' => 'file',
					'label' => $this->l('Image'),
					'name' => 'AC_FILE_BLOC_1',
					'display_image' => true
				),
				array(
					'type' => 'hidden',
					'name' => 'AC_IMG_BLOC_1'
				),
				array(
					'type' => 'color',
					'label' => $this->l('Link color'),
					'name' => 'AC_COLOR_BLOC_1',
					'required' => true
				),
				/*
				*/
				array(
					'type' => 'text',
					'class' => 'ac_separator',
					'name' => 'separator',
					'disabled' => 'disabled',
					'required' => false
				),


				/*array(
					'type' => 'text',
					'label' => $this->l('Title bloc 2'),
					'name' => 'AC_TITLE_BLOC_2',
					'size' => 60,
					'required' => false
				),*/
				array(
					'type' => 'text',
					'label' => $this->l('URL link'),
					'name' => 'AC_URL_BLOC_2',
					'size' => 60,
					'required' => true
				),
				array(
					'type' => 'file',
					'label' => $this->l('Image'),
					'name' => 'AC_FILE_BLOC_2',
					'display_image' => true
				),
				array(
					'type' => 'hidden',
					'name' => 'AC_IMG_BLOC_2'
				),
				array(
					'type' => 'color',
					'label' => $this->l('Link color'),
					'name' => 'AC_COLOR_BLOC_2',
					'required' => true
				),
				/*
				*/
				array(
					'type' => 'text',
					'class' => 'ac_separator',
					'name' => 'separator',
					'disabled' => 'disabled',
					'required' => false
				),


				/*array(
					'type' => 'text',
					'label' => $this->l('Title bloc 3'),
					'name' => 'AC_TITLE_BLOC_3',
					'size' => 60,
					'required' => false
				),*/
				array(
					'type' => 'text',
					'label' => $this->l('URL link'),
					'name' => 'AC_URL_BLOC_3',
					'size' => 60,
					'required' => true
				),
				array(
					'type' => 'file',
					'label' => $this->l('Image'),
					'name' => 'AC_FILE_BLOC_3',
					'display_image' => true
				),
				array(
					'type' => 'hidden',
					'name' => 'AC_IMG_BLOC_3'
				),
				array(
					'type' => 'color',
					'label' => $this->l('Link color'),
					'name' => 'AC_COLOR_BLOC_3',
					'required' => true
				),
				/*
				*/
				array(
					'type' => 'text',
					'class' => 'ac_separator',
					'name' => 'separator',
					'disabled' => 'disabled',
					'required' => false
				),


				/*array(
					'type' => 'text',
					'label' => $this->l('Title bloc 4'),
					'name' => 'AC_TITLE_BLOC_4',
					'size' => 60,
					'required' => false
				),*/
				array(
					'type' => 'text',
					'label' => $this->l('URL link'),
					'name' => 'AC_URL_BLOC_4',
					'size' => 60,
					'required' => true
				),
				array(
					'type' => 'file',
					'label' => $this->l('Image'),
					'name' => 'AC_FILE_BLOC_4',
					'display_image' => true
				),
				array(
					'type' => 'hidden',
					'name' => 'AC_IMG_BLOC_4'
				),
				array(
					'type' => 'color',
					'label' => $this->l('Link color'),
					'name' => 'AC_COLOR_BLOC_4',
					'required' => true
				),
				/*
				*/

			),

			'submit' => array(
				'title' => $this->l('Save'),
				'class' => 'button'
			)
		);

		$helper = new HelperForm();
		$helper->id = $this->id;
		$helper->module = $this;
		$helper->name_controller = $this->name;
		$helper->identifier = $this->identifier;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
		$helper->default_form_language = $default_lang;
		$helper->allow_employee_form_lang = $default_lang;
		$helper->languages = Language::getLanguages();
		foreach ($helper->languages as $k => $language)
			$helper->languages[$k]['is_default'] = (int)($language['id_lang'] == $default_lang);
		$helper->title = $this->displayName;
		$helper->show_toolbar = true;
		$helper->toolbar_scroll = true;
		$helper->submit_action = 'submit'.$this->name;
		$helper->toolbar_btn = array(
			'save' => array(
				'desc' => $this->l('Save'),
				'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
				'&token='.Tools::getAdminTokenLite('AdminModules'),
			),
			'back' => array(
				'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
				'desc' => $this->l('Back to list')
			)
		);
		
		$helper->fields_value['AC_TITRE_PAGE'] = Configuration::get('AC_TITRE_PAGE');
		$helper->fields_value['AC_COLOR_BLOC_1'] = Configuration::get('AC_COLOR_BLOC_1');
		$helper->fields_value['AC_COLOR_BLOC_2'] = Configuration::get('AC_COLOR_BLOC_2');
		$helper->fields_value['AC_COLOR_BLOC_3'] = Configuration::get('AC_COLOR_BLOC_3');
		$helper->fields_value['AC_COLOR_BLOC_4'] = Configuration::get('AC_COLOR_BLOC_4');

		//$helper->fields_value['AC_TITLE_BLOC_1'] = Configuration::get('AC_TITLE_BLOC_1');
		$helper->fields_value['AC_URL_BLOC_1'] = Configuration::get('AC_URL_BLOC_1');
		$AC_IMG_BLOC_1 = Configuration::get('AC_IMG_BLOC_1');
		if ($AC_IMG_BLOC_1)
		{
			$helper->fields_value['AC_IMG_BLOC_1'] = $AC_IMG_BLOC_1;
			$pathinfo = pathinfo($AC_IMG_BLOC_1);
			$image = ImageManager::thumbnail($this->local_path.'views/img/'.$AC_IMG_BLOC_1, $AC_IMG_BLOC_1, 150, $pathinfo['extension'], true);
			$helper->fields_value['image'] = ($image) ? $image : false;
			$helper->fields_value['size'] = ($image) ? filesize($this->local_path.'views/img/'.$AC_IMG_BLOC_1) / 1000 : false;
		}

		//$helper->fields_value['AC_TITLE_BLOC_2'] = Configuration::get('AC_TITLE_BLOC_2');
		$helper->fields_value['AC_URL_BLOC_2'] = Configuration::get('AC_URL_BLOC_2');
		$AC_IMG_BLOC_2 = Configuration::get('AC_IMG_BLOC_2');
		if ($AC_IMG_BLOC_2)
		{
			$helper->fields_value['AC_IMG_BLOC_2'] = $AC_IMG_BLOC_2;
			$pathinfo = pathinfo($AC_IMG_BLOC_2);
			$image = ImageManager::thumbnail($this->local_path.'views/img/'.$AC_IMG_BLOC_2, $AC_IMG_BLOC_2, 150, $pathinfo['extension'], true);
			$helper->fields_value['image'] = ($image) ? $image : false;
			$helper->fields_value['size'] = ($image) ? filesize($this->local_path.'views/img/'.$AC_IMG_BLOC_2) / 1000 : false;
		}

		//$helper->fields_value['AC_TITLE_BLOC_3'] = Configuration::get('AC_TITLE_BLOC_3');
		$helper->fields_value['AC_URL_BLOC_3'] = Configuration::get('AC_URL_BLOC_3');
		$AC_IMG_BLOC_3 = Configuration::get('AC_IMG_BLOC_3');
		if ($AC_IMG_BLOC_3)
		{
			$helper->fields_value['AC_IMG_BLOC_3'] = $AC_IMG_BLOC_3;
			$pathinfo = pathinfo($AC_IMG_BLOC_3);
			$image = ImageManager::thumbnail($this->local_path.'views/img/'.$AC_IMG_BLOC_3, $AC_IMG_BLOC_3, 150, $pathinfo['extension'], true);
			$helper->fields_value['image'] = ($image) ? $image : false;
			$helper->fields_value['size'] = ($image) ? filesize($this->local_path.'views/img/'.$AC_IMG_BLOC_3) / 1000 : false;
		}

		//$helper->fields_value['AC_TITLE_BLOC_4'] = Configuration::get('AC_TITLE_BLOC_4');
		$helper->fields_value['AC_URL_BLOC_4'] = Configuration::get('AC_URL_BLOC_4');
		$AC_IMG_BLOC_4 = Configuration::get('AC_IMG_BLOC_4');
		if ($AC_IMG_BLOC_4)
		{
			$helper->fields_value['AC_IMG_BLOC_4'] = $AC_IMG_BLOC_4;
			$pathinfo = pathinfo($AC_IMG_BLOC_4);
			$image = ImageManager::thumbnail($this->local_path.'views/img/'.$AC_IMG_BLOC_4, $AC_IMG_BLOC_4, 150, $pathinfo['extension'], true);
			$helper->fields_value['image'] = ($image) ? $image : false;
			$helper->fields_value['size'] = ($image) ? filesize($this->local_path.'views/img/'.$AC_IMG_BLOC_4) / 1000 : false;
		}

		return $helper->generateForm($fields_form);
	}


	public function hookDisplayHome($params)
	{
		$this->smarty->assign(array(
			'AC_TITRE_PAGE' => Configuration::get('AC_TITRE_PAGE'),

			'AC_COLOR_BLOC_1' => Configuration::get('AC_COLOR_BLOC_1'),
			'AC_COLOR_BLOC_2' => Configuration::get('AC_COLOR_BLOC_2'),
			'AC_COLOR_BLOC_3' => Configuration::get('AC_COLOR_BLOC_3'),
			'AC_COLOR_BLOC_4' => Configuration::get('AC_COLOR_BLOC_4'),

			//'AC_TITLE_BLOC_1' => Configuration::get('AC_TITLE_BLOC_1'),
			'AC_URL_BLOC_1' => Configuration::get('AC_URL_BLOC_1'),
			'AC_IMG_BLOC_1' => $this->_path.'views/img/'.Configuration::get('AC_IMG_BLOC_1'),
			//'AC_TITLE_BLOC_2' => Configuration::get('AC_TITLE_BLOC_2'),
			'AC_URL_BLOC_2' => Configuration::get('AC_URL_BLOC_2'),
			'AC_IMG_BLOC_2' => $this->_path.'views/img/'.Configuration::get('AC_IMG_BLOC_2'),
			//'AC_TITLE_BLOC_3' => Configuration::get('AC_TITLE_BLOC_3'),
			'AC_URL_BLOC_3' => Configuration::get('AC_URL_BLOC_3'),
			'AC_IMG_BLOC_3' => $this->_path.'views/img/'.Configuration::get('AC_IMG_BLOC_3'),
			//'AC_TITLE_BLOC_4' => Configuration::get('AC_TITLE_BLOC_4'),
			'AC_URL_BLOC_4' => Configuration::get('AC_URL_BLOC_4'),
			'AC_IMG_BLOC_4' => $this->_path.'views/img/'.Configuration::get('AC_IMG_BLOC_4'),
		));
		return $this->display(__FILE__, 'hookHome.tpl');
	}


	public function hookDisplayHeader($params)
	{
		$this->context->controller->addCSS($this->_path.'views/css/'.$this->name.'.css');
		$this->context->controller->addJS($this->_path.'views/js/'.$this->name.'.js');
		$this->context->controller->addJquery();
	}

}