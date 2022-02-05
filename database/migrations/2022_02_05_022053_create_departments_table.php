<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     * stringメソッドだけは、第２引数に文字数を設定できますが、
     * integerには、付けないでください。プライマリーキーが設定されてしまいます。０以外はtrueになり、設定されるので。
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->string('department_id', 20)->primary();  // 主キーを文字列にする 部署ID オートインクリメントは無し
            $table->string('department_name', 20)->unique(); // 部署名
            // 今回のテーブルは、タイムスタンプいらない  モデルにも、いらない設定を書かないといけません。

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
