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
class TDA1Bandwidth extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:TDA1Bandwidth';

    protected string $name = 'TDA1Bandwidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'TDA1 Bandwidth',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108536
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:TDA1Bandwidth',
            'desc' => [
                'en' => 'TDA1 Bandwidth',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
