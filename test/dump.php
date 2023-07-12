<!doctype html>
<html>
<body>
<form method="post">
    <input type="checkbox" name="test" value="0"/>
    <input type="checkbox" name="test" value="1"/>
    <input type="checkbox" name="test" value="2"/>
    <input type="checkbox" name="test" value="3"/>
    <input type="checkbox" name="test" value="4"/>
    <input type="submit"/>
</form>

<pre><?php var_dump($_POST); ?></pre>
</body>
</html>