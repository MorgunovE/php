<?php
  
  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;
  
  class CreateTodosTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
      Schema ::create ( 'todos',
        function ( Blueprint $table ) {
          $table -> id ();
//        34
          $table -> string ( 'title', 250 ) -> nullable () -> unique ();
          $table -> text ( 'note' ) -> nullable ();
          $table -> unsignedInteger ( 'status' ) ->default ( 0 );
          $table -> timestamps ();
        } );
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
      Schema ::dropIfExists ( 'todos' );
    }
  }
