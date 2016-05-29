<?php
namespace app\version1_0\grab;
set_time_limit(0);
require_once 'simplescrap.php';
class AiQiYi{
private $get2rate=0.6;
private $accouts=array();
private $accout2url=array();
public function getAccout(){
		$this->get2();
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
public function get2url(){
	$url="http://www.vipfenxiang.com/iqiyi/";
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("article[@class='excerpt excerpt-one']/header/h2/a","href");
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	$lice=count($data)*$this->get2rate;
	$data = array_slice($data, 0, $lice);
	foreach ($data as $item){
		array_push($this->accout2url,$item['href']);
	}
}
public function get3url(){
	$url="http://www.vipzhanghao.com/youku_vip/";
	$scrap=new \SimpleScrap();
	$string=$scrap->gernarateXpathUseNotename("article[@class='excerpt']/h2/a","href");
	echo $string;
	$xml=$scrap->domTransferXML($url);
	$data=$scrap->xmldateFromXpath($xml,$string);
	print_r($data);

}
}
