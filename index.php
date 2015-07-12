<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <h1>book search</h1>
    <form action="result.php" method="post">
    	searchtype:<br/>
    	<select name="searchtype">
    		<option value="author">author</option>
    		<option value="title">title</option>
    		<option value="isbn">isbn</option>
            <option value="price">price</option>
    	</select>
    	keywords:<br/>
    	<input type="text" name="key"/><br/>
    	<input type="submit" value="search"/>
    </form>
    <a href="add_book.html">add_book</a>
</body>
</html>