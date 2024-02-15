<strong>DATABASE CONNECTED: </strong>
<?php
    use Illuminate\Support\Facades\DB;
    try {
        DB::connection()->getPDO();
        echo DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo 'none';
    }

?>