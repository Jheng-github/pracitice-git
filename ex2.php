<?php
//system('clear');
echo "你好";
sleep(1);
echo "歡迎來到轉生世界";
sleep(1);
echo "你的選擇名字是...";

Class PROFESSION {
    public $Name;
    //public $Name2;
    public $HP;
    public $MP;
    public $attack;
    public $defense;
    public $Fight;

 function __construct($player)
     {
    $this->name =  $player;
    //$this->Name2 = $player2;  

 }
function  GetPlayer(){
        $this->name;
        $this->HP = rand(30,40);
        $this->MP = rand(5,10);
        $this->attack = rand(5,10);
        $this->defense = rand(1,4);
        //echo "死死死".$this->HP;
        $this->GetHurt();
        
}

function GetHurt(){
    //echo "生生生".$this->HP;
    $enemyAttack = rand(8,12);
    $this->Fight = $enemyAttack - ($this->defense);
    echo "戰鬥開始"."\n";
        while($this->HP > 0){
            $this->HP = $this->HP  - $this->Fight;
            $this->view();
        }
     if($this->HP <=0){
        echo "你已經死亡了";
        exit();
    }
}
function view(){
    echo "中毒了！每秒受到傷害".$this->Fight."\n";
    //echo "\n";
    echo "勇者：".$this->name;
    //echo "生命力".$this->HP."\n";
    printf("生命力%3s\n", $this->HP);
    echo "防禦力".$this->defense."\n";
    echo chr(27) . "[0G";
    echo chr(27) . "[". 4 . "A";
    sleep(1); 
    // echo '結束拉';    
}


}
$player = fread(STDIN,20);
$user = new Profession($player);
$user->GetPlayer();
?>