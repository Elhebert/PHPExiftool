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
class LinLogCoring extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:LinLogCoring';

    protected string $name = 'LinLogCoring';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Lin Log Coring',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 106541
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:LinLogCoring',
            'desc' => [
                'en' => 'Lin Log Coring',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
