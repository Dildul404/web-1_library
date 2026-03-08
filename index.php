<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <section class="body-overlay">
        <div class="login-container">

            <!-- sign in -->
            <div id="sign_in">
                <h1>Sign in</h1>
                <form method="post" action="signin.php">
                    <table>
                        <tr>
                            <td><label for="username">Username: </label></td>
                            <td><input type="text" name="username" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password: </label>
                            </td>
                            <td><input type="text" name="password" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">email: </label>
                            </td>
                            <td><input type="text" name="email" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phonenumb">Phone Number: </label>
                            </td>
                            <td><input type="number" name="phonenumb" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <button type="submit" class="toggle-btn">Submit</button>
                                <button type="reset" class="toggle-btn">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

            <!-- log in -->
            <div id="log_in" class="none">
                <h1>Login</h1>
                <form method="post" action="login.php">
                    <table>
                        <tr>
                            <td><label for="username">Username: </label></td>
                            <td><input type="text" name="username" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password: </label>
                            </td>
                            <td><input type="text" name="password" required class="input-box"></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                <button type="submit" class="toggle-btn">Submit</button>
                                <button type="reset" class="toggle-btn">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <a onclick="loggin_btn()" id="card_toggle">If you have an account</a>
        </div>
    </section>

    <!-- script -->
    <script>
        function loggin_btn() {
            const sign_in = document.getElementById("sign_in");
            const log_in = document.getElementById("log_in");
            const a_text = document.getElementById("card_toggle");

            if (!sign_in.classList.contains("none")) {
                sign_in.classList.add("none");
                log_in.classList.remove("none");
                a_text.innerText = "If you not have an account";
            } else if (sign_in.classList.contains("none")) {
                sign_in.classList.remove("none");
                log_in.classList.add("none");
                a_text.innerText = "If you have an account";
            }
        }
    </script>
</body>

</html>