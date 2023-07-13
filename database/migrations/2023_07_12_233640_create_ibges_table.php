<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ibges', function (Blueprint $table) {
            $table->id();


            $table->integer('Codigo');
            $table->text('descricacao_do_alimento',80);
            $table->string('Categoria',80);
            $table->integer('Codigo_de_preparacao');
            $table->string('descricao_da_preparacao',80);

            $table->string('Energia_kcal',10);
            $table->string('Proteina_g',10);
            $table->string('Lipidios_totais_g',10);
            $table->string('Carboi_drato_g',10);
            $table->string('Fibra_alimentar_total_g',10);
            $table->string('Coles_terol_mg',10);
            $table->string('AG_Satura_dos_g',10);
            $table->string('AG_Mono_g',10);
            $table->string('AG_Poli_g',10);
            $table->string('AG_Lino_leico_g',10);
            $table->string('AG_Linole_nico_g',10);
            $table->string('AG_Trans_total_g',10);
            $table->string('Acucar_total_g',10);
            $table->string('Acucar_de_adicacao_g',10);
            $table->string('Calcio_mg',10);
            $table->string('Mag_nesio_mg',10);
            $table->string('Man_ganes_mg',10);
            $table->string('Fosforo_mg',10);
            $table->string('Ferro_mg',10);
            $table->string('Sodio_mg',10);
            $table->string('Sodio_de_adicao_mg',10);
            $table->string('Potas_sio_mg',10);
            $table->string('Co_bre_mg',10);
            $table->string('Zinco_mg',10);
            $table->string('Sele_nio_mcg',10);
            $table->string('Reti_nol_mcg',10);
            $table->string('Vitami_na_A_RAE_mcg',10);
            $table->string('Tiami_na_mg',10);
            $table->string('Ribofla_vina_mg',10);
            $table->string('Niaci_na_mg',10);
            $table->string('Niaci_na_NE_mg',10);
            $table->string('Pirido_xina_mg',10);
            $table->string('Coba_lami_na_mcg',10);
            $table->string('Folato_DFE_mcg',10);
            $table->string('Vitami_na_D_mcg',10);
            $table->string('Vitami_na_E_mg',10);
            $table->string('Vitami_na_C_mg',10);

            $table->string('slug');
            $table->timestamps();
        });


        $scriptPath = database_path('seeders\scripts\ibge.sql');
        $scriptContent = File::get($scriptPath);
        DB::unprepared($scriptContent);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibges');
    }
};
