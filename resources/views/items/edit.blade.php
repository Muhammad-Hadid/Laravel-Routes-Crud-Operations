<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 30px;
        }

        h1 {
            color: #1f2937;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 400px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
        }

        button {
            background-color: #10b981;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #059669;
        }

        .error-list {
            background-color: #fee2e2;
            border: 1px solid #fca5a5;
            padding: 10px;
            border-radius: 6px;
            color: #b91c1c;
            margin-bottom: 20px;
            list-style: inside;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            color: #2563eb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Edit Item</h1>

    @if ($errors->any())
        <ul class="error-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $item->name }}">

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="{{ $item->price }}">

        <button type="submit">Update Item</button>
    </form>

    <a href="{{ route('items.index') }}">← Back to Item List</a>
</body>
</html>
