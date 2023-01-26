<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Todo App | An App to Help You Organize Your Task!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/todo/app.css') }}">
    </head>
    <body>
        <main class="wrapper d-flex flex-column align-items-center justify-content-center">
            <form action="" class="todo-form shadow-sm">
                <div class="form-floating mb-3">
                    <textarea type="text" class="form-control rounded-2" id="inputTodo" aria-describedby="todoHelpText"> </textarea>
                    <label for="inputTodo" class="form-label">Todo Item</label>
                    <div id="todoHelpText" class="form-text">Enter your todo item above.</div>
                </div>
                <div class="d-grid d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary" type="button">Submit</button>
                </div>
            </form>

            <div class="todo-list mb-3">
                <div class="item d-flex align-items-center shadow-sm mb-3">
                    <h2> just another h2 </h2>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
