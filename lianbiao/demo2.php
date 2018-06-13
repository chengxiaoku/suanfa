<?php
class node{
	public $id;
	public $name;
	public $next;
	
	public function __construct($id,$name){
			$this->id = $id;
			$this->name = $name;
			$this->next = null;
	}
}

//单链表
class singelLinkList{
	//表头
	private $header;
	
	//构造方法
	public function __construct($id = null,$name = null){
		$this->header = new node($id,$name,null);
	}
	//获取链表的长度
	public function getLinkLength(){
		$i = 0;
		$current = $this->header;
		//未完待续   获取长度
	}
	/**
	* $node  node 的对象代表一个节点
	*/
	public function addLink($node){
		
		$current = $this->header;
		//更换顺序
		
		 while ( $current->next != null ) {   
            if ($current->next->id > $node->id) {   
                break;   
            }   
            $current = $current->next;   
        }  
		echo "<pre/>";
		var_dump($current);
		$node->next = $current->next;
		$current->next = $node;
		
	}
	

  
}

$lists = new singelLinkList;   
$lists->addLink ( new node ( 5, 'eeeeee' ) );   
$lists->addLink ( new node ( 1, 'aaaaaa' ) );   
$lists->addLink ( new node ( 6, 'ffffff' ) );   
$lists->addLink ( new node ( 4, 'dddddd' ) );   
$lists->addLink ( new node ( 3, 'cccccc' ) );   
$lists->addLink ( new node ( 2, 'bbbbbb' ) );  
$lists->getLinkList ();


