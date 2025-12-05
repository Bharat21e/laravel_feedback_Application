<div class="container">
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <form action="{{ route('userlogin') }}" autocompelet="on" method="POST">
                <h3>user login</h3>

      @csrf
       <input type="email" name="email" placeholder="enter email" autocomplete="username" required><br>

<input type="password" name="password" placeholder="enter password" autocomplete="current-password" required><br>

<input type="submit" value="submit">

     </form>
</div>

<style>
  .container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  form{
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
        background-color: #007bff;

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
  input[type="email"], input[type="password"]{
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 250px;
    
  }
</style>
