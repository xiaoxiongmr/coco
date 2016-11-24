<?php /* Smarty version 2.6.19, created on 2016-04-14 11:19:54
         compiled from a.html */ ?>
<?php echo $this->_tpl_vars['a1']; ?>


<?php $_from = $this->_tpl_vars['add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a'] => $this->_tpl_vars['b']):
?>
<?php echo $this->_tpl_vars['b']; ?>
<input value="<?php echo $this->_tpl_vars['a']; ?>
">
<?php endforeach; endif; unset($_from); ?>