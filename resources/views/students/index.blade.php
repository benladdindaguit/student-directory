
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RMMC Student Directory</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f8;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ddd;
        }

        h1 {
            color: #087f8c;
        }

        /* Align the description and registration button */
        .directory-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .directory-header p {
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #087f8c;
            color: white;
        }

        .button {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .add {
            background: #087f8c;
        }

        .edit {
            background: #2878c8;
        }

        .delete {
            background: #c62828;
        }

        .success {
            padding: 12px;
            background: #d4edda;
            color: #155724;
            margin: 15px 0;
            border-radius: 5px;
        }

        .actions {
            display: flex;
            gap: 6px;
            align-items: center;
        }

        form {
            margin: 0;
        }

        /* Keep the header comfortable on smaller screens */
        @media (max-width: 600px) {
            .directory-header {
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>RMMC Student Directory</h1>

        <div class="directory-header">
            <p>Student information retrieved from the MySQL database.</p>

            <a class="button add" href="{{ route('students.create') }}">
                + Register New Student
            </a>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('students.index') }}" method="GET"
            style="margin: 20px 0; display: flex; gap: 8px; flex-wrap: wrap;">

            <input type="text" name="search" placeholder="Search students..."
                value="{{ $search }}"
                style="padding: 10px; width: 280px; max-width: 100%;">

            <button class="button add" type="submit">
                Search
            </button>

            <a class="button edit" href="{{ route('students.index') }}">
                Clear
            </a>
        </form>

        @if ($students->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Student Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>Year Level</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->student_number }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->course }}</td>
                             <td>{{ $student->year_level ?? 'Not set' }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <div class="actions">
                                    <a class="button edit"
                                        href="{{ route('students.edit', $student->id) }}">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('students.destroy', $student->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this student?');">

                                        @csrf
                                        @method('DELETE')

                                        <button class="button delete" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No student records found. Add a student record to your database.</p>
        @endif
    </div>
</body>

</html>
