<?php /* Smarty version Smarty-3.1.7, created on 2021-04-20 03:35:36
         compiled from "C:\xampp\htdocs\vtigercrm7.3.0\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\uitypes\CurrencyList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:430431510607e4c08df2ff2-73460184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e98198c8d4261c57c8d4a4bd369e0c680b1eb63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm7.3.0\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\uitypes\\CurrencyList.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430431510607e4c08df2ff2-73460184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'CURRENCY_LIST' => 0,
    'CURRENCY_ID' => 0,
    'CURRENCY_NAME' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_607e4c08e08c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607e4c08e08c0')) {function content_607e4c08e08c0($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['CURRENCY_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCurrencyList(), null, 0);?><select class="select2 inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"><?php  $_smarty_tpl->tpl_vars['CURRENCY_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CURRENCY_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['CURRENCY_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CURRENCY_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_NAME']->key => $_smarty_tpl->tpl_vars['CURRENCY_NAME']->value){
$_smarty_tpl->tpl_vars['CURRENCY_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['CURRENCY_ID']->value = $_smarty_tpl->tpl_vars['CURRENCY_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')==$_smarty_tpl->tpl_vars['CURRENCY_ID']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENCY_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><?php }} ?>