<!DOCTYPE html>
<html lang="ar">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>برنامج تنسيق الترجمة</title>
    <style>
        body {
		    font-family: Arial, sans-serif;
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}

	    form {
		    width: 300px;
		    text-align: center;
	     }

	   label {
	        display: block;
	        margin-bottom: 10px;
	     }

       select {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
         }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
         }
    </style>
</head>
<body>
<h1 style="text-align: center; top: 0; position: absolute;">تنسيق الترجمة</h1>
    <form id="myForm" action="application.php" method="post" enctype="multipart/form-data">

            <label for="episode">الحلقة:</label>
	           <select id="selection1" name="episode">
                  <option value="1">الأولى</option>
		        </select>

     		<label for="selection2">اللغة:</label>
	           <select id="selection2" name="language">
                  <option value="original_text">النص الأصلي</option>
	              <option value="translate_to_turki">النص التركي</option>
	              <option value="Indonesian">indonisian</option>
		       </select>


		    <button type="submit">عرض</button>
	</form>


	</body>
</html>
