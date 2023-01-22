<?php

namespace Taylor\BillingDashboard;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Macroable;
use Taylor\BillingDashboard\Enums\BillingInterval;

class Plan implements Arrayable, \JsonSerializable
{
    use Macroable;

    public string $id;
    public string $stripePrice;
    public string $name;
    public BillingInterval $interval = BillingInterval::MONTHLY;
    public int $trialDays;
    public float $price;
    public string $currency;
    public int $rawPrice;
    public string $description;
    public array $additionalPrices = [];
    public array $features = [];

    public array $options;
    public bool $active = true;

    /**
     * @param \Taylor\BillingDashboard\Enums\BillingInterval $interval
     *
     * @return Plan
     */
    public function setInterval(BillingInterval $interval): Plan
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @param int $trialDays
     *
     * @return Plan
     */
    public function setTrialDays(int $trialDays): Plan
    {
        $this->trialDays = $trialDays;
        return $this;
    }

    /**
     * @param float $price
     *
     * @return Plan
     */
    public function setPrice(float $price): Plan
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param string $currency
     *
     * @return Plan
     */
    public function setCurrency(string $currency): Plan
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @param int $rawPrice
     *
     * @return Plan
     */
    public function setRawPrice(int $rawPrice): Plan
    {
        $this->rawPrice = $rawPrice;
        return $this;
    }

    /**
     * @param string $description
     *
     * @return Plan
     */
    public function setDescription(string $description): Plan
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param array $additionalPrices
     *
     * @return Plan
     */
    public function setAdditionalPrices(array $additionalPrices): Plan
    {
        $this->additionalPrices = $additionalPrices;
        return $this;
    }

    /**
     * @param array $features
     *
     * @return Plan
     */
    public function setFeatures(array $features): Plan
    {
        $this->features = $features;
        return $this;
    }

    /**
     * @param array $options
     *
     * @return Plan
     */
    public function setOptions(array $options): Plan
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param bool $active
     *
     * @return Plan
     */
    public function setActive(bool $active): Plan
    {
        $this->active = $active;
        return $this;
    }


    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
