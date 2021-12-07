<?php
abstract class Connect
{
    protected function ConnectBD()
    {
        try {
            return $connect = new Mysqli("localhost", "root", "", "ra12345");
        } catch (mysqli_sql_exception $e) {
            return $e->getMessage();
        }
    }
}
