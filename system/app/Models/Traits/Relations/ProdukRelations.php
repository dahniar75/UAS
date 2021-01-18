<?php 
namespace App\Models\Traits\Relations;

use App\Models\Produk;

trait ProdukRelations {
	function seller(){
		return $this->belongsTo(Produk::class, 'id_user');
	}
}


 ?>