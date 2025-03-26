<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Extender;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtenderSerialNumber extends AbstractTagGroup
{
    protected string $id = 'MIE-Extender:ExtenderSerialNumber';

    protected string $name = 'ExtenderSerialNumber';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Extender Serial Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Extender
             * line : 111385
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Extender.MIE-Extender:ExtenderSerialNumber',
            'desc' => [
                'en' => 'Extender Serial Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
