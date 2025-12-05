<div class="container">
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
     <h1>Welcome, {{ Auth::user()->name }}</h1>
          <h3>fill the feedbackfrom</h3>

     <a href="{{route('feedbackform')}}">
            <button>Feedback Form</button>
     </a>
</div>

<style>
     .container{
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
     height: 100vh;
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

</style>
