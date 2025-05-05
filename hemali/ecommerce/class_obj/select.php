<?php

class Query
{
    public $connect;

    function __construct()
    {
        // Connect to the database
        $this->connect = mysqli_connect("localhost", "root", "", "ecom");
        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function insert($tbl_name, $arr)
    {
        // Ensure there is no 'submit' or unwanted fields in $arr
        array_pop($arr); // Remove the last element (e.g., submit button)

        // Prepare column names and values from $arr
        $keys = implode(',', array_keys($arr));
        $placeholders = implode(',', array_fill(0, count($arr), '?')); // Create placeholders for prepared statement
        $values = array_values($arr);

        // Prepare the SQL query with placeholders
        $query = "INSERT INTO $tbl_name ($keys) VALUES ($placeholders)";

        // Prepare the statement
        $stmt = mysqli_prepare($this->connect, $query);
        if (!$stmt) {
            die("Error preparing the statement: " . mysqli_error($this->connect));
        }

        // Determine the types of the bind parameters
        $types = str_repeat('s', count($values)); // Assuming all values are strings (use 'i', 'd' for integers, etc.)

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, $types, ...$values);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record inserted successfully";
        } else {
            echo "Error executing query: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }

    // SELECT method to fetch and display data
    function select($tbl_name)
    {
        // SELECT query to get all data from the table
        $query = "SELECT * FROM $tbl_name";
        
        // Execute the query
        $result = mysqli_query($this->connect, $query);
        
        // Check if query execution was successful
        if (!$result) {
            die("Error executing query: " . mysqli_error($this->connect));
        }

        // Check if there are rows returned
        if (mysqli_num_rows($result) > 0) {
            // Start the table
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>ID</th><th>Name</th><th>Education</th><th>Date of Birth</th><th>Email</th><th>Gender</th><th>Hobby</th><th>Action</th></tr>";

            // Loop through each row and display it
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['education'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['hobby'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a></td>"; // Edit link
                echo "</tr>";
            }

            // Close the table
            echo "</table>";
        } else {
            echo "No records found!";
        }

        // Free the result set
           $abc=mysqli_free_result($result);
          echo  print_r($abc); die();
    }

    // UPDATE method to update data in the table
    function update($tbl_name, $data, $id)
    {
        // Dynamically create the SET part of the query
        $set_parts = [];
        foreach ($data as $key => $value) {
            $set_parts[] = "$key = ?";
        }
        $set_query = implode(", ", $set_parts);
        
        // Prepare the SQL query with placeholders
        $query = "UPDATE $tbl_name SET $set_query WHERE id = ?";
        
        // Prepare the statement
        $stmt = mysqli_prepare($this->connect, $query);
        if (!$stmt) {
            die("Error preparing the statement: " . mysqli_error($this->connect));
        }

        // Merge the data values and the id into one array
        $values = array_merge(array_values($data), [$id]);

        // Determine the types of the bind parameters
        $types = str_repeat('s', count($values) - 1) . 'i'; // Assuming all fields are strings, 'i' for the ID as integer

        // Bind the parameters
        mysqli_stmt_bind_param($stmt, $types, ...$values);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            echo "Record updated successfully";
        } else {
            echo "Error executing query: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}

?>
