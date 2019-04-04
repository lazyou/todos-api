<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('project_id')->index();
            $table->integer('parent_id')->default(0)->index();
            $table->string('name');
            $table->integer('child_count')->default(0)->comment('子集数量');
            $table->integer('done_count')->default(0)->comment('子集完成数量');
            $table->tinyInteger('type')->comment('字典: todo类型');
            $table->tinyInteger('status')->comment('字典: todo状态');
            $table->integer('assigned_user_id')->nullable()->comment('被分配的用户');
            $table->integer('done_user_id')->nullable()->comment('被分配的用户');
            $table->timestamp('expect_done_at')->nullable()->comment('预计完成日期');
            $table->timestamp('actual_done_at')->nullable()->comment('实际完成日期');
            $table->integer('created_user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
