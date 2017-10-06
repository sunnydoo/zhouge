<Table ss:ExpandedColumnCount="5" ss:ExpandedRowCount="11" x:FullColumns="1"
   x:FullRows="1" ss:DefaultColumnWidth="54" ss:DefaultRowHeight="13.5">
  <Row>
    <Cell ss:StyleID="s62"><Data ss:Type="String">单号</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">日期</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品名</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品号</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">数量</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">结余</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">单位</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">分类</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">操作员</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">备注</Data></Cell>
  </Row>
	<?if(is_array($records )){foreach ($records as $r ){?>
  <Row>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['frunto_id']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Date"><?=date('Y-m-d H:i:s',$r['datetime'])?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['pname']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['pid']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['action_label']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Number"><?=$r['num']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Number"><?=$r['balance']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['unit']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['category']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['doer']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['remark']?></Data></Cell>
  </Row>
<?  }
}?>
</Table>
