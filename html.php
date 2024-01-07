<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form id="data_post" class="mx-2 my-2">
        <span class="card col-sm-3">
            <div class="d-flex align-items-center justify-content-center">
                <label for="username" >Username:</label >
                <input type="text" id="username" class="my-2 mx-2">
            </div>
            <div class="d-flex align-items-end justify-content-end" >
                <button class="btn btn-success my-2 mx-4 text-right" id="submit" type="button">Submit</button>
            </div>
            <ul id="form-messages" class="" style="color:#00cc00;">
                Key in username and click submit.
            </ul>
        </span>
    </form>
    <script src="verify_ajax.js"></script>
</body>
</html>