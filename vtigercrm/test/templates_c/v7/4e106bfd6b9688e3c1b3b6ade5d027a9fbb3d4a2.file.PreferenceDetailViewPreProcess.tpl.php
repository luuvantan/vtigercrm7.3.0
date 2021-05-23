<?php /* Smarty version Smarty-3.1.7, created on 2021-05-13 07:18:00
         compiled from "C:\xampp\htdocs\vtigercrm7.3.0\vtigercrm\includes\runtime/../../layouts/v7\modules\Users\PreferenceDetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2050723443609cd2a816d7d2-63501668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e106bfd6b9688e3c1b3b6ade5d027a9fbb3d4a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm7.3.0\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Users\\PreferenceDetailViewPreProcess.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050723443609cd2a816d7d2-63501668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_609cd2a819e27',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_609cd2a819e27')) {function content_609cd2a819e27($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="bodyContents"><div class=""><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>