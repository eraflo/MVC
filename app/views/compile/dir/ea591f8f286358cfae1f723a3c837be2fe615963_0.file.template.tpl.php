<?php
/* Smarty version 4.3.0, created on 2023-03-15 22:52:10
  from 'C:\xampp\htdocs\MVC\app\views\template\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64123e0ab26457_46156108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea591f8f286358cfae1f723a3c837be2fe615963' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\app\\views\\template\\template.tpl',
      1 => 1678917000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64123e0ab26457_46156108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21425757264123e0ab204d9_00815408', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['default']->value));
}
/* {block 'body'} */
class Block_21425757264123e0ab204d9_00815408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_21425757264123e0ab204d9_00815408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
            <p>
                <?php echo $_smarty_tpl->tpl_vars['cell']->value[1];?>

                <?php echo $_smarty_tpl->tpl_vars['cell']->value[2];?>

            </p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'body'} */
}
