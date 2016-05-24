<?php
namespace app\version1_0\grab;
class XunLei{
private $accouts=array();
public function getAccout(){
		$this->get1();
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

}
