<div class="panel_block" >
  <div class="submenu" >
<form class="padding" method="POST" >
<input  placeholder="分类"  type="text" name="category" list="category_item" value="<?=$category?>" autocomplete="off" />
&nbsp;
日期  <input type="date" name="sdate" class="input-medium" value="<?=$sdate?>"/>
-
<input type="date" name="edate" class="input-medium" value="<?=$edate?>" /> <input type="submit" value="搜索" class="btn btn-primary"/>  
&nbsp;
<a href="<?=BASE?>store/export_history/" class="btn" >导出EXCEL</a>
 </form>
</div>

<datalist id="category_item">
  <?php
  $cat = explode("\n",$app['category']);
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

<div class="pagination" ><?=$pagination?></div>
<table class="table table-striped" id="jtable">
<?if(is_array($records )){?>
<thead>
  <tr>
    <th>日期</th>
    <th>品号 / 品名 / 型号</th> 
    <th></th>
    <th>数量</th>
    <th>结余</th> 
    <th>分类</th>
    <th>操作员</th>
    <th>备注</th>
  </tr>
</thead>
<tbody>
<?foreach ($records as $r ){?>
  <tr <?=($i++%2==1)?'class="odd"':''?>>
    <td><?=date('m-d H:i',$r['datetime'])?></td>
    <td><?=$r['pid']?> / <?=$r['pname']?> / <?=$r['size']?></td> 
    <td><?=$r['action_label']?></td>
    <td <?=$r['num']<0?'class="red"':''?>><?=$r['num']?></td>
    <td><?=$r['balance']?> (<?=$r['unit']?>) </td>
    <td><?=$r['category']?></td>
    <td><?=$r['doer']?></td>
    <td><a title="<?=$r['remark']?>" >备注</a></td>
  </tr>
<?  }
}?>
</tbody>
</table>
<div class="pagination" ><?=$pagination?></div>
</div>


<script type="text/javascript" src="static/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#jtable').dataTable({"bPaginate": false,
         "oLanguage": {
            "sLengthMenu": "显示 _MENU_ 条每页",
            "sZeroRecords": "什么都没有找到 - 很抱歉",
            "sInfo": "总共 _TOTAL_ , 显示 _START_ 至 _END_ 条",
            "sSearch": "搜索",
            "sInfoEmpty": "没有数据！",
            "sInfoFiltered": "(过滤自 _MAX_ 条数据)"
        }
        });
} );
</script>



