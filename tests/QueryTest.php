<?php

namespace mayder\Autentique\tests;

use mayder\Autentique\tests\_Base;

use mayder\Autentique\Utils\Query;
use mayder\Autentique\Enums\ResourcesEnum;

class QueryTest extends _Base
{
    public function testFileIsNotFound()
    {
        $query = new Query(ResourcesEnum::DOCUMENTS);

        $resolve = $query->query("");

        $this->assertStringMatchesFormat("File is not found", $resolve);
    }
}
