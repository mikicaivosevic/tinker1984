<?php

namespace Abstractrs\Tinker1984\Tests;

use Illuminate\Support\Collection;
use Abstractrs\Tinker1984\TinkerCaster;
use PHPUnit\Framework\TestCase;

class TinkerCasterTest extends TestCase
{
    public function testCanCastCollection()
    {
        $caster = new TinkerCaster();

        $result = $caster->castCollection(new Collection(["foo", "bar"]));

        $this->assertSame([["foo", "bar"]], array_values($result));
    }
}
