<?php
//节点类
class node {
	public $id;
	public $name;
	public $next;
	
	function __construct($id,$name){
		$this->id = $id;
		$this->name = $name;
		$this->next = null;
	}
}

class mylist{
	private $header;
	function __construct($id= null,$name = null){
		$this->header = new node($id,$name,null);
	}
	
	function addLink($node){
		
		$current = $this->header;
		//更换顺序
		
		 while ( $current->next != null ) {   
            if ($current->next->id > $node->id) {   
                break;   
            }   
            $current = $current->next;   
        }  
		$node->next = $current->next;
		$current->next = $node;
		
	}
	//获取链表   
    public function getLinkList() {   
        $current = $this->header;   
        if ($current->next == null) {   
            echo ("链表为空!");   
            return;   
        }   
        while ( $current->next != null ) {   
            echo 'id:' . $current->next->id . '   name:' . $current->next->name . "<br>";   
            if ($current->next->next == null) {   
                break;   
            }   
            $current = $current->next;   
        }   
    }   
  
}
$lists = new mylist;
$lists->addLink ( new node ( 5, 'eeeeee' ) );   
$lists->addLink ( new node ( 1, 'aaaaaa' ) );
$lists->addLink ( new node ( 6, 'ffffff' ) );   
$lists->addLink ( new node ( 4, 'dddddd' ) );   
$lists->addLink ( new node ( 3, 'cccccc' ) );   
$lists->addLink ( new node ( 2, 'bbbbbb' ) ); 
$lists->getLinkList();