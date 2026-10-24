
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student - RMMC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f8;
            margin: 0;
            padding: 30px 15px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ddd;
        }

        h1 { color: #087f8c; }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: white;
        }

        button {
            margin-top: 20px;
            padding: 12px 18px;
            background: #087f8c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #066873;
        }

        .error { color: #c62828; }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Student</h1>
    <p>Update the student's information below.</p>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}"
          method="POST">
        @csrf
        @method('PUT')

        <label for="student_number">Student Number</label>
        <input
            id="student_number"
            name="student_number"
            value="{{ old('student_number', $student->student_number) }}"
            required
        >

        <label for="first_name">First Name</label>
        <input
            id="first_name"
            name="first_name"
            value="{{ old('first_name', $student->first_name) }}"
            required
        >

        <label for="last_name">Last Name</label>
        <input
            id="last_name"
            name="last_name"
            value="{{ old('last_name', $student->last_name) }}"
            required
        >

        <label for="course">Course / Program</label>
        <input
            id="course"
            name="course"
            value="{{ old('course', $student->course) }}"
            required
        >

        <label for="year_level">Year Level</label>
        <select id="year_level" name="year_level" required>
            <option value="">Select Year Level</option>

            @foreach (['1st Year', '2nd Year', '3rd Year', '4th Year'] as $level)
                <option
                    value="{{ $level }}"
                    {{ old('year_level', $student->year_level) == $level ? 'selected' : '' }}
                >
                    {{ $level }}
                </option>
            @endforeach
        </select>

        <label for="email">Email</label>
        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email', $student->email) }}"
            required
        >

        <button type="submit">Save Changes</button>
    </form>

    <p>
        <a href="{{ route('students.index') }}">
            Cancel and Go Back
        </a>
    </p>
</div>
</body>
</html>
