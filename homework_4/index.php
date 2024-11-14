<?php

// 1) Создаем родительский (главный) класс
abstract class ParentClass
{
    protected ?int $base = null;
    protected ?int $exponent = null;

    public function getBase(): ?int
    {
        return $this->base;
    }

    public function setBase(int $value): void
    {
        $this->base = $value;
    }

    public function getExponent(): ?int
    {
        return $this->exponent;
    }

    public function setExponent(int $value): void
    {
        $this->exponent = $value;
    }

    abstract public function pow(): int;
}

// 2) Создаем 3 наследника родительского класса

class FirstChildClass extends ParentClass
{
    protected ?int $addition = null;

    public function getAddition(): ?int
    {
        return $this->addition;
    }

    public function setAddition(int $value): void
    {
        $this->addition = $value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }

    public function add(): int
    {
        return $this->pow() + $this->addition;
    }
}

class SecondChildClass extends ParentClass
{
    protected ?int $multiplier = null;

    public function getMultiplier(): ?int
    {
        return $this->multiplier;
    }

    public function setMultiplier(int $value): void
    {
        $this->multiplier = $value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }

    public function multiply(): int
    {
        return $this->pow() * $this->multiplier;
    }
}

final class ThirdChildClass extends ParentClass
{
    protected ?int $subtraction = null;

    public function getSubtraction(): ?int
    {
        return $this->subtraction;
    }

    public function setSubtraction(int $value): void
    {
        $this->subtraction = $value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }

    public function subtract(): int
    {
        return $this->pow() - $this->subtraction;
    }
}

// 3) Создаем по 2 наследника от наследников первого уровня

class FirstChildLevel2Class extends FirstChildClass
{
    protected ?int $level2Value = null;

    public function getLevel2Value(): ?int
    {
        return $this->level2Value;
    }

    public function setLevel2Value(int $value): void
    {
        $this->level2Value = $value;
    }

    public function multiplyWithAddition(): int
    {
        return $this->addition * $this->level2Value;
    }

    public function addWithBase(): int
    {
        return $this->base + $this->level2Value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }
}

class SecondChildLevel2Class extends FirstChildClass
{
    protected ?int $level2Value = null;

    public function getLevel2Value(): ?int
    {
        return $this->level2Value;
    }

    public function setLevel2Value(int $value): void
    {
        $this->level2Value = $value;
    }

    public function divideAddition(): float
    {
        return $this->addition / $this->level2Value;
    }

    public function addWithBase(): int
    {
        return $this->base + $this->level2Value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }
}

class ThirdChildLevel2Class extends SecondChildClass
{
    protected ?int $level2Value = null;

    public function getLevel2Value(): ?int
    {
        return $this->level2Value;
    }

    public function setLevel2Value(int $value): void
    {
        $this->level2Value = $value;
    }

    public function subtractMultiplier(): int
    {
        return $this->multiplier - $this->level2Value;
    }

    public function multiplyWithBase(): int
    {
        return $this->base * $this->level2Value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }
}

class FourthChildLevel2Class extends SecondChildClass
{
    protected ?int $level2Value = null;

    public function getLevel2Value(): ?int
    {
        return $this->level2Value;
    }

    public function setLevel2Value(int $value): void
    {
        $this->level2Value = $value;
    }

    public function addMultiplier(): int
    {
        return $this->multiplier + $this->level2Value;
    }

    public function subtractFromBase(): int
    {
        return $this->base - $this->level2Value;
    }

    public function pow(): int
    {
        return $this->base ** $this->exponent;
    }
}

$firstChild = new FirstChildLevel2Class();
$firstChild->setBase(2);
$firstChild->setExponent(3);
$firstChild->setAddition(5);
$firstChild->setLevel2Value(3);

$secondChild = new SecondChildLevel2Class();
$secondChild->setBase(2);
$secondChild->setExponent(3);
$secondChild->setAddition(5);
$secondChild->setLevel2Value(3);

$thirdChild = new ThirdChildLevel2Class();
$thirdChild->setBase(2);
$thirdChild->setExponent(3);
$thirdChild->setMultiplier(5);
$thirdChild->setLevel2Value(3);

$fourthChild = new FourthChildLevel2Class();
$fourthChild->setBase(2);
$fourthChild->setExponent(3);
$fourthChild->setMultiplier(5);
$fourthChild->setLevel2Value(3);

var_dump($firstChild->multiplyWithAddition(), $firstChild->addWithBase(), $firstChild->pow());
var_dump($secondChild->divideAddition(), $secondChild->addWithBase(), $secondChild->pow());
var_dump($thirdChild->subtractMultiplier(), $thirdChild->multiplyWithBase(), $thirdChild->pow());
var_dump($fourthChild->addMultiplier(), $fourthChild->subtractFromBase(), $fourthChild->pow());