<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
       <div>
        <label >Name</label>
        <input type="text" name="name" data-type="text" data-type-message="Required">
       </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" data-type="email" data-type-message="Email Must Contains @ and .">
      </div>
        <input type="submit" value="submit">
        <div data-form-loader>loading...</div>
        <div data-form-message></div>
    </form>


    <hr>
    <h1>Form2- Get Method</h1>
    <form id="form2" action="api.php" method="GET" data-form>
      <div>
        <label >Name</label>
        <input type="text" name="name" data-type="number" data-type-message="must be number">
      </div>
        <input type="submit" value="submit">
        <div data-form-loader>loading...</div>
    </form>



</body>

</html>