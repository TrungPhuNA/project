<?php
require_once 'PHPExcel.php';

$filename = 'data.xlsx';
$inputFileType = PHPExcel_IOFactory::identify($filename);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);

$objReader->setReadDataOnly(true);

/**  Load $inputFileName to a PHPExcel Object  **/
$objPHPExcel = $objReader->load("$filename");

$total_sheets=$objPHPExcel->getSheetCount();

$allSheetName=$objPHPExcel->getSheetNames();
$objWorksheet  = $objPHPExcel->setActiveSheetIndex(0);
$highestRow    = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
$arraydata = array();
for ($row = 2; $row <= $highestRow;++$row)
{
	for ($col = 0; $col <$highestColumnIndex;++$col)
	{
		$value=$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
		$arraydata[$row-2][$col]=$value;
	}
}

echo '<pre>';
print_r($arraydata);
echo '</pre>';