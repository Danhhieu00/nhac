<?php
/* Smarty version 3.1.30, created on 2022-06-07 09:34:47
  from "C:\xampp\htdocs\project_nhac\views\v_sua_ten_thanh_vien.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_629eff977c0917_23099867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee016742ea2baebf40e283bdfcb97adbb26405d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\project_nhac\\views\\v_sua_ten_thanh_vien.tpl',
      1 => 1654571398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629eff977c0917_23099867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form class="w3-container" id="container" action="" method="post" autocomplete="off">
    <div class="row itemThem">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-2"><label class="w3-text-brown"><b>Tên thành viên</b></label></div>
                <div class="col-lg-10">
                <input class="w3-input w3-border w3-sand" type="text" id="ten" name="ten" placeholder="Nhập tên" value="<?php echo $_smarty_tpl->tpl_vars['doc_ten']->value->ten;?>
" required>
                <span id="casi-result"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 padding_submit">
			        <button class="w3-green w3-button" type="submit" name="btn_sua_ten">Sửa tên</button>
                </div>
            </div>
		</div>
	</div>
</form>
<?php }
}
