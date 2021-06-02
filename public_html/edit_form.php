<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="edit_form.css">
    <title>Document</title>
</head>

<body>

<main>
    <form action="includes/editSet.php" method="post" class="editForm">
        <div class="wrapper">
            <div class="sidebar">
                <div class="mainInformation">
                    <div class="mainInformation_input">
                        <input type="tel" name="phone" id="telephone">
                        <label for="telephone">Phone</label>
                    </div>
                    <div class="mainInformation_input">

                        <input type="email" name="email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="mainInformation_input">

                        <input type="text" name="city" id="city">
                        <label for="city">City</label>
                    </div>
                    <div class="mainInformation_input">

                        <input type="text" name="link" id="gitLink">
                        <label for="gitLink">GitHub</label>
                    </div>
                </div>

                <div class="skills">
                    <label for="skills">Skills</label>
                    <textarea name="skillsArea" id="skills" cols="30" rows="1"></textarea>
                </div>
            </div>
            <div class="aboutInformation">

                <label for="profile">Profile</label>
                <textarea name="profileArea" id="profile" cols="30" rows="1"></textarea>
            </div>
            <div class="aboutInformation2">
                <label for="profExp">Professional experience</label>
                <textarea name="profExpArea" id="profExp" cols="30" rows="1"></textarea>
            </div>

        </div>

        <button class="formButtons" type="submit">Edit</button>
        <form action="includes/dump.php">
            <button type="submit" class="dumb">Dump</button>
        </form>

        <form action="includes/backup.php">
            <button type="submit" class="dumb">Back Up </button>
        </form>


    </form>

</main>

</body>
</html>