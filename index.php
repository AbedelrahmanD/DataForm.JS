<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body{
        /* direction: rtl; */
        font-family: sans-serif;
      }
      form{
        max-width: 500px;
        margin: auto;
      }
      button{
        border-radius: 3px;
        padding: 10px;
        width: 100%;
        margin: 15px 0;
        border: 1px solid #222;
      }
      .formContainer{
        position: relative;
        display: flex;
        flex-direction: column;
      }
      .formContainer input{
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #222;
      }
      [data-invalid-message]{
        position: absolute;
        bottom: -20px;
        background-color: #F80C35;
        padding: 5px;
        border-radius: 3px;
        color: white;
        font-size: 0.8rem;
        font-weight: bold;
      }
      [data-invalid-message]::before{
        content: "\25B2";
        color: #F80C35;
        position: absolute;
        top: -12px;
        
   
      }
    </style>
    <script src="data_form.js"></script>

    <script>
        //adding new rule
        formRules["min3"] = function(value) {
            return value.length >= 3;
        }

        function showAlert(response) {
            alert(response.message);
        }
    </script>
</head>

<body>
    <h1>Form1- Post Method</h1>

    <form id="jsForm" action="api.php" method="POST" data-form="showAlert">
       <div class="formContainer">
        <label >Name</label>
        <input type="text" name="name" data-type="text" data-type-message="Required">
       </div>
       <br>
      <div class="formContainer">
        <label>Email</label>
        <input type="email" name="email" data-type="email" data-type-message="Email Must Contains @ and .">
      </div>
      <button type="submit">submit</button>
        <div data-form-loader>loading...</div>
        <div data-form-message></div>
    </form>


    <hr>
    <h1>Form2- Get Method</h1>
    <form id="form2" action="api.php" method="GET" data-form>
      <div class="formContainer">
        <label >Name</label>
        <input type="text" name="name" data-type="number" data-type-message="must be number">
      </div>
      <button type="submit">submit</button>
        <div data-form-loader>loading...</div>
    </form>



</body>

</html>