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
class ProcessBorderRowsBottom extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ProcessBorderRowsBottom';

    protected string $name = 'ProcessBorderRowsBottom';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Process Border Rows Bottom',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107267
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ProcessBorderRowsBottom',
            'desc' => [
                'en' => 'Process Border Rows Bottom',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
