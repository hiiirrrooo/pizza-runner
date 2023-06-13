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
        CREATE VIEW unique_customers AS SELECT UT.OrderID, UT.CustID, UT.CustName, UT.DateOrdered, COUNT(UT.CustID) AS CustCount
        FROM (SELECT r.order_id AS OrderID, c.customer_id AS CustID, cust.customer_name AS CustName, c.order_date AS DateOrdered, COUNT(DISTINCT c.customer_id) AS UniqueCust
                FROM customer_orders c, runner_orders r, customer cust
                WHERE c.order_id = r.order_id 
                    AND c.customer_id = cust.customer_id
                    AND c.order_id IN (SELECT order_id FROM runner_orders 
                WHERE runner_orders.cancellation IS NULL)
                GROUP BY r.order_id) AS UT 
        GROUP BY UT.CustID
        HAVING CustCount = 1;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unique_customers');
    }
};
