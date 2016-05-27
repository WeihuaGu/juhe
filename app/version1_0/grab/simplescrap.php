<?php
error_reporting(0);
class SimpleScrap{
	public function domTransferXML($domlink){
		
		$dom = new DOMDocument();
		$dom->loadHTMLFile($domlink);
		$xml = simplexml_import_dom($dom);
		return $xml;
		
	}

	public function  xmldateFromXpath($xml,$xpathstring){

		return $xml->xpath($xpathstring);

	}

	
	public function gernarateXpathUseNotename($notename,$noteattr=null,$notevalue=null){
		$string="//".$notename;
		if($noteattr!=null){
		if($notevalue!=null)
		$string=$string."[@$noteattr=$notevalue]";
		else
		$string=$string."[@$noteattr]";
		}
		return $string;
	}
	
	



}
