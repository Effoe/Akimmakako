<?php
/* Smarty version 4.3.1, created on 2024-07-17 09:39:41
  from 'C:\wamp64\www\prestashop\admin5\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6697915d4311b5_40224626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de6da0b1a5955942bc1ddc163310928816a0d950' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\admin5\\themes\\new-theme\\template\\content.tpl',
      1 => 1720463362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6697915d4311b5_40224626 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
