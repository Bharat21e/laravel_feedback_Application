<div class="container">
    <!-- Order your soul. Reduce your wants. - Augustine -->
       <h3>share your valuabel feeback</h3>
        <form action="{{route('feedbacksubmit')}}" method="POST">
            @csrf
     <textarea name="text" id="" cols="60" rows="10" placeholder="write message"></textarea><br>
     <input type="submit" value="submit">
    </form>
</div>

<style>
  form{
    margin-top: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
  input[type="submit"]{
    width: 100px;
    height: 40px;
    margin-top: 20px;
    background-color: gray;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-transform: uppercase;
  }
  textarea{
    border-radius: 10px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    resize: none;
  }
  h3{
    font-famly: 'Arial', sans-serif;
    font-size: 24px;
    color: #333;
    text-align: center;
  }
 input[type="submit"] {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 16px;
}

</style>
