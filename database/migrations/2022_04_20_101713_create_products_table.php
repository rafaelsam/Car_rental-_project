
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('carName')->nullable();
            $table->string('MakeCompany')->nullable();
            $table->string('price')->nullable();
            $table->string('stockId')->nullable();
            $table->string('EngineType')->nullable();
            $table->string('ProductionYear')->nullable();
            $table->string('color')->nullable();
            $table->string('seat')->nullable();
            $table->string('door')->nullable();
            $table->string('bodyType')->nullable();
            $table->string('Dimension')->nullable();
            $table->string('mileage')->nullable();
            $table->string('chasis')->nullable();
            $table->string('drive')->nullable();
            $table->string('office')->nullable();
            $table->string('transmission')->nullable();
            $table->string('EngineCapacity')->nullable();
            $table->string('steering')->nullable();
            $table->string('weight')->nullable();
            $table->string('fuel')->nullable();
            $table->string('airbag')->nullable();
            $table->string('p_steering')->nullable();
            $table->string('p_window')->nullable();
            $table->string('radio')->nullable();
            $table->string('cd_player')->nullable();
            $table->string('back_camera')->nullable();
            $table->string('power_seat')->nullable();
            $table->string('back_tire')->nullable();
            $table->string('grill_guard')->nullable();
            $table->string('wheel_sp')->nullable();
            $table->string('push_start')->nullable();
            $table->string('fog_light')->nullable();
            $table->string('P_mirror')->nullable();
            $table->string('sp_tire')->nullable();
            $table->string('side_airbag')->nullable();
            $table->string('navigation')->nullable();
            $table->string('a_c')->nullable();
            $table->string('sun_roof')->nullable();
            $table->string('leather_seat')->nullable();
            $table->string('alloy_wh')->nullable();
            $table->string('jack')->nullable();
            $table->string('body_kit')->nullable();
            $table->string('cover_p')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
