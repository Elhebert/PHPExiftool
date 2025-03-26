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
class ResetBlackSegRows extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:ResetBlackSegRows';

    protected string $name = 'ResetBlackSegRows';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Reset Black Seg Rows',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108422
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:ResetBlackSegRows',
            'desc' => [
                'en' => 'Reset Black Seg Rows',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
