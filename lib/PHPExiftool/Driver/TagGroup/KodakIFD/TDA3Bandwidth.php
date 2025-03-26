<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TDA3Bandwidth extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:TDA3Bandwidth';

    protected string $name = 'TDA3Bandwidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'TDA3 Bandwidth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108560
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:TDA3Bandwidth',
            'desc' => [
                'en' => 'TDA3 Bandwidth',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
