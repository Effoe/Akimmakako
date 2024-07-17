<?php
/* Smarty version 4.3.1, created on 2024-07-17 09:03:51
  from 'C:\wamp64\www\prestashop\modules\acproductswall\views\templates\hook\hookHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_669788f74daa87_95466278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f5ef52c37de7e525b502e4e29c584c46de45b8' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\acproductswall\\views\\templates\\hook\\hookHome.tpl',
      1 => 1720605653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669788f74daa87_95466278 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['AC_TITRE_PAGE']->value)) {?>
	<h2 id="ac_pw_maintitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>mb_strtoupper((string) $_smarty_tpl->tpl_vars['AC_TITRE_PAGE']->value ?? '', 'UTF-8')),$_smarty_tpl ) );?>
</h2>
<?php }?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" id="ac_pw_leftcolumn">

			<?php if (!empty($_smarty_tpl->tpl_vars['AC_URL_BLOC_1']->value)) {?>
			<div class="ac_pw_blocleftsmall" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_IMG_BLOC_1']->value, ENT_QUOTES, 'UTF-8');?>
');">
				<center class="ac_pw_center_lien">
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_URL_BLOC_1']->value, ENT_QUOTES, 'UTF-8');?>
" class="ac_pw_lien" style="background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_COLOR_BLOC_1']->value, ENT_QUOTES, 'UTF-8');?>
;">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DISCOVER MORE','mod'=>'acproductswall'),$_smarty_tpl ) );?>

					</a>
				</center>
			</div>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['AC_URL_BLOC_2']->value)) {?>
			<div class="ac_pw_blocleftbig" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_IMG_BLOC_2']->value, ENT_QUOTES, 'UTF-8');?>
');">
				<center class="ac_pw_center_lien">
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_URL_BLOC_2']->value, ENT_QUOTES, 'UTF-8');?>
" class="ac_pw_lien" style="background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_COLOR_BLOC_2']->value, ENT_QUOTES, 'UTF-8');?>
;">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DISCOVER MORE','mod'=>'acproductswall'),$_smarty_tpl ) );?>

					</a>
				</center>
			</div>
			<?php }?>

		</div>

		<div class="col-md-8" id="ac_pw_rightcolumn">
			<?php if (!empty($_smarty_tpl->tpl_vars['AC_URL_BLOC_3']->value)) {?>
			<div class="ac_pw_blocrightbig" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_IMG_BLOC_3']->value, ENT_QUOTES, 'UTF-8');?>
');">
				<center class="ac_pw_center_lien">
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_URL_BLOC_3']->value, ENT_QUOTES, 'UTF-8');?>
" class="ac_pw_lien" style="background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_COLOR_BLOC_3']->value, ENT_QUOTES, 'UTF-8');?>
;">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DISCOVER MORE','mod'=>'acproductswall'),$_smarty_tpl ) );?>

					</a>
				</center>
			</div>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['AC_URL_BLOC_4']->value)) {?>
			<div class="ac_pw_blocrightsmall" style="background-image: url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_IMG_BLOC_4']->value, ENT_QUOTES, 'UTF-8');?>
');">
				<center class="ac_pw_center_lien">
					<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_URL_BLOC_4']->value, ENT_QUOTES, 'UTF-8');?>
" class="ac_pw_lien" style="background:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['AC_COLOR_BLOC_4']->value, ENT_QUOTES, 'UTF-8');?>
;">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DISCOVER MORE','mod'=>'acproductswall'),$_smarty_tpl ) );?>

					</a>
				</center>
			</div>
			<?php }?>

		</div>
	</div>
</div><?php }
}
