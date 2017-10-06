
<div class="span6" >
    <div class="panel_block" >
  <h2>编辑商品信息</h2>
  <form class="form-horizontal" method="POST" >
    <div class="control-group">
      <label class="control-label" >品号</label>
      <div class="controls"><input type="hidden" name="id" value="<?=isset($val['id'])?$val['id']:''?>" required > <input type="text" name="pid" value="<?=isset($val['pid'])?$val['pid']:''?>" required ></div>
    </div>
    <div class="control-group">
      <label class="control-label" >品名</label>
      <div class="controls"><input type="text" name="pname" value="<?=isset($val['pname'])?$val['pname']:''?>"  required ></div>
    </div>
    <div class="control-group">
      <label class="control-label" >型号</label>
      <div class="controls"><input type="text" name="size" value="<?=isset($val['size'])?$val['size']:''?>" >  </div>
    </div>
    <div class="control-group">
      <label class="control-label" >分类</label>
      <div class="controls"><input type="text" name="category" value="<?=isset($val['category'])?$val['category']:''?>" >    </div>
    </div> 
    <div class="control-group">
      <label class="control-label" >警戒库存</label>
      <div class="controls">
      <input type="text" name="alert_level" value="<?=isset($val['alert_level'])?$val['alert_level']:''?>" >  </div> 
   </div>  
    <div class="control-group">    
      <label class="control-label" >库位</label>
      <div class="controls"><input type="text" name="kuwei" value="<?=isset($val['kuwei'])?$val['kuwei']:''?>"  required  >  </div> 
   </div>  
    <div class="control-group">    
      <label class="control-label" >单位</label>
      <div class="controls"><input type="text" name="unit" value="<?=isset($val['unit'])?$val['unit']:''?>"  required  >  </div> 
   </div>  
    <div class="control-group">
     <div class="controls"><input type="submit" class="btn btn-primary" value="确认修改" >   </div> 
    </div> 
  </form>
</div>
<div class="clear" ></div>
</div> 

<div class="span6" >
    <div class="panel_block" >
   <form method="POST" action="" > 
  <ul><li>
   <div><input type="hidden" name="id" value="<?=isset($val['id'])?$val['id']:''?>" required >
   <input type="hidden" name="action" value="del" >
现有库存      <?=isset($val['balance'])?$val['balance']:''?> <?=isset($val['unit'])?$val['unit']:''?>  <br />
当库存为 0 时，可以将次商品从数据库中删除。 <br />
   &nbsp; <?=($val['balance'] == 0 )?'<input type="submit" class="submit-button" value="删除商品" >':''?>
  </div>
  </li></ul> 
 </form>
 </div>
 </div>
