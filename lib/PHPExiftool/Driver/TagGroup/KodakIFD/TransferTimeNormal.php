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
class TransferTimeNormal extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:TransferTimeNormal';

    protected string $name = 'TransferTimeNormal';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Transfer Time Normal',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108476
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:TransferTimeNormal',
            'desc' => [
                'en' => 'Transfer Time Normal',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
