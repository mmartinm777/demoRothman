<?php 
/**
* class paper implements interface handle with function getLoserHand that receives opposite hand to compare with possible loser's hand's
*/
class paper implements handle
{
	public function getLoserHand($hand='')
	{
		$loserHands = array('rock','spock');
		if(in_array($hand, $loserHands)){
			return 1;
		}else{
			return 2;
		}
	}
}
?>