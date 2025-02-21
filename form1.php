<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Client Form</title>
    <link rel="stylesheet" href="form.css"> <!-- Linking CSS File -->
</head>
<body>
    <div class="form-container">
        <h2>Lawyer Client Information Form</h2>
        <form action="submit_form.php" method="POST">
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br><br>

            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br><br>

            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phone" name="phone" required><br><br>

            <label for="case_description">Description of Legal Case:</label><br>
            <textarea id="case_description" name="case_description" rows="4" required></textarea><br><br>

            <label for="preferred_contact">Preferred Contact Method:</label><br>
            <select id="preferred_contact" name="preferred_contact">
                <option value="email">Email</option>
                <option value="phone">Phone</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
