<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Matter extends AbstractTagGroup
{
    protected string $id = 'XML:Matter';

    protected string $name = 'Matter';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Matter',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : OOXML::Main
             * line : 171804
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'OOXML::Main.XML:Matter',
            'desc' => [
                'en' => 'Matter',
            ],
        ],
    ];

    protected int $count = 0;
}
