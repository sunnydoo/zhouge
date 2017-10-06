<ul class="frunto-list" >
<?
if(is_array($records )){
foreach ($records as $r ){ ?>
  <li>
    <div>fruntoid <?=$r['frunto_id']?></div>
    <div>fruntoid <?=$r['pid']?></div>
    <div>fruntoid <?=$r['pname']?></div>
    <div>fruntoid <?=$r['unit']?></div>
    <div>fruntoid <?=$r['num']?></div>
    <div>fruntoid <?=$r['action']?></div>
    <div>fruntoid <?=$r['action_label']?></div>
    <div>fruntoid <?=$r['alert_level']?></div>
    <div>fruntoid <?=$r['kuwei']?></div>
    <div>fruntoid <?=$r['datetime']?></div>
    <div>fruntoid <?=$r['doer']?></div>
    <div>fruntoid <?=$r['remark']?></div>
    <div>fruntoid <?=$r['category']?></div>
    <div>fruntoid <?=$r['balance']?></div>
    <div>fruntoid <?=$r['cur_balance']?></div>
    <div>
      <a href="/frunto/view/<?=$r['id']?>" >查看</a>
      <a href="/frunto/edit/<?=$r['id']?>" >编辑</a> 
    </div>
  </li>
<?  }
}?>
</ul>
<?=isset($pagination)?$pagination:''?>