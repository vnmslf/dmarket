<?
function pre($data, $flag = true) {
	if($flag) {
		$bt = debug_backtrace();
		$bt = $bt[0];
		$dRoot = $_SERVER['DOCUMENT_ROOT'];
		$dRoot = str_replace('/','\\', $dRoot);
		$bt['file'] = str_replace($dRoot,'', $bt['file']);
		$dRoot = str_replace('\\','/', $dRoot);
		$bt['file'] = str_replace($dRoot,'', $bt['file']);?>
		<div style='font-size:12px; color:#000; background:#fff; border:1px dashed #000;'>
			<div style='padding:3px 5px; background:#99CCFF; font-weight:bold;'>File: <?=$bt['file']?> [<?=$bt['line']?>]</div>
			<pre style='padding:10px;'><?print_r($data)?></pre>
		</div>
	<?} else {
		echo '<pre>', print_r($data), '</pre>';
	}
}
?>