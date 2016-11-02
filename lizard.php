<?php 
/**
* class lizard implements interface handle with function getLoserHand that receives opposite hand to compare with possible loser's hand's
*/
class lizard implements handle
{
	public function getLoserHand($hand='')
	{
		$loserHands = array('spock','paper');
		if(in_array($hand, $loserHands)){
			return 1;
		}else{
			return 2;
		}
	}
}
?>