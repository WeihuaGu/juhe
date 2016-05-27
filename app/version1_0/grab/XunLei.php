<?php
namespace app\version1_0\grab;
error_reporting(0);
require_once 'simplescrap.php';
class XunLei{
private $accouts=array();
private $accout2url=array();
private $accout3url=array();
private $accout4url=array();
public function getAccout(){
		//$this->get2();
		//$this->get1();
		return $this->accouts;
	}
public function get1(){
		$url1="http://api.vipfenxiang.com/v1/post/cat?id=4";
		$data=file_get_contents($url1);
		$content = json_decode($data);
		if($content->error==0){
		$list=$content->data->items;
		foreach ($list as $item){
		array_push($this->accouts,$item->account);
		}

		
                }
		
	}
public function get2(){
	$this->get2url();	
	foreach($this->accout2url as $item){
	$url=$item;
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("p/span","style","'color: #339966;'");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	$accstr=(string)$data[0];
	array_push($this->accouts,$accstr);
	}

}
public function get3(){
	$this->get3url();	
	foreach($this->accout3url as $item){
	$url=$item;
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("td//a");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	print_r($data);
	$accstr=(string)$data[0];
	array_push($this->accouts,$accstr);
	}
	print_r($this->accouts);


}
public function get4(){
	$this->get4url();	
	foreach($this->accout4url as $item){
	$url=$item;
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("div/article/p[8]");
	echo $string;
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	print_r($data);
	//$accstr=(string)$data[0];
	//array_push($this->accouts,$accstr);
	}
	//print_r($this->accouts);




}
public function get2url(){
	$url="http://www.vipfenxiang.com/yk/";
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("article[@class='excerpt excerpt-one']/header/h2/a[@href,position()<3");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	foreach ($data as $item){
		array_push($this->accout2url,$item['href']);
	}

}
public function get3url(){
	$url="http://www.vipzhanghao.com/xunlei_vip/";
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("div[@class='excerpt_subject']/h2/a","href");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	foreach ($data as $item){
		array_push($this->accout3url,"http://www.vipzhanghao.com/".(string)$item['href']);
	}


}
public function get4url(){
	$url="http://xlfans.com/";
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("h2/a","href");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	foreach ($data as $item){
		array_push($this->accout4url,(string)$item['href']);
	}
}
}
