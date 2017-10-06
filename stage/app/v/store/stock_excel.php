<Table ss:ExpandedColumnCount="5" ss:ExpandedRowCount="11" x:FullColumns="1"
   x:FullRows="1" ss:DefaultColumnWidth="54" ss:DefaultRowHeight="13.5">
   <Row>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品名</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">品号</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">单位</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">分类</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">库位</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">库存</Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String">警戒库存</Data></Cell>
   </Row>
<?if(is_array($records )){foreach ($records as $r ){ ?>
  <Row>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['pid']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['pname']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['unit']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['category']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="String"><?=$r['kuwei']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Number"><?=$r['balance']?></Data></Cell>
    <Cell ss:StyleID="s62"><Data ss:Type="Number"><?=$r['alert_level']?></Data></Cell>
   </Row>
   
<?  }
}?>
</Table>
