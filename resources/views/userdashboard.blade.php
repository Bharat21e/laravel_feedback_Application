<div class="container">
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
     <h1>Welcome, {{ Auth::user()->name }}</h1>
          <h3>fill the feedbackfrom</h3>

     <a href="{{route('feedbackform')}}">
            <button>Feedback Form</button>
     </a>
</div>

<div>
 <table class="feedback-table">
    <tr>
        <th>s.no</th>
        <th>Message</th>
        <th>Status</th>
        <th>Created At</th>
    </tr>

    @forelse($userfeedbacks as $i => $fb)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $fb->message }}</td>
            <td>
                <span class="status {{ strtolower($fb->status) }}">
                    {{ $fb->status }}
                </span>
            </td>
            <td>{{ $fb->created_at->format('d M Y') }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="empty">No old feedback found</td>
        </tr>
    @endforelse
</table>


</div>

<style>
     .container{
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
     height: 40vh;
     }
     table {
        width: 80%;
        border-collapse: collapse;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
     }
     th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        background-color: #f9f9f9;
     }
     th {
            background-color: #f4f4f4;
               font-weight: bold;
     }
     tr:hover {
            background-color: #f1f1f1;
     }
     button {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
     }

     .feedback-table {
    width: 80%;
    margin: 30px auto;
    border-collapse: collapse;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    background-color: #fff;
}

.feedback-table th {
    background-color: #343a40;
    color: white;
    padding: 12px;
    text-align: center;
}

.feedback-table td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

.feedback-table tr:hover {
    background-color: #f8f9fa;
}

/* Status badges */
.status {
    padding: 4px 10px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 600;
}

.status.pending {
    background-color: #ffc107;
    color: #000;
}

.status.approved {
    background-color: #28a745;
    color: #fff;
}

.status.rejected {
    background-color: #dc3545;
    color: #fff;
}

.empty {
    text-align: center;
    font-weight: bold;
    color: #666;
}


</style>
