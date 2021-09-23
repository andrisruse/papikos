<?php

namespace App\Http\Controllers\Owner;
use ErrorException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Owner\PromoService;
use App\Http\Requests\PromoRequest;

class PromoController extends Controller
{
  protected $promo;

  public function __construct(PromoService $promo)
  {
    $this->promo = $promo;
  }

  public function promo()
  {
    try {
      $result = $this->promo->promo();
      return $result;
    } catch (ErrorException $e) {
      throw new ErrorException($e->getMessage());
    }
  }

  public function promoCreate()
  {
    try {
      $result = $this->promo->promoCreate();
      return $result;
    } catch (ErrorException $e) {
      throw new ErrorException($e->getMessage());
    }
  }

  public function promoProces(PromoRequest $request)
  {
    try {
      $result = $this->promo->promoProces($request->all());
      return $result;
    } catch (ErrorException $e) {
      throw new ErrorException($e->getMessage());
    }
  }
}
