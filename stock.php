<?php


function updater($value, $id)
{
    global $conn;
    $value = mysqli_real_escape_string($conn, $value);
    $id = mysqli_real_escape_string($conn, $id);

    $sql = " UPDATE usuarios SET nombre = '$value' WHERE id_usuario = $id ";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    //$conn->close();
    mysqli_close($conn);
}

function updaterStock($num, $id_producto)
{
    global $conn;
    $num = mysqli_real_escape_string($conn, $num);
    $id_producto = mysqli_real_escape_string($conn, $id_producto);
    
    $sql = " UPDATE productos SET stock = stock-$num WHERE id_producto = $id_producto";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    //$conn->close();
    mysqli_close($conn);
}

if (isset($_POST['name'])) {
    updater($_POST['name'], $_POST['id']);
}


?>