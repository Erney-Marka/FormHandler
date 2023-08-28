<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <main class="wrapper">
        <form action="includes/formhandler.php" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">Firstname?</label>
                <input id="firstname" type="text" class="form-control" name="firstname" placeholder="Firstname...">
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname?</label>
                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Lastname...">
            </div>

            <div class="mb-3">
                <label class="form-check-label form-label" for="favouritepet">Favourite Pet?</label>
                <select class="form-select" id="favouritepet" name="favouritepet">
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>



</body>

</html>