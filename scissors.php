<?php 
/**
* class scissors implements interface handle with function getLoserHand that receives opposite hand to compare with possible loser's hand's
*/
class scissors implements handle
{
	public function getLoserHand($hand='')
	{
		$loserHands = array('paper','lizard');
		if(in_array($hand, $loserHands)){
			return 1;
		}else{
			return 2;
		}
	}
}
?>