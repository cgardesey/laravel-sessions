<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Project</title>
</head>
<body>
<form method="POST" action="/projects">
    @csrf

    <div><input type="text" placeholder="Project title" name="title"></div>
    <div><textarea name="description" placeholder="Describe your project"></textarea></div>
    <div><button type="submit">Create Project</button></div>
</form>
</body>
</html>