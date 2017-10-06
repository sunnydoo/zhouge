
<div class="panel_block" >
   <div class="padding"><a href="<?=BASE?>store/export/" class="btn btn-primary" >导出</a></div>

<table class="table table-striped" id="jtable" >
<?if(is_array($records )){?>
<thead>
  <tr> 
    <th>品号 / 品名 / 型号</th> 
    <th>分类</th>
    <th>库位</th>
    <th>库存</th>
    <th>警戒库存</th>
    <th width="80" >
      操作
    </th>
  </tr>
</thead>

<?foreach ($records as $r ){ 
if($r['balance'] < $r['alert_level']) {
  ?>
<tbody>
  <tr <?=($i++%2==1)?'class="odd red"':'class="red"'?> >
    <td><?=$r['pid']?> / <?=$r['pname']?> / <?=$r['size']?></td>
    <td><?=$r['category']?></td>
    <td><?=$r['kuwei']?></td>
    <td><?=$r['balance']?> (警戒!) <?=$r['unit']?> </td>
    <td><?=$r['alert_level']?></td>
    <td>
      <a href="<?=BASE?>store/history/view/<?=$r['pid']?>"  >明细</a>
      <a href="<?=BASE?>store/edit/<?=$r['pid']?>" >编辑</a>
    </td>
  </tr>
<?  }
} 

foreach ($records as $r ){ 
if($r['balance'] >= $r['alert_level']) {?>
  <tr <?=($i++%2==1)?'class="odd"':''?> >
    <td><?=$r['pid']?> / <?=$r['pname']?> / <?=$r['size']?></td>
    <td><?=$r['category']?></td>
    <td><?=$r['kuwei']?></td>
    <td><?=$r['balance']?> <?=$r['unit']?></td>
    <td><?=$r['alert_level']?></td>
    <td>
      <a href="<?=BASE?>store/history_view/<?=$r['pid']?>" >明细</a>
      <a href="<?=BASE?>store/edit/<?=$r['pid']?>"  >编辑</a>
    </td>
  </tr>
<? }
 }
}?></tbody>
</table>
<?=$pagination?>
</div>
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



