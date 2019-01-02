<?php

class pluginSequenceDiagram extends Plugin {

	public function siteBodyEnd()
	{
		$html  = '<!-- Javascripts files for Sequence Diagram plugin -->'.PHP_EOL;

		// Include jQuery if not was loaded before
		$html .= '<script>window.jQuery || document.write(\'<script src="'.DOMAIN_CORE_JS.'jquery.min.js">\x3C/script>\')</script>'.PHP_EOL;

		// Include javascripts files from the vendors folder
		$html .= '<script src="'.$this->domainPath().'vendors/webfont.js"></script>'.PHP_EOL;
		$html .= '<script src="'.$this->domainPath().'vendors/snap.svg-min.js"></script>'.PHP_EOL;
		$html .= '<script src="'.$this->domainPath().'vendors/underscore-min.js"></script>'.PHP_EOL;
		$html .= '<script src="'.$this->domainPath().'vendors/sequence-diagram-min.js"></script>'.PHP_EOL;

		// Parse all class "diagram" and generate the UML
		$html .= '<script> $(".diagram").sequenceDiagram({theme: "simple"}); </script>'.PHP_EOL;

		return $html;
	}
}
