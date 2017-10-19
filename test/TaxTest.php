<?php

use PHPUnit\Framework\TestCase;

use Tax\TaxCalculator;

class TaxCalculatorTest extends TestCase {

    private $taxCalculator;

    /**
     * @group Tax
     **/
    public function testTaxError() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(-1);

        // Then
        $this->assertEquals("invalid revenue", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual150000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(150000);

        // Then
        $this->assertEquals("0", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual300000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(300000);

        // Then
        $this->assertEquals("7500", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual500000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(500000);

        // Then
        $this->assertEquals("27500", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual750000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(750000);

        // Then
        $this->assertEquals("65000", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual1000000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(1000000);

        // Then
        $this->assertEquals("115000", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual2000000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(2000000);

        // Then
        $this->assertEquals("365000", $tax);
    }

    /**
     * @group Tax
     **/
    public function testRevenueLessThanEqual4000000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(4000000);

        // Then
        $this->assertEquals("965000", $tax);
    }

     /**
     * @group Tax
     **/
    public function testRevenueMoreThan4000000() {
        // Given
        $taxCalculator = new TaxCalculator;

        // When
        $tax = $taxCalculator->taxCalculator(10000000);

        // Then
        $this->assertEquals("3065000", $tax);
    }

}
