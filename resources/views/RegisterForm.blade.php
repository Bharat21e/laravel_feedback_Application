<div class="container">
    <!-- When there is no desire, all things are at peace. - Laozi -->
     <h4>password minimum 6 character</h4>
     <h4>dont enter any preregisterd email </h4>
     <form action="{{route('RegisterFrom')}}"method="POST"    autocomplete="on">
      @csrf
        <h1>Register</h1>
        <input type="text" name="name" placeholder="enter name" required><br>
        <input type="email" name="email" placeholder="enter email" autocomplete="username"  required><br>
        <input type="password" name="password" placeholder="enter password" autocomplete="new-password" required><br>
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
    margin-top: 50px;
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
  input[type="text"], input[type="email"], input[type="password"]{
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    width: 250px;
  }
</style>
