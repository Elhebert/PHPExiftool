<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Olympus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UnknownBlock4 extends AbstractTagGroup
{
    protected string $id = 'Olympus:UnknownBlock4';

    protected string $name = 'UnknownBlock4';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Unknown Block 4',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Olympus::ImageProcessing
             * line : 176301
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'Olympus::ImageProcessing.Olympus:UnknownBlock4',
            'desc' => [
                'en' => 'Unknown Block 4',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2086;
}
