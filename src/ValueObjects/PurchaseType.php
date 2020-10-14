<?php


namespace Imdhemy\GooglePlay\ValueObjects;


class PurchaseType
{
    protected $type;

    /**
     * PurchaseType constructor
     *
     * @param integer $type
     */
    public function __construct(?int $type = null )
    {
        $this->type = $type;
    }

    public function isTest(): bool
    {
        return $this->type === 0 ;
    }

    public function isPromo(): bool
    {
        return $this->type === 1 ;
    }

    /**
     * @return boolean
     */
    public function isRewarded(): bool
    {
        return $this->type === 2 ;
    }
}
