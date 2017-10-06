<a href="javascript:;" class="weui-btn weui-btn_primary">页面主操作 Normal</a>
<div class="span6">
	<div class="panel_block"  >
	  <h2>出库</h2>
	  <form method="POST" action="" >
		<ul class="panel" >
	   <li >
		<input type="hidden" name="action" value="-1" />
	  <input type="text" placeholder="品号/条码/产品编码（双击选择或输入）"  class="input-xlarge" required name="pid" id="opid" list="pid_item" autocomplete="off" /> <input type="button" value=">" class="btn btn-primary" />
	  </li>
	  <li></li>
	</ul>
	  </form>
	</div>
</div>

<datalist id="pid_item">
</datalist>

<datalist id="category_item">
  <?php
  $cat = explode("\n",$app['data']['category']);
  if(is_array($cat)){
    foreach($cat as $c)
    {
      ?>
      <option value="<?=$c?>" >
      <?
    }
  }
  ?>
</datalist>

<div class="clear" ></div>
<div class="notice" style="margin-bottom:20px;" >
 1. Tab 键方便你在输入框之间切换。 2. 录入错误请用盘赢盘亏冲抵。 
</div>

<div style="display:none;" >
  <div id="new" >
    <div class="notice" > 您输入的品号不存在，将按照新产品录入 </div>
    <div>
    <input type="text" placeholder="品名"  class="input-xlarge" required name="pname" autocomplete="off" />
    <input type="text" placeholder="商品型号"  class="input-medium" name="size" autocomplete="off" /> 
    </div>
    <div>
      <input type="text" placeholder="商品类别"  class="input-small" name="category" list="category_item"  autocomplete="off" /> 
      <input type="text" placeholder="单位"  class="input-small" required name="unit" />
      <input type="text" placeholder="库位"  class="input-small" name="kuwei" />
    </div>

    <div>
      <!--<input type="text" placeholder="出入库/盘点/红冲"  value="入库" />-->
      <select class="input-small" required name="action_label">
        <option>入库</option><option>盘盈</option>
      </select>
     &nbsp; 数量 <input type="text" name="num" class="input-small" placeholder="数量" required />
    </div>
       <div>
    <textarea placeholder="备注"  class="input-xxlarge" name="remark" autocomplete="off" rows="5" ></textarea>
     </div>
    <div>
          <input type="submit" class="btn" value="入库" />
    </div>
  </div>
  
  <div id="action" style="display:none;">
      <div><big> #pname# </big></div>
      <div>库存 #balance# ， 单位 #unit# ，库位 #kuwei# </div>

  <div>
      <!--<input type="text" placeholder="出入库/盘点/红冲"  class="input-small" required name="action_label" autocomplete="off" value="" /> -->
        <select class="input-small" required name="action_label">
          #actionlabel#
        </select>
     
      <input name="num" type="text" class="input-small" placeholder="数量" required > 
      </div>
      <div>
      <textarea placeholder="备注"  class="input-xxlarge" name="remark" autocomplete="off" rows="5" ></textarea>
      </div>
      <div>
       <input type="submit" value="提交" class="btn" />
      </div>
      
  </div>
  
  <div id="empty" style="display:none;">
      <div class="important" > 您输入的品号不存在! </div>
  </div>
</div>
<script>

var frunto = [];
function etmp(tmp,elem,action_label)
{
  $.each(elem, function(index, val){
      tmp = tmp.replace('#'+index+'#', val);
  });
  
  tmp = tmp.replace('#actionlabel#', action_label );
  return tmp;
}
$(function(){
  //load data
  $.getJSON('<?=BASE?>store/data/', function(data){
    frunto = data;
    $.each(frunto, function(index, item){
      $('#pid_item').append('<option>'+index+'</option>');
    })
  }) 
  
  $('#pid').blur(function(){
    if(!$(this).val())return;
  
    pid = $(this).val();
    if(frunto[pid]){
      html = etmp($('#action').html(),frunto[pid],'<option>入库</option><option>盘盈</option>')
      $(this).parent().next().html( html );
      $('input[name=num]').focus();
    }
    else {
      $(this).parent().next().html($('#new').html());
      $('input[name=pname]').focus();
    }
  });
  
  
  $('#opid').blur(function(){
    if(!$(this).val())return;
  
    pid = $(this).val();
    if(frunto[pid]){
      html = etmp($('#action').html(),frunto[pid],'<option>出库</option><option>盘亏</option>')
      $(this).parent().next().html( html );
      $('input[name=num]').focus();
    }
    else {
      $(this).parent().next().html($('#empty').html());
    }
  });
  
});
</script>
