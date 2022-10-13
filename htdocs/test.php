<form action="blogWriteSave.php" method="post" enctype="multipart/form-data" name="blogWrite">
    <fieldset>
        <legend>블로그 게시글 작성 영역</legend>
        <div>
            <label for="blogCate">카테고리</label>
            <select name="blogCate" id="blogCate">
                <option value="javascript">javascript</option>
                <option value="jquery">jquery</option>
                <option value="html">html</option>
                <option value="css">css</option>
            </select>
        </div>
        <!-- 01 -->
        <div>
            <label for="blogTitle">제목</label>
            <input type="text" name="blogTitle" id="blogTitle" placeholder="제목을 넣어주세요" required>
        </div>
        <!-- 02 -->
        <div>
            <label for="blogContents">내용</label>
            <textarea name="blogContents" id="blogContents" placeholder="내용을 넣어주세요" required></textarea>
        </div>
        <!-- 03 -->
        <div>
            <label for="blogFile">파일</label>
            <input type="file" name="blogFile" id="blogFile" accept=".jpg, .jpeg .png .gif" placeholder=".jpg, .jpeg .png .gif 파일만 넣어주세요">
        </div>
        <!-- 04 -->
        <button type="submit" value="저장하기">저장하기</button>
    </fieldset>
</form>