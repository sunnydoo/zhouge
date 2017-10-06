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
  $.getJSON('<?=BASE?>action/data/', function(data){
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
      html = etmp($('#action').html(),frunto[pid],'<option>出库</option><option>盘亏</option>');
      $(this).parent().next().html( html );
      $('input[name=num]').focus();
    }
    else {
      $(this).parent().next().html($('#empty').html());
    }
  });
  
});
</script>

<div class="col50" style="margin-right:20px;" >
<div class="panel_block">
  <h2>入库</h2>
  <form method="POST" action="" >
    <ul class="panel" >
      <li><input type="hidden" name="action" value="1" />品号
      <input type="text" placeholder="品号（双击选择或输入）"  class="long" required name="pid" id="pid" list="pid_item" autocomplete="off" /> <input type="button" value=">" class="go" /></li>
      <li></li>
    </ul>
  </form>
</div>
</div>
<div class="col50">
<div class="panel_block"  >
  <h2>出库</h2>
  <form method="POST" action="" >
    <ul class="panel" >
   <li >
    <input type="hidden" name="action" value="-1" />品号
    <input type="text" placeholder="品号（双击选择或输入）"  class="long" required name="pid" id="opid" list="pid_item" autocomplete="off" /> <input type="button" value=">" class="go" />
  </li>
  <li></li>
</ul>

  </form>
</div>
</div>

<datalist id="pid_item"></datalist>

<datalist id="category_item">
  <option value="原料" >
  <option value="产成品" >
  <option value="其他" >
</datalist>
<div class="clear" ></div>
<div class="notice" style="margin-bottom:20px;" >
 1. Tab 键方便你在输入框之间切换。 2. 录入错误或退货请用负数进行冲抵。 
</div>
<div style="display:none;" >
  <div id="new" >
    <div class="notice" > 您输入的品号不存在，将按照新产品录入 </div>
    <div>品名
      <input type="text" placeholder="品名"  class="long" required name="pname" autocomplete="off" />
    </div>
    <div>类别
      <input type="text" placeholder="商品类别"  class="short" required name="category" autocomplete="off" /> 
      单位 <input type="text" placeholder="单位"  class="short" required name="unit" />
    </div>
    <div> 
      库位 <input type="text" placeholder="储存库位"  class="short" name="kuwei" />
    </div>


    <div>
    备注 
      <input type="text" placeholder="备注"  class="long" name="remark" autocomplete="off" />
    </div>
    
    
    <div>
      <!--<input type="text" placeholder="出入库/盘点/红冲"  value="入库" />-->
      <select class="short" required name="action_label">
        <option>入库</option>
        <option>盘盈</option>
      </select> 数量
      <input type="text" name="num" class="short" placeholder="数量" required />
      <input type="submit" class="short" value="入库" />
    </div>
  </div>
  
  <div id="action" style="display:none;">
      <div><big> #pname# </big></div>
      <div>库存 #balance# ， 单位 #unit# ，库位 #kuwei# </div>
      <div>
        <!--<input type="text" placeholder="出入库/盘点/红冲"  class="short" required name="action_label" autocomplete="off" value="" /> -->
        <select class="short" required name="action_label">
          #actionlabel#
        </select>
        
                <div>
     备注 <input type="text" placeholder="备注"  class="long" name="remark" autocomplete="off" />
    </div>
      数量
       <input name="num" type="text" class="short" placeholder="数量" required > 
       

    
    <input type="submit" value="提交" class="short" />
      </div>
  </div>
  
  <div id="empty" style="display:none;">
      <div class="important" > 您输入的品号不存在! </div>
  </div>
</div>
