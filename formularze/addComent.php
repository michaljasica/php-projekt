<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="pl" xml:lang="pl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Tworzenie bloga</title>
    <link rel="stylesheet" title="compact" href="styl.css" type="text/css" />
</head>

<body>
<div class="menu">
    <p>Menu:</p>
    <ul>
        <li><a href="createBlog.php">Nowy blog</a></li>
        <li><a href="addPost.php">Nowy wpis</a></li>
        <li><a href="blog.php">Wszystkie blogi</a></li>
    </ul>
</div>

<div id="main">
    <h1 id="title">Formularz tworzenia komentarza</h1>
    <div id="text">
<form action="../skrypty/koment.php"  target="_blank">
    <input type="hidden" name="post" value="<?php  echo $_GET['post'];?>">
    <label for="reaction"><b>Typ komentarza:</b></label><br/>
    <select name="reaction">
        <option value="pozytywny">Pozytywny</option>
        <option value="negatywny">Negatywny</option>
        <option value="neutralny">Neutralny</option>
    </select><br/>
    <label for="comment"><b>Treść komentarza:</b></label><br/>
    <textarea name="comment" placeholder="Type your comment" cols="30" rows="10"></textarea><br/>
    <label for="nickname"><b>Nazwa uzytkownika:</b></label><br/>
    <input type="text" placeholder="Enter your nickname" name="nickname" required="required">
    </input><br/>
    <input type="submit"/>
	</input><br/>
    <input type="reset"/>
    </input><br/>
</form>
</div>
</div>
</body>
</html>