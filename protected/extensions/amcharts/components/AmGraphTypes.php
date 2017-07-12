<?php
class AmGraphTypes extends CEnumerable
{
	/**
	 *XY and Radar charts can only display
	 **/
	const line = "line";
	const column = "column";
	const step = "step";
	const smoothedLine = "smoothedLine";
	const candlestick = "candlestick";
	const ohlc = "ohlc";
}
?>