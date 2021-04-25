public function getArticles(){
	$sqlQuery = 'SELECT id, userid, content, date, vote_up, vote_down 
		FROM '.$this->articlesTable;
	return  $this->executeQuery($sqlQuery);        
}
public function updateArticleVote($articleVoteData) {	
	$sqlQuery = "UPDATE ".$this->articlesTable." 
		SET vote_up = '".$articleVoteData['vote_up']."' , vote_down = '".$articleVoteData['vote_down']."' 
		WHERE id = '".$articleVoteData['id']."'";
	mysqli_query($this->dbConnect, $sqlQuery);		
	$sqlVoteQuery = '';
	if($this->isUserAlreadyVoted($articleVoteData['userid'], $articleVoteData['id'])) {
		$sqlVoteQuery = "UPDATE ".$this->articlesVotesTable." 
			SET vote = '".$articleVoteData['user_vote']."' 
			WHERE article_id = '".$articleVoteData['id']."' AND userid = '".$articleVoteData['userid']."'";
	} else {
		$sqlVoteQuery = "INSERT INTO ".$this->articlesVotesTable." (id, article_id, userid, vote) 
			VALUES ('', '".$articleVoteData['id']."', '".$articleVoteData['userid']."', '".$articleVoteData['user_vote']."')";
	}
	if($sqlVoteQuery) {
		mysqli_query($this->dbConnect, $sqlVoteQuery);	
		return true;			
	}		
}