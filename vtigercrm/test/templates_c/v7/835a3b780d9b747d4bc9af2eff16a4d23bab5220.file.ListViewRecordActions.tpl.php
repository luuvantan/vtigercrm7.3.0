<?php /* Smarty version Smarty-3.1.7, created on 2021-04-20 01:39:42
         compiled from "C:\xampp\htdocs\vtigercrm7.3.0\vtigercrm\includes\runtime/../../layouts/v7\modules\Settings\Workflows\ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2077937127607e30de0084c8-32164515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '835a3b780d9b747d4bc9af2eff16a4d23bab5220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm7.3.0\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Settings\\Workflows\\ListViewRecordActions.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2077937127607e30de0084c8-32164515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'LISTVIEW_ENTRY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_607e30de01bb7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607e30de01bb7')) {function content_607e30de01bb7($_smarty_tpl) {?>
<!--LIST VIEW RECORD ACTIONS--><div style="width:80px ;"><a class="deleteRecordButton" style=" opacity: 0; padding: 0 5px;"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a><input style="opacity: 0;" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')){?> checked value="on" <?php }else{ ?> value="off"<?php }?> data-on-color="success"  data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" type="checkbox" name="workflowstatus" id="workflowstatus"></div><?php }} ?>