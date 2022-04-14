<?php declare(strict_types = 1);

namespace Tests\Fixtures\ResponseEntity;

use Apitte\Core\Annotation\Controller\Ref;

#[Ref('#/components/schema/foo')]
class AttributeReferenceEntity
{

	public int $int;

}
