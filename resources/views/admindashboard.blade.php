<div class="container">
<h1>Admin  — {{ Auth::user()->name }}</h1>

<table border="1" cellpadding="10" bg="gray" >
    <tr>
        <th>So.</th>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Feedback Message</th>
        <th>Sent At</th>
        <th>Status</th>
        <th>change</th>
    </tr>

    @foreach($feedbacks as $index => $feedback)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $feedback->user_id }}</td>
        <td>{{ $feedback->name }}</td>
        <td>{{ $feedback->email }}</td>
        <td>{{ $feedback->message }}</td>
     
        <td>{{$feedback->created_at}}</td>
                <td>{{ $feedback->status }}</td>

        <td>
            
          <form action="{{ route('updateStatus', $feedback->id) }}" method="POST">
              @csrf
              <select name="status" onchange="this.form.submit()">
                  <option value="pending" {{ $feedback->status == 'pending' ? 'selected' : '' }}>Pending</option>
                  <option value="reviewed" {{ $feedback->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                  <option value="closed" {{ $feedback->status == 'closed' ? 'selected' : '' }}>Closed</option>
              </select>
          </form>

        </td>
    </tr>
    @endforeach

</table>

  
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f7fa;
        padding: 20px;
    }

    h1 {
        margin-bottom: 20px;
        color: #333;
        font-size: 28px;
        font-weight: 600;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    table {
        width: 90%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    th {
        background: #007bff;
        color: white;
        padding: 12px;
        font-size: 15px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-align: center;
    }

    td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
        font-size: 14px;
    }

    tr:nth-child(even) {
        background: #f8f9fc;
    }

    tr:hover {
        background: #eef3ff;
        transition: 0.2s;
    }

    select {
        padding: 6px;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    button {
        margin-top: 20px;
        background: #28a745;
        color: white;
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: 0.3s;
    }

    button:hover {
        background: #218838;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
</style>

