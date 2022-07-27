<?php
namespace tests\Unit;

use App\Ecommerce\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    public function test_set_product_name()
    {
        $product = new Product('MOUSE',21.2);
        $this->assertEquals('MOUSE',$product->getName());
    }

    public function test_change_product_name()
    {
        $product = new Product('MOUSE',21.2);
        $product->setName('MOUSE STM');
        $this->assertEquals('MOUSE STM',$product->getName());
    }

    public function test_set_product_value()
    {
        $product = new Product('MOUSE',35.10);
        $this->assertEquals(35.10,$product->getValue());
    }
    public function test_change_product_value()
    {
        $product = new Product('MOUSE',35.10);
        $product->setValue(38.7898);
        $this->assertEquals(38.7898,$product->getValue());
    }
}