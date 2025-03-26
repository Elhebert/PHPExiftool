<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLAC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Padding extends AbstractTagGroup
{
    protected string $id = 'FLAC:Padding';

    protected string $name = 'Padding';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Padding',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLAC::Main
             * line : 85327
             * type : ?
             * writable : false
             * count :
             * flags : binary,unknown
             */
            'id' => 'FLAC::Main.FLAC:Padding',
            'desc' => [
                'en' => 'Padding',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 34;
}
