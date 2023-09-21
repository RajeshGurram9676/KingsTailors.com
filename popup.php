<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        margin-top: 100px;
        padding: 60px;
        border-radius: 8px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
      .submit {
  padding: 20px 30px 10px 30px;
}
.submit-button:active,
.submit-button:hover {
  border-radius: 30px;
  border: 2px solid #599a15;
  background-color: #599a15;
}
.submit-button {
  width: 28%;
  padding: 15px;
  color: white;
  font-size: 16px;
  border-radius: 6px;
  transition: border 0.6s ease,
  border-radius 0.6s ease,
  background-color 0.2s linear;
  outline: none;
  font-weight: 600;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  border: 2px solid #88B997;
  background-color: #84b997;
}
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:20px auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Thank You!</h1><br> 
        <p>Your Details Have Been Saved Successfully</br></br>Please Login Here</p>
        </div>
        <div class="submit">
          <button type="submit" class="submit-button" onclick="loginpage()">Login</button>
        </div>
      </div>
      <script>
        function loginpage(){
        window.location.href = "loginpage1.php";
}
      </script>
    </body>
</html>