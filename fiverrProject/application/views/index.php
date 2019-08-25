<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- css -->
  <style type="text/css">
    .section{
      background-color:#68D3E3;
      height: 350px;
      width: 550px;
      margin-left: auto;
      margin-right: auto;
      padding-top: 40px;
      margin-top: 50px;
    }

    .section {
    padding: 26px 0px 0px 4px;
}


    form{
      height: 300px;
      width: 500px;
      /*border: 5px solid #1f0027;*/
      background-color: #D6EDF3;
      margin-left: auto;
      margin-right: auto;
      /*border-radius: 5px;*/

    }
    input{
      border: 1px solid green;
      border-radius: 2px;
      width: 120px;
      text-transform: capitalize;
      margin-top: 25px;
      margin-left: 1px; 
    }
    label{
      text-transform: capitalize;
    }
    button{
       
      background-color: #70CEEE;
      font-size: 18px;
      outline: none;
      text-align: center;
      width: 90px;
      border-radius: 4px;
      margin-top: 30px;
      margin-left: 117px;
    }
  </style>
</head>
<body>
<div class="section">
  <form>
    <a href = "<?php echo site_url();?>/welcome/bootstrap"><button>Enter Data</button></a>
    <a href = "<?php echo site_url();?>/welcome/clientPage"><button>Client Page</button></a
  </form>
</div>

 

</body>
</html>