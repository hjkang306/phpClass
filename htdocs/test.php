<?=
$sql ="SELECT b.myBoardID, b.boardTitle, b.boardContents, m.youName, b.regTime, b.boardView FROM myBoard b JOIN myMember m ON(b.myMemberID = m.myMemberID) ";

switch($searchOption){
    case 'title':
        $sql .="WHERE b.boardTitle LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";
        break;
    case 'content':
        $sql .="WHERE b.boardContents LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";   
        break;
    case 'name':
        $sql .="WHERE m.youName LIKE '%{$searchKeyword}%' ORDER BY myBoardID DESC LIMIT 10";   
        break;
    
}
?>