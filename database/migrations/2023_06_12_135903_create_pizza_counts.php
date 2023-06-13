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
        CREATE VIEW pizza_counts AS SELECT DATE(c.order_date) AS Dates, c.pizza_id AS PizzaID, p.pizza_name AS PizzaName, COUNT(c.pizza_id) AS PizzaCount 
        FROM customer_orders c, runner_orders r, pizza_names p
        WHERE c.order_id = r.order_id 
        AND c.pizza_id = p.pizza_id
        AND r.cancellation IS NULL
        GROUP BY c.pizza_id, Dates
        ORDER BY Dates, PizzaCount DESC;        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_counts');
    }
};
