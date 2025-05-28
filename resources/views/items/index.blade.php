<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 30px;
        }

        h1 {
            color: #1f2937;
        }

        a.button {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        a.button:hover {
            background-color: #1d4ed8;
        }

        .success {
            color: #15803d;
            background-color: #dcfce7;
            padding: 10px;
            border: 1px solid #86efac;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .item-info {
            flex-grow: 1;
        }

        .item-actions a,
        .item-actions form {
            margin-left: 10px;
            display: inline-block;
        }

        .item-actions button {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .item-actions button:hover {
            background-color: #dc2626;
        }

        .edit-link {
            background-color: #facc15;
            padding: 6px 12px;
            color: #1f2937;
            text-decoration: none;
            border-radius: 4px;
        }

        .edit-link:hover {
            background-color: #eab308;
        }
    </style>
</head>
<body>
    <h1>Item List</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('items.create') }}" class="button">Add New Item</a>

    <ul>
        @foreach($items as $item)
            <li>
                <div class="item-info">
                    {{ $item->name }} - ${{ $item->price }}
                </div>
                <div class="item-actions">
                    <a href="{{ route('items.edit', $item->id) }}" class="edit-link">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
