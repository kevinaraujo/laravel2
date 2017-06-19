<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ContasPagarTableSeeder');
    }
}

class ContasPagarTableSeeder extends Seeder{
	public function run()
    {
        DB::insert('INSERT INTO contas_pagar(descricao,valor)VALUES(?,?)',
        array('Pagamento Luz','50.00'));

          DB::insert('INSERT INTO contas_pagar(descricao,valor)VALUES(?,?)',
        array('Pagamento Telefone','200.00'));

          DB::insert('INSERT INTO contas_pagar(descricao,valor)VALUES(?,?)',
        array('Pagamento Tv Assinatura','250.00'));
    }
}