<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <!-- user tools -->
    <aside id="user_tools">
        <form action="fill_edit_user_book.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="title">Title</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="title" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="title">Content</label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="content">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">Submit</button>
                        <button type="reset">reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </aside>
</body>
</html>