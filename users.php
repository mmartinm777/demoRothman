<?php 
/**
*  Class for manage the game with users
 *
*/
class users implements handle
{
	public $userA='userA';
	public $userB='userB';
/**
 *  PLAY THE GAME
 * @params $userA
 * @params $handA
 * @params $userB
 * @params $handB
 */
	public function play($userA,$handA,$userB,$handB)
	{
		$msg = $this->checkHands($handA,$handB);
		if($msg!=""){
			$this->userA = $userA;
			$this->userB = $userB;
			$class = strtolower($handB);
			$handAction = new $class;
			$returnCode = $handAction->getLoserHand();
			if($returnCode==1){
				return "the winner is ".$userA." with hand ".$handA;
			}elseif ($returnCode==2) {
				return $this->play($userB,$handB,$userA,$handA);
			}
		}
		return $msg;
	}
/**
 *  Check possible errors with the the hand's input
 * @params $handA
 * @params $handB
 */
	public function checkHands($handA,$handB)
	{
		$msg = "";
		if (class_exists($handA) && class_exists($handB)){
			if ($handA == $handB) {
				$msg = "Equals!";
			} elseif ($handA == '' || $handB == '') {
				$msg = "You have to introduce both hand's!";
			}
		}else{
			$msg = "Do not invent your hand!!";
		}
		return $msg;
	}
}
?>