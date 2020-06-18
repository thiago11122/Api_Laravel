<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/cadastrarPedido', function(Request $request) {

	//Array para teste
	/*
	$arr = array(
	"Nome" => "Thiago",
	"Products" =>array(array(
        "product" => "espinafre",
        "qty"     => 2,
        "price"   => 23
    ),
    array(
        "product" => "nugget",
        "qty"     => 1,
        "price"   => 23
    ),
    array(
        "product" => "couve",
        "qty"     => 1,
        "price"   => 23
    )
	));
	*/

	$arr = $request->all();
	$num = DB::table('orders')->insertGetId(
    array('customer_name' => $arr["Nome"], 'created_at' => date("Y-m-d H:i:s")));

    foreach($arr["Products"] as $produto){

    	DB::insert('insert into order_products (order_id ,qty, product ,price) values (?, ? , ?, ?)', [$num,$produto["qty"],$produto["product"],$produto["price"]]);    
    }

    /* Rotina para envio de email
    mail('exemplo@exemplo.com.br', 'Pedido Finalizado', "Pedido finalizado com sucesso. O seu número de pedido é".$num);
    */
    return $num;

});

Route::get('/retornarPedido/{id}/{dataInicial}/{dataFinal}', function($id,$dataInicial,$dataFinal) {

		$dataInicialFormatada = date('Y-m-d H:i:s', strtotime($dataInicial));
		$dataFinalFormatada   = date('Y-m-d H:i:s', strtotime($dataFinal));

		$pedido = DB::select("select * from orders where id = ? and created_at between ? and ?",[$id, $dataInicialFormatada, $dataFinalFormatada]);

		if($pedido == null){

			return "Não foi encontrado nenhum pedido";
		}

		$produtosPedido = DB::select("select * from order_products where order_id = ?",[$pedido[0]->id]);

		$total = 0;

		foreach($produtosPedido as $p){
			
			$preco = $p->price * $p->qty;
    		$total = $total+$preco;
		}
	
		$resposta = array(
			"Id" => $pedido[0]->id,
			"Nome do Cliente" => $pedido[0]->customer_name,
			"Total" => $total,
			"Produtos" =>$produtosPedido
		);

		return $resposta;

});

