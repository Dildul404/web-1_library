<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="book_body_container">
        <!-- user tools -->
        <aside id="user_tools">
            <h1>Create book</h1>
            <form action="fill_edit_user_book.php" method="POST" class="form_book">
                <!-- user id -->
                <?php $user_id = $_GET['id'] ?>
                <input type="hidden" name="user_id" value="<?= $user_id; ?>">
                <table>
                    <tr>
                        <td>
                            <label for="title">Title</label>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <input type="text" name="title" required class="book_input">
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
                            <input type="text" name="content" class="book_input">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="submit" class="toggle-btn">Submit</button>
                            <button type="reset" class="toggle-btn">reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </aside>
        <!-- Book -->
        <div class="book_container" id="book_container">
            <h2 id="title"></h2><hr>
            <p id="content"></p>
        </div>
    </div>

    <!-- script -->
    <script>
        const params = new URLSearchParams(window.location.search);
        const user_id = params.get("id");

        fetch("showBooks.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "user_id=" + user_id
        });
    </script>
</body>
</html>