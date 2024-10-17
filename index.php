<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractive Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="includes/frmhandler.php" method="post">
            <label for="firstname">First Name</label>
            <input id="firstname" type="text" name="firstname" placeholder="Enter first name" required>

            <label for="lastname">Last Name</label>
            <input id="lastname" type="text" name="lastname" placeholder="Enter last name" required>

            <label for="f_fruit">Favourite Fruit?</label>
            <select id="f_fruit" name="f_fruit" required>
                <option value="">Select a fruit</option>
                <option value="apple">Apple</option>
                <option value="mango">Mango</option>
                <option value="watermelon">Watermelon</option>
            </select>

        </form>
        <button type="submit">Submit</button>
    </main>
</body>

</html>