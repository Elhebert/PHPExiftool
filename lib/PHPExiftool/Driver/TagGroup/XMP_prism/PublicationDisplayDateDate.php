<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_prism;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PublicationDisplayDateDate extends AbstractTagGroup
{
    protected string $id = 'XMP-prism:PublicationDisplayDateDate';

    protected string $name = 'PublicationDisplayDateDate';

    protected ?string $phpType = 'date';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Publication Display Date Date',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::prism
             * line : 290296
             * type : date
             * writable : true
             * count :
             * flags : avoid,flattened,list
             */
            'id' => 'XMP::prism.XMP-prism:PublicationDisplayDateDate',
            'desc' => [
                'en' => 'Publication Display Date Date',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2113;
}
