<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("
        CREATE VIEW cancelled_orders_view AS SELECT DISTINCT c.customer_id AS CustID, cust.customer_name AS CustName, c.order_id AS OrderID, DATE(c.order_date) AS Dates
        FROM customer_orders c, customer cust, runner_orders r
        WHERE c.customer_id = cust.customer_id
        AND c.order_id = r.order_id
        AND r.cancellation IS NOT NULL;
        

        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancelled_orders');
    }
};
