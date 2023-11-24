<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $profile->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- フォームフィールドや入力項目を追加 -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $profile->name }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $profile->email }}" required>
        <br>
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
