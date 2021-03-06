<?php

namespace spec\Pim\Bundle\CatalogBundle\Doctrine\MongoDBODM;

use Doctrine\MongoDB\Collection;
use Doctrine\MongoDB\Cursor;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\UnitOfWork;
use PhpSpec\ObjectBehavior;

/**
 * @require Doctrine\MongoDB\Collection
 * @require Doctrine\MongoDB\Cursor
 * @require Doctrine\ODM\MongoDB\DocumentManager
 * @require Doctrine\ODM\MongoDB\Mapping\ClassMetadata
 * @require Doctrine\ODM\MongoDB\UnitOfWork
 */
class ProductRepositorySpec extends ObjectBehavior
{
    function let(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $class->name = 'foobar';
        $this->beConstructedWith($dm, $uow, $class);
    }

    function it_is_a_product_repository()
    {
        $this->shouldImplement('Pim\Bundle\CatalogBundle\Repository\ProductRepositoryInterface');
    }

    function it_aggregate_attributes_to_export($dm, Collection $collection, Cursor $cursor)
    {
        $dm->getDocumentCollection('foobar')->willReturn($collection);

        $cursor->toArray()->willReturn([
            ['_id' => 'fooz'],
            ['_id' => 'baz'],
        ]);

        $collection->aggregate([
            ['$match' => ['_id' => ['$in' => [new \MongoId('55db20922a114eb9078b5130')]]]],
            ['$unwind' => '$values'],
            ['$group' => ['_id' => '$values.attribute']]
        ])->willReturn($cursor);

        $this->getAvailableAttributeIdsToExport(['55db20922a114eb9078b5130'])->shouldReturn(['fooz', 'baz']);
    }
}
