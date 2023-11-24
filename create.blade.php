<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
</head>
<body>
    <h1>Create Profile</h1>
    <form action="{{ route('profile.store') }}" method="POST">
        @csrf
        <!-- フォームフィールドや入力項目を追加 -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Create Profile</button>
    </form>
</body>
</html>
