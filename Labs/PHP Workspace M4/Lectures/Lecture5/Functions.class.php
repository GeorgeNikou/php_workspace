<?php 

abstract class Functions{
	CONST GST = 0.05;
	CONST QST = 0.09975;


	public static function calculateTax($amount){
		$gst = $amount * self::GST;
		$qst = ($amount + $gst) * self::QST;
		$total = $amount + $gst + $qst;
		return round($total,2);
	}
}