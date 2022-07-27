<?php
namespace tests\Unit;

use App\Ecommerce\CartItem;
use App\Ecommerce\Product;
use PHPUnit\Framework\TestCase;

class CartItemTest extends TestCase
{

    public function test_check_product_in_cart_item()
    {
        $product01 = new Product('MOUSE',21.2);
        $cartItem = new CartItem($product01,10);
        $this->assertEquals($cartItem->getProduct(),$product01);
    }
    public function test_check_quantity_in_cart_item()
    {
        $product01 = new Product('MOUSE',21.2);
        $cartItem = new CartItem($product01,10);
        $this->assertEquals(10,$cartItem->getQuantity());
    }

    public function test_total_value()
    {
        $cartItem = new CartItem(new Product('MOUSE',21.2),10);
        $this->assertEquals(230.00,$cartItem->getTotal());
    }

}