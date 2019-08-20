<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />
    <title>Birdboard</title>
</head>

<body>

    <form method="POST" action="/projects" class="container">
        @csrf
        <h1 class="heading is-1">Create a Project</h1>

        <div class="field">
            <label class="label">Title</label>
            <p class="control">
                <input class="input" type="text" name="title" placeholder="Title">
            </p>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <p class="control">
                <textarea class="textarea" name="description" placeholder="Description"></textarea>
            </p>
        </div>

        <div class="field is-grouped">
            <p class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </p>
            <p class="control">
                <button class="button is-danger">Cancel</button>
            </p>
        </div>
    </form>



</body>

</html>