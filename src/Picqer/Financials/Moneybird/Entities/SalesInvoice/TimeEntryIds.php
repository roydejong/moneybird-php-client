<?php

namespace Picqer\Financials\Moneybird\Entities\SalesInvoice;

class TimeEntryIds implements \JsonSerializable
{
    private $values;

    public function __construct(array $values)
    {
        $this->values = [];
        foreach ($values as $value)
            if (($value = intval($value)) > 0)
                $this->values[] = $value;
    }

    public function jsonSerialize()
    {
        if (empty($this->values))
            return null;

        return "!ARRAYHACK!" . implode(',', $this->values) . "!ARRAYHACK!";
    }
}