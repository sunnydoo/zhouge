<div class="panel_block" >
<table class="table" cellspacing=0 >
<?if(is_array($records )){?>
  <tr>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>单位</th>
    <th>数量</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>fruntoid</th>
    <th>库存</th>
    <th>fruntoid</th>
    <th>
      操作
    </th>
  </tr>
<?foreach ($records as $r ){?>
  <tr>
    <td><?=$r['frunto_id']?></td>
    <td><?=$r['pid']?></td>
    <td><?=$r['pname']?></td>
    <td><?=$r['unit']?></td>
    <td><?=$r['num']?></td>
    <td><?=$r['action']?></td>
    <td><?=$r['action_label']?></td>
    <td><?=$r['alert_level']?></td>
    <td><?=$r['kuwei']?></td>
    <td><?=$r['datetime']?></td>
    <td><?=$r['doer']?></td>
    <td><?=$r['remark']?></td>
    <td><?=$r['category']?></td>
    <td><?=$r['balance']?></td>
    <td><?=$r['cur_balance']?></td>
    <td>
      <a href="/frunto/view/<?=$r['id']?>" >查看</a>
      <a href="/frunto/edit/<?=$r['id']?>" >编辑</a> 
    </td>
  </tr>
<?  }
}?>
</table>
<?=$pagination?>
</div>
