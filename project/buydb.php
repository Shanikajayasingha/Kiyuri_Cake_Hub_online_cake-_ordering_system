<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "kiyuri";
          
        
            $item = $_POST['name'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];
            $customer = $_POST['Fname'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
          
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          
          // Check connection
          if ($conn->connect_error) {
            echo '<script>alert("Connection failed: ' . $conn->connect_error . '");</script>';
          }
          
         $sql = "INSERT INTO oder_table (Item, price_RS, quantity, customer, location,Contact_No)
                VALUES ('$item', '$price', '$qty', '$customer', '$address', '$mobile')";
                  
                  
          
       if ($conn->query($sql) === TRUE) {
            echo '<script>alert("New record created successfully");</script>';
            
          } else {
            $errorMsg = "Error: " . $sql . "\n" . $conn->error;
            echo '<script>alert(' . json_encode($errorMsg) . ');</script>';
          }
          
          $conn->close();
          
          
          ?>




   