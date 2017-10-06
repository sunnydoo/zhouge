<?php
class frunto extends m {
  function __construct()
  {
    global $app_id;
    parent::__construct();
    $this->table = 'frunto';
    $this->fields = array('frunto_id','pid','pname','size','unit','num','customer','app_id','action_label','alert_level','kuwei','datetime','doer','remark','category','balance','cur_balance');
  }
  
  function frunto()
  {
    global $app_id;
    return $this->get(" and app_id = '".$app_id."' and cur_balance = 1",0,9999);
  }
  
  function getbypid($pid)
  {
    global $app_id;
    $pid = mysql_escape_string(trim($pid));
    $r = $this->get(" and app_id = '".$app_id."' and  pid = '$pid' and cur_balance = 1 ",0,1);
    return $r[0];
  }
  
  function getbypname($pid)
  {
    global $app_id;
    $pid = mysql_escape_string(trim($pid));
    $r = $this->get(" and app_id = '".$app_id."' and  pname = '$pid' and cur_balance = 1 ",0,1);
    return $r[0];
  }
  
  function calculate($where)
  {
    global $app_id;
    $nret = array();
    $ret = $this->db->query(" select pid,pname,sum(num) as num from frunto where 1 and app_id = '".$app_id."'  ".$where." group by pid" );
    foreach($ret as $r ){
      $pid = $r['pid'];
      $nret[$pid]['pid'] =  $r['pid'];
      $nret[$pid]['pname'] =  $r['pname'];
      if($r['num'] >0 ) {
        $nret[$pid]['in'] =  $r['num'];
      }
      else {
        $nret[$pid]['out'] =  $r['num'];
      }
    }
    return $nret;
  }
  
  function truncate($id)
  {
    $this->db->query("delete from frunto where app_id = $id");
  }
}
