<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Lens extends AbstractTagGroup
{
    protected string $id = 'XMP-aux:Lens';

    protected string $name = 'Lens';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lens',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::aux
             * line : 281681
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::aux.XMP-aux:Lens',
            'desc' => [
                'en' => 'Lens',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
