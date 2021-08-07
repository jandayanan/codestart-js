<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
<style>
.red{
    color:red;
}
</style>
    <div class="container">
        <h1>JavaScript Basics</h1>

        <div id="test_element">Hello world.</div>
        <div class="greetings">Ni hao.</div>
        <div id="new_stuff">New Stuff.</div>


        <a target="_blank" href="basics_details.php">Click here for the details</a>
    </div>

    <script src="src/js/basics.js"></script>
    <script src="src/js/newfile.js"></script>
    <script src="src/js/anotherfile.js"></script>
    <script>
        document.getElementById("new_stuff").innerHTML = anotherFileFunction("Hello world");
        document.getElementById('new_stuff').setAttribute("class", document.getElementById('new_stuff').getAttribute("class") + " red");
    </script>
</body>

</html>