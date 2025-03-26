<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Unknown_CNDB extends AbstractTagGroup
{
    protected string $id = 'Canon:Unknown_CNDB';

    protected string $name = 'Unknown_CNDB';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::Skip
             * line : 70949
             * type : ?
             * writable : false
             * count :
             * flags : binary,permanent,unknown
             */
            'id' => 'Canon::Skip.Canon:Unknown_CNDB',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 38;
}
