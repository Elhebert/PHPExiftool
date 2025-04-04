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
class DoublingMicrovolts extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:DoublingMicrovolts';

    protected string $name = 'DoublingMicrovolts';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Doubling Microvolts',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 107345
             * type : int32s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:DoublingMicrovolts',
            'desc' => [
                'en' => 'Doubling Microvolts',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
